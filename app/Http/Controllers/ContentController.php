<?php
namespace hospital\Http\Controllers;
use Auth;
class ContentController extends Controller
{
	public function home()
	{

       return view('content');
	
	}
	
}