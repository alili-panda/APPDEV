<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/staff', function () {
    return view('staff');
});

Route::get('/login', function () {
    return view('login');
});

