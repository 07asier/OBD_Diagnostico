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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register2', function () {
    return view('auth/register');
});
Route::get('/login2', function () {
    return view('auth/login');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/admin', function (){
    return view('auth/adminLogin');
});
