<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


Route::get('/admin', function () {
    return view('login/index');
});
Route::get('/dashboard', function () {
    return view('dashboard/index');
});
// Route::get('/bug', [PostController::class, 'index']);
Route::get('/', [PostController::class, 'index']);