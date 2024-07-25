<?php

namespace App\Providers;

use App\Services\Web\Auth\UserService;
use Illuminate\Support\ServiceProvider;
use App\Services\Web\LandingPageService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind("landing_page", function ($app) {
            return new LandingPageService();
        });

        $this->app->bind("user", function ($app) {
            return new UserService();
        });

        $this->app->singleton('VoyagerGuard', function () {
            return 'admin';
        });

    }
}
