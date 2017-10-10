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

Route::get('/albums', function () {
    return view('albums');
});

Route::get('/albums/1', function () {
    return view('/application/albums1');
});

Route::get('/albums/2', function () {
    return view('/application/albums2');
});

Route::get('/parameters', function () {
    return view('/application/parameters');
});

Route::get('/examples', function () {
    return view('examples');
});

Route::get('/project', function () {
    return view('project');
});

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
