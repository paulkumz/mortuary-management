<?php
namespace hospital\Http\Controllers;
use Auth;
class HomeController extends Controller
{
	public function index()
	{

       return view('auth.signin');
	
	}
	
}