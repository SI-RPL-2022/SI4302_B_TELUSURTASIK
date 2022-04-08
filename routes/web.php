<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardPostsController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/Detail', function () {
    return view('Mitra/Detail');
});

Route::get('/TambahWisata', function () {
    return view('Mitra/TambahWisata');
});

Route::get('/Edit', function () {
    return view('Mitra/EditWisata');
});





Route::get('/dashboard',function(){
    return view('Mitra/dashboard/index');
});



Route::resource('/TambahWisata', DashboardPostsController::class);