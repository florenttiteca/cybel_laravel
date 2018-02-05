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

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/soins', function () {
    return view('cybel.care');
})->name('cybel.care');

Route::get('/parfumerie', function () {
    return view('cybel.parfumerie');
})->name('cybel.parfumerie');

Route::get('/contact', function () {
    return view('cybel.contact');
})->name('cybel.contact');
