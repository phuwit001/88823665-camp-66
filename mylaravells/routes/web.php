<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

Route::get('/login',
[LoginController::class, 'index']);

Route::get('/register',
[RegisterController::class, 'index']);

Route::get('/home',
[HomeController::class, 'index']);

Route::get('/',
[HomeController::class, 'index']);

Route::get('/404', function(){
    abort(404);
});

Route::get('/500', function(){
    abort(500);
});
Route::get('/myController',
    [MyController::class, 'myFunction']);

Route::post('/myController',
    [MyController::class, 'myFunction']);

Route ::get('/hello', function () {
    return "<h1>Hello World!</h1>";
});
