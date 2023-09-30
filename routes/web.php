<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Post;
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

Route::get('/', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/admin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('throttle:loginx');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout']);
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/dashboard/post/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/kont/', [DashboardPostController::class, 'kont'])->middleware('auth');

Route::get('/ip', function (Request $request) {
    return $request->ip();
});
Route::get('/sitemap', function () {
    $sitemap = Sitemap::create();
        // ->add(Url::create('/about-us'))
        // ->add(Url::create('/contact_us'));

    $post = Post::all();
    foreach ($post as $post) {
        $sitemap->add(Url::create("/post/{$post->slug}"));
    }
    $sitemap->writeToFile(public_path('sitemap.xml'));
});