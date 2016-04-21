<?php

namespace hospital\Http\Controllers;

use DB;
use hospital\Models\Entry;
use Illuminate\Http\Request;

class SearchController extends Controller
{
	public function getResults(Request $request)
	{
		$query = $request->input('query');
        
    if (!$query) {
    	return redirect()->route('entry.index');
    }

    $entries = Entry::where(DB::raw("CONCAT(first_name, '',last_name)"), 'LIKE', "%{$query}%")
      ->orWhere('illness', 'LIKE', "%{$query}%")
      ->orWhere('death_id', 'LIKE', "%{$query}%")
      ->get();
     
		return view('search.results')->with('entries', $entries);
	}
}