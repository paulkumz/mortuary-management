<?php
namespace hospital\Http\Controllers;

use Illuminate\Http\Request;
use hospital\Models\Entry;
class RegController extends Controller
{
	public function getData()
	{
		return view('reg.data');
	}
	public function postData(Request $request)
	{
       $this->validate($request, [
       	 'first_name' => 'required|alpha_dash|max:20',
             'last_name' => 'alpha_dash|max:20',
             'sex' => 'alpha|max:10',
             'dob' => 'date|max:20',
             'dod' => 'date|max:20',
             'age' => 'max:3',
             'death_id' => 'alpha_dash|max:20',
             'kin' => 'string|max:40',
             'address' => 'string|max:50',
             'medical' => 'string|max:50',
             'illness' => 'string|max:20',
             'funeral' => 'string|max:20',
             'duration' => '|max:20',
             'death_cause' => 'string|max:20',
             'medication' => 'string|max:20',
             'post_mortem' => 'string|max:200',
             'mortuarybill' => 'max:20',
             'hospitalbill' => 'max:20',
             
       	]);

       Entry::create([
      'first_name' => $request->input('first_name'),
      'last_name' => $request->input('last_name'),
      'dob' => $request->input('dob'),
      'dod' => $request->input('dod'),
      'sex' => $request->input('sex'),
      'age' => $request->input('age'),
      'death_id' => $request->input('death_id'),
      'kin' => $request->input('kin'),
      'address' => $request->input('address'),
      'medical' => $request->input('medical'),
      'illness' => $request->input('illness'),
      'funeral' => $request->input('funeral'),
      'duration' => $request->input('duration'),
      'death_cause' => $request->input('death_cause'),
      'medication' => $request->input('medication'),
      'post_mortem' => $request->input('post_mortem'),
      'mortuarybill' => $request->input('mortuarybill'),
      'hospitalbill' => $request->input('hospitalbill'),

       	]);
      return redirect()
      ->route('reg.data')
      ->with('info', 'Body registered successifully.'); 
	}  

}
