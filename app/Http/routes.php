<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
	return view('welcome');
});

Route::get('/student/all', function (){
	return view('allstudent');
});

Route::get('/student/add', function (){
	return view('addstudent');
});

Route::get('/student/detail', function (){
	return view('detailstudent');
});

Route::get('/student/edit/grade', function (){
	return view('addstudentgradereport');
});