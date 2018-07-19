<?php

/** @var \Illuminate\Routing\Router $router */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

$router->post('/book', 'BooksController@store');
