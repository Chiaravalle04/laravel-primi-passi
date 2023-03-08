<?php

use Illuminate\Support\Facades\Route;

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

// Homepage
Route::get('/', function () {
    return view('home');
});

// Pagina 1
Route::get('docs', function () {
    return view('docs');
});

// Pagina 2
Route::get('ecosystem', function () {
    return view('ecosystem');
});

// Pagina 3
Route::get('news', function () {
    return view('news');
});