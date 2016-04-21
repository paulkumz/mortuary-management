<?php
namespace hospital\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use hospital\Models\User;
class AuthController extends Controller
{
	public function getSignup()
	{
		return view('auth.signup');
	}
	public function postSignup(Request $request)
	{
       $this->validate($request, [
       	     'first_name' => 'required|alpha_dash|max:20',
             'last_name' => 'required|alpha_dash|max:20',
             'title' => 'required|alpha|max:2',
             'email' => 'required|unique:users|email|max:255',
             'username' => 'required|unique:users|alpha_dash|max:20',
             'password' => 'required|min:6',

       	]);
       User::create([
      'email' => $request->input('email'),
      'username' => $request->input('username'),
      'first_name' => $request->input('first_name'),
      'last_name' => $request->input('last_name'),
      'title' => $request->input('title'),
       'password' => bcrypt($request->input('password')),

       	]);
      return redirect()
      ->route('home')
      ->with('info', 'New personell account created.'); 
	}  

	public function getSignin()
	{
       return view('auth.signin');
	}
	public function postSignin(Request $request)
	{
        $this->validate($request, [
          'email' => 'required',
          'password' => 'required',
        	]);
     if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
         return redirect()->back()->with('info', 'Wrong credentials, contact Admin');
     }
       return redirect()->route('content')->with('info', 'Welcome, login successifull.');
	}
  public function getSignout()
  {
    Auth::logout();
    return redirect()->route('auth.signin');
  }

}
