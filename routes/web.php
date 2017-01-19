<?php

/** @var \Illuminate\Routing\Router $router */

// Public facing page
$router->get('/', 'HomeController@public')->middleware('guest');

// Authentication, default routes by Laravel.
Auth::routes();

// Authenticated routes.
$router->group(['middleware' => 'auth'], function(\Illuminate\Routing\Router $router) {
    $router->get('home', 'HomeController@home');
    $router->get('my-list', 'BooksController@index');
    $router->get('account', 'AccountController@account');
    $router->resource('book', 'BooksController', ['except' => ['index']]);
});
