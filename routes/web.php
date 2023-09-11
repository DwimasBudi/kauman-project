<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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



Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');
// Route::get('/bug', [PostController::class, 'index']);
Route::get('/', [PostController::class, 'index']);
Route::get('/admin/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/', [LoginController::class, 'authenticate']);
Route::get('/logout/', [LoginController::class, 'logout']);
Route::resource('/dashboard/posts/', DashboardController::class)->middleware('auth');
Route::get('/dashboard/posts/checkSlug/', [DashboardController::class, 'checkSlug']);