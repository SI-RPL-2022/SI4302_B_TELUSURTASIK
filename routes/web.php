<?php

use App\Http\Controllers\WisataController;
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



Route::get('/wisata', [WisataController::class, 'index']);
Route::get('/wisata/{wisata}/show', [WisataController::class, 'UserLookDetailWisata'])->name('wisata.show');
Route::get('/wisatas', [WisataController::class, 'UserLookWisata'])->name('wisata.index');
