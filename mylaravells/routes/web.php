<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});
Route::get('/myController',
    [MyController::class, 'myFunction']);

Route::post('/myController',
    [MyController::class, 'myFunction']);

Route ::get('/hello', function () {
    return "<h1>Hello World!</h1>";
});
