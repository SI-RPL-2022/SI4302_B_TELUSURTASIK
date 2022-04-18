<?php

use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardPostsController;




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

//------------------------------SEPTI------------------------------------------------

Route::get('/wisata', [WisataController::class, 'index']);
Route::get('/wisata/{wisata}/show', [WisataController::class, 'UserLookDetailWisata'])->name('wisata.show');
Route::get('/wisatas', [WisataController::class, 'UserLookWisata'])->name('wisata.index');
Route::get('/DataUser', [UserController::class, 'showUserData']);
Route::get('/DataMitra', [UserController::class, 'showMitraData']);
Route::get('/DataWisataPending', [WisataController::class, 'showWisataDataPending']);
Route::get('/DataWisata', [WisataController::class, 'showWisataData']);
Route::get('/EditDataMitraUser/{id}', [UserController::class, 'UpdateUserData']);
Route::get('/EditDataWisata/{id}', [WisataController::class, 'UpdateWisataData']);
Route::post('/DataUserUpdate',[UserController::class, 'EditUserData']);
Route::post('/DataWisataUpdate',[WisataController::class, 'EditWisataData']);

Route::get('/DeleteDataUser/{id}',[UserController::class, 'DeleteDataUser']);
Route::get('/DeleteDataMitra/{id}',[UserController::class, 'DeleteDataMitra']);

Route::get('/DeleteDataWisata/{id}', [WisataController::class, 'DeleteWisataData']);

Route::get('/sidebarrahma', function(){
    return view('partials.navbar3');
});
