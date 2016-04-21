<?php

namespace hospital\Http\Controllers;

use Barryvdh\DomPDF\wrapper;
use Illuminate\Http\Request;
use hospital\Http\Requests;
use hospital\Models\Entry;

class PdfController extends Controller
{

 public function show($id)
   {
    $entry = Entry::find($id);

    return view('pdf.show')->with('entry', $entry); 
 } 
       
 
    public function getData() 
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some random text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }
}
