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
    //return view('auth.login');
    return redirect()->route('studentusers.index');
})->middleware('auth');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('studentusers', 'StudentUsersController');

// Route::get('student-users', 'StudentController@index')->name('student-users.index');
// Route::get('student-users/create', 'StudentController@create')->name('student-users.create');
// Route::post('student-users', 'StudentController@store')->name('student-users.store');
// Route::delete('student-users', 'StudentController@delete')->name('student-users.destroy');
// Route::get('student-users/{id}', 'StudentController@show')->name('student-users.show');
// Route::get('student-users/{id}/edit', 'StudentController@edit')->name('student-users.edit');


