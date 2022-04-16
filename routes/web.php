<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;



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


Route::get('/wisata', function () {
    return view('customer.wisata.index');
});

Route::get('/about', function () {
    return view('customer.about.index');
});

Route::get('/help', function () {
    return view('customer.help.index');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/logout', function () {
    return view('logout');
});


Auth::routes();

Route::get('/', function () {
    return view('customer.home.index');
});
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('landing.page');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('admin/datauser', [UserController::class, 'showUserData'])->name('admin.datauser')->middleware('is_admin');

Route::get('/review', [ReviewController::class, 'index']);
Route::get('/admin/wisata', [WisataController::class, 'wisataAdmin']);
Route::get('/admin/wisata/create', [WisataController::class, 'create']);
Route::post('/admin/wisata', [WisataController::class, 'store']);
Route::get('/admin/wisata/{wisata}/edit', [WisataController::class, 'edit']);
Route::post('/admin/wisata/{wisata}', [WisataController::class, 'update']);
Route::post('/admin/wisata/{wisata}/delete', [WisataController::class, 'destroy']);

