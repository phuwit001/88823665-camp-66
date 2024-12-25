<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Hello', function () {
    return "<h1>Hello World</h1>";
});