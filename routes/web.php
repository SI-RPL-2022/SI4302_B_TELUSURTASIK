<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardPostsController;



// -----------------------------MITRA----------------------------------

Route::resource('wisatas', DashboardPostsController::class);
Route::get('/Mitra', [DashboardPostsController::class, 'index']);

Route::get('/TambahWisata',[DashboardPostsController::class, 'create']);
Route::post('/TambahWisata',[DashboardPostsController::class, 'store']);

Route::get('/dashboard',[DashboardPostsController::class, 'index']);
Route::get('/Detail/{id}',[DashboardPostsController::class, 'show']);

Route::get('/EditWisata/{id}', [DashboardPostsController::class, 'edit']);
Route::patch('/EditWisata', [DashboardPostsController::class, 'update']);
Route::get('/Delete/{id}', [DashboardPostsController::class, 'delete']);


Route::resource('/dashboard', DashboardPostsController::class);

//------------------------------------------------------------------------------