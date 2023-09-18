<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Http\Request;

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



Route::get('/ip', function (Request $request) {
    return $request->ip();
});
Route::get('/testing', function () {
    return "wisnu";
});
Route::resource('/dashboard', DashboardController::class)->middleware('auth');
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->middleware('auth');
// Route::get('/bug', [PostController::class, 'index']);
Route::get('/', [PostController::class, 'index']);
Route::get('/admin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('throttle:loginx');
Route::get('/logout/', [LoginController::class, 'logout']);
Route::resource('/dashboard/posts/', DashboardPostController::class)->middleware('auth');
Route::get('/dashboard/posts/checkSlug/', [DashboardPostController::class, 'checkSlug']);