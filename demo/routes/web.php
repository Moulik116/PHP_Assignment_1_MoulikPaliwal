<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello/{num1}/{num2}', function ($num1,$num2) {
    return 'Addition: '.($num1+$num2);
})->where('num1','[0-9]+')
->where('num2','[0-9]+');
