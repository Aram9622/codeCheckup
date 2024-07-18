<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Api\LandingPageService;

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

        $this->app->singleton('VoyagerGuard', function () {
            return 'admin';
        });
    }
}
