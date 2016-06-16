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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/congviec', 'HomeController@index');
Route::get('/sinhvien', 'HomeController@sinhvien');
Route::get('/login', 'HomeController@login');

Route::get('/congviec/{id}', 'HomeController@congviec_id');
Route::get('/sinhvien/{id}', 'HomeController@sinhvien_id');