<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/ksy/main', function () {
    return view('KSY/main');
});
Route::get('/ksy/about', function () {
    return view('KSY/about');
});
Route::get('/ksy/hard', function () {
    return view('KSY/hard');
});
Route::get('/ksy/lessons', function () {
    return view('KSY/lessons');
});
Route::get('/ksy/registration', function () {
    return view('KSY/registration');
});

Route::post ('/ksy/registration/submit','KSY\RegisterController@Write');

Route::get('/test','test\TestController@getTest');



















