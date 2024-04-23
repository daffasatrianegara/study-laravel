<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('pages.home.main');
});

Route::get('/laravel-docs', function () {
    return view('pages.test.welcome');
});

Route::get('/home-test', function () {
    return view('pages.test.home');
});

