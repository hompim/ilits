<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->afterResolving(EmailVerificationNotificationController::class, function ($controller) {
        //     $controller->middleware('throttle:verification');
        // });
        // $this->app->afterResolving(PasswordResetLinkController::class, function ($controller) {
        //     $controller->middleware('throttle:verification');
        // });
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // error_reporting(0);
        // FacadesRateLimiter::for('verification', function (Request $request) {
        //     return Limit::perMinute(3)->by($request->ip());
        // });
    }
}
