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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu', 'MenuController@index');

Route::post('/date', function () {
    return view('date');
});

Route::post('/check', function () {
    return view('check');
});
//Route::get('/check', 'CheckController@index');

//シーディング
Route::get('/owner/index', 'OwnerController@index');
