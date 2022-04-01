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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/DataWisata', function () {
    return view('Mitra/DataWisata' , [
        "name" => "Mitra01" ,
        "image" => "icon.jpg" ,
        "data_wisata" => "Data Wisata" ,
        "data_ulasan" => "Data Ulasan" ,
        "cs" => "Customer Service"
    ]);
});

Route::get('/Detail', function () {
    return view('Mitra/Detail' , [
        "name" => "Mitra01" ,
        "image" => "icon.jpg" ,
        "data_wisata" => "Data Wisata" ,
        "data_ulasan" => "Data Ulasan" ,
        "cs" => "Customer Service"
    ]);
});

Route::get('/TambahWisata', function () {
    return view('Mitra/TambahWisata' , [
        "name" => "Mitra01" ,
        "image" => "icon.jpg" ,
        "data_wisata" => "Data Wisata" ,
        "data_ulasan" => "Data Ulasan" ,
        "cs" => "Customer Service"
    ]);
});

Route::get('/Edit', function () {
    return view('Mitra/EditWisata' , [
        "name" => "Mitra01" ,
        "image" => "icon.jpg" ,
        "data_wisata" => "Data Wisata" ,
        "data_ulasan" => "Data Ulasan" ,
        "cs" => "Customer Service"
    ]);
});