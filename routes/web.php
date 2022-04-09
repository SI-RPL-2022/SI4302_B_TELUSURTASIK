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
| */

<<<<<<< HEAD

Route::get('/HomeAdmin', function () {
    return view('MainAdmin');
=======
Route::get('/', function () {
    return view('Home');
>>>>>>> origin/main
});

Route::get('/wisata', function () {
    return view('wisata');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

