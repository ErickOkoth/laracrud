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

Route::get('/test', ['as'=>'testing', function(){
    return view('test');
}]);
Route::get('redirect', function(){
    return redirect()->route('testing');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addstudent', 'StudentController@addstudent')->name('addstudent');
Route::post('/addstudent', 'StudentController@poststudent')->name('poststudent');
Route::get('/students', 'StudentController@students')->name('students');
Route::get('/remove/student/{id}', 'StudentController@remove')->name('remove');
Route::get('/edit/student/{id}', 'StudentController@edit')->name('edit');
Route::post('/update/student/{id}', 'StudentController@update')->name('update');
