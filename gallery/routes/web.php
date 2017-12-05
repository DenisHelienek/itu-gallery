<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/examples', function () {
    return view('examples');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/user', function () {
    return view('/application/user');
});

Route::get('/login', function () {
    return view('/application/login');
});

Route::get('/register', function () {
    return view('/application/register');
});



Route::get('/gallery', function () {
    return view('/albums');
});

Route::get('/albums', function () {
    return view('/application/albums');
});

Route::get('/parameters', function () {
    return view('/application/parameters');
});

Route::get('/demo', function () {
    return view('/application/demo');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

