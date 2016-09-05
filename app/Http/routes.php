
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

Route::get('/', function () {
	return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('/student/all', function (){
	return view('student.allstudent');
});

Route::get('/student/add', function (){
	return view('student.addstudent');
});

Route::get('/student/detail', function (){
	return view('student.detailstudent');
});

Route::get('/student/edit/grade', function (){
	return view('student.addstudentgradereport');
});

Route::get('/teacher/all', function (){
	return view('teacher.allteacher');
});

Route::get('teacher/detail', function (){
	return view('teacher.detailteacher');
});

Route::get('teacher/add', function(){
	return view('teacher.addteacher');
});

Route::get('mapel/all', function(){
	return view('mapel.allmapel');
});

Route::get('mapel/detail', function(){
	return view('mapel.detailmapel');
});

Route::get('mapel/add', function(){
	return view('mapel.addmapel');
});

Route::get('class/all', function (){
	return view('class.allclass');
});

Route::get('class/add', function (){
	return view('class.addclass');
});