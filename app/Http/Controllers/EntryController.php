<?php

namespace hospital\Http\Controllers;

use Barryvdh\DomPDF\wrapper;
use hospital\Models\Entry;
use Illuminate\Http\Request;
use hospital\Http\Controllers\Controller;

class EntryController extends Controller
{
public function getBody(Entry $entry)
  {
  
  		$entries = $entry->orderBy('created_at', 'asc')->paginate(7);

	



  return view('profile.body')->with('entries', $entries);
 }

 public function index()
 {

    $entries = Entry::orderBy('created_at', 'asc')->paginate(7);

     return view('entry.index')->with('entries', $entries);
 }


 public function show($id)
 {
    $entry = Entry::find($id);

    return view('entry.show')->with('entry', $entry); 
 } 

 public function destroy($id)

 {
    Entry::destroy($id);

    return redirect()->route('entry.index')->with('info', 'Entry deleted from records.'); ;
    
 }
 public function edit($id)
 {
    $entry = Entry::find($id);

    return view('entry.edit', compact('entry', $entry));
 }
 


 public function postEdit(Request $request)
 {
    $this->validate($request, [
       'first_name' => 'alpha_dash|max:20',
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
             'mortuarybill' => 'alpha|max:20',
             'hospitalbill' => 'alpha|max:20',
             
    	]);
}

  public function update(Request $request, $id)
  {
    $entry = Entry::find($id);

     $entry->first_name = $request->first_name;
       $entry->last_name = $request->last_name;
         $entry->dob = $request->dob;
          $entry->dod = $request->dod;
          $entry->sex = $request->sex;
         $entry->age = $request->age;
        $entry->death_id = $request->death_id;
    $entry->kin = $request->kin;
       $entry->address = $request->address;
          $entry->medical = $request->medical;
         $entry->illness = $request->illness;
          $entry->funeral = $request->funeral;
         $entry->duration = $request->duration;
         $entry->death_cause = $request->death_cause;
         $entry->medication = $request->medication;
         $entry->post_mortem = $request->post_mortem;
        $entry->mortuarybill = $request->mortuarybill;
          $entry->hospitalbill = $request->hospitalbill;
          $entry->save();

        
      return redirect()
      ->route('entry.index')
      ->with('info', 'Entry updated successifully.'); 


 }


}