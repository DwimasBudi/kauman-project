<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();
        
        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
        RateLimiter::for('login', function (Request $request) {
            // return Limit::perMinute(3);
            return Limit::perMinute(2)->by($request->input('username'));
        });
        RateLimiter::for('loginx', function (Request $request) {
            return Limit::perMinute(3)->by($request->ip())->response(function () {
                return back()->with('loginLimit', 'Terlau Banyak percobaan!, Tunggu 1 Menit !');
            });
        });
        RateLimiter::for('loginc', function (Request $request) {
            return Limit::perMinute(3)->by($request->ip())->response(function () {
                $message = 'Terlau Banyak percobaan!, Tunggu 1 Menit !';
                return back()->withCookie(cookie('loginLimit', $message, 1));
            });
        });
        RateLimiter::for('comment', function (Request $request) {
            return Limit::perMinute(3)->by($request->ip())->response(function () {
                $message = 'Jangan Spam Commentar! Tunggu 1 Menit !';
                return redirect()->to(app('url')->previous() . "#comment")->withCookie(cookie('CommentLimit', $message, 1));
            });
        });
    }
}
