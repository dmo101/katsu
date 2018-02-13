<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('bye',function(){
  return'<h1>BYE</h1><p>byebye</p>';
});

Route::get('hello','HelloController@index');
Route::post('hello','HelloController@index');

Route::get('person','PersonController@index')->middleware('auth');

Route::get('view/{id?}','PersonController@view')->middleware('auth');

Route::get('person/add','PersonController@add')->middleware('auth');
Route::post('person/add','PersonController@add')->middleware('auth');

Route::get('person/update/{id?}','PersonController@update')->middleware('auth');
Route::post('person/update/{id?}','PersonController@update')->middleware('auth');

Route::post('person/delete/{id?}','PersonController@delete')->middleware('auth');
//////////////////////////////////////////////////////////////////////////
Route::get('message','MessageController@index');
Route::get('message/add','MessageController@add');
Route::post('message/add','MessageController@add');
Route::get('auther','AutherController@index');
Route::get('auther/view/{id}','AutherController@view');
Route::get('message/view/{id}','MessageController@view');

Route::get('search','SearchController@search');
Route::post('search','SearchController@search');

Route::get('person/auth','PersonController@auth');
Route::post('person/auth','PersonController@auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
