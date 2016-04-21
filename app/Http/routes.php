<?php

Route::group(['middleware' => ['web']], function () {
 
  /**
  *Home
  */ 
Route::get('/', [
   'uses' => '\hospital\Http\Controllers\HomeController@index',
   'middleware' => ['guest'],
   'as' => 'home',

	]);

Route::get('/charts', [
   'uses' => '\hospital\Http\Controllers\ChartController@index',
   
   'as' => 'charts',

  ]);

Route::get('/content', [
   'uses' => '\hospital\Http\Controllers\ContentController@home',
   'middleware' => ['auth'],
   'as' => 'content',

  ]);



/**
  *Authentication
  */ 
Route::get('/signup', [
   'uses' => '\hospital\Http\Controllers\AuthController@getSignup',
   'middleware' => ['auth'],
   'as' => 'auth.signup',
	]);

Route::post('/signup', [
   'uses' => '\hospital\Http\Controllers\AuthController@postSignup',
   
	]);

Route::get('/signin', [
   'uses' => '\hospital\Http\Controllers\AuthController@getSignin',
   'middleware' => ['guest'],
   'as' => 'auth.signin',
	]);

Route::post('/signin', [
   'uses' => '\hospital\Http\Controllers\AuthController@postSignin',
   ]);

Route::get('/signout', [
   'uses' => '\hospital\Http\Controllers\AuthController@getSignout',
    'as' => 'auth.signout',
   ]);

/**
  *DataEntry
  */ 
Route::get('/data', [
   'uses' => '\hospital\Http\Controllers\RegController@getData',
   'as' => 'reg.data',
  ]);

Route::post('/data', [
   'uses' => '\hospital\Http\Controllers\RegController@postData',
   
  ]);

/**
*deceased profile
*/
Route::resource('entry', 'EntryController');

/**
*deceased profile update
*/


Route::get('/profile/edit', [
     'uses' => '\hospital\Http\Controllers\EntryController@getEdit',
     'as' => 'profile.edit',
    ]);






Route::post('/profile/edit', [
     'uses' => '\hospital\Http\Controllers\EntryController@postEdit',
  
    ]);

/**
*Search
*/
Route::get('/search', [
     'uses' => '\hospital\Http\Controllers\SearchController@getResults',
     'as' => 'search.results',
    ]);

Route::get('pdf', 'PdfController@invoice');





});
