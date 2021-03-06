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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/subjects', 'SubjectsController');
Route::post('/subjects/store', 'SubjectsController@store')->name('subjects.store');
Route::resource('/lessons', 'LessonsController');


/*LOGIN ROUTES*/
Route::get('register/students','AuthStudent\RegisterController@showRegistrationForm')->name('students.register');
Route::post('register/students','AuthStudent\RegisterController@register')->name('student.register');
/*LOGIN ROUTES*/
