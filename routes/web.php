<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\ReviewController;




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
    return view('customer.home.index');
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

// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/register', function () {
    return view('register');
});
Route::get('/logout', function () {
    return view('logout');
});

// Route::get('login', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
// Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('/review', [ReviewController::class, 'index']);
Route::get('/admin/wisata', [WisataController::class, 'wisataAdmin']);
Route::get('/admin/wisata/create', [WisataController::class, 'create']);
Route::post('/admin/wisata', [WisataController::class, 'store']);
Route::get('/admin/wisata/{wisata}/edit', [WisataController::class, 'edit']);
Route::post('/admin/wisata/{wisata}', [WisataController::class, 'update']);
Route::post('/admin/wisata/{wisata}/delete', [WisataController::class, 'destroy']);

