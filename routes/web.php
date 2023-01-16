<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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
})->middleware('auth');

// Route::middleware('only_guest')->group(function () {
//     Route::get('login', [AuthController::class, 'login'])->name('login');
//     Route::post('login', [AuthController::class, 'authenticating'])->name('login.action');
// });

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login_action'])->name('login.action');

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('only_admin');
    
    // categories
    Route::get('category', [CategoryController::class, 'index'])->middleware('only_admin');
    Route::get('category-add', [CategoryController::class, 'add'])->middleware('only_admin');
    Route::post('category-add', [CategoryController::class, 'store'])->middleware('only_admin');
    Route::get('category-edit/{slug}', [CategoryController::class, 'edit'])->middleware('only_admin');
    Route::delete('category-delete/{slug}', [CategoryController::class, 'destroy'])->middleware('only_admin');
    
    // sizes
    Route::get('size', [SizeController::class, 'index'])->middleware('only_admin');
    Route::get('size-add', [SizeController::class, 'add'])->middleware('only_admin');
    Route::post('size-add', [SizeController::class, 'store'])->middleware('only_admin');
    Route::delete('size-delete/{slug}', [SizeController::class, 'destroy'])->middleware('only_admin');

    // items
    Route::get('item', [ItemController::class, 'index'])->middleware('only_admin');
    Route::get('item-add', [ItemController::class, 'add'])->middleware('only_admin');
    Route::post('item-add', [ItemController::class, 'store'])->middleware('only_admin');
    Route::get('item-show/{slug}', [ItemController::class, 'show'])->middleware('only_admin');
    
    // users
    Route::get('user', [UserController::class, 'index'])->middleware('only_user');
    Route::post('user-pilih', [UserController::class, 'pilih'])->middleware('only_user');
    // wanita
    Route::get('user-wanita-add', [UserController::class, 'userWanita'])->middleware('only_user');
    Route::post('user-wanita-add', [UserController::class, 'storeWanita'])->middleware('only_user');
    Route::get('user-wanita-rok-add', [UserController::class, 'userWanita'])->middleware('only_user');
    Route::get('user-wanita-celana-add', [UserController::class, 'userCelanaWanita'])->middleware('only_user');
    // wanita hijab
    Route::get('user-wanita-hijab-add', [UserController::class, 'userWanitaHijab'])->middleware('only_user');
    Route::post('user-wanita-hijab-add', [UserController::class, 'storeWanitaHijab'])->middleware('only_user');
    // pria
    Route::get('user-pria-add', [UserController::class, 'addDataPria'])->middleware('only_user');
    Route::post('user-pria-add', [UserController::class, 'storeDataPria'])->middleware('only_user');
    
    Route::get('user-success', [UserController::class, 'success'])->middleware('only_user');

    // tester session
    Route::get('tampil', [TestController::class, 'tampilkanSession'])->middleware('only_user');
    Route::get('buat', [TestController::class, 'buatSession'])->middleware('only_user');
    Route::get('hapus', [TestController::class, 'hapusSession'])->middleware('only_user');

    // logs
    Route::get('logs', [LogController::class, 'index'])->middleware('only_admin');
});