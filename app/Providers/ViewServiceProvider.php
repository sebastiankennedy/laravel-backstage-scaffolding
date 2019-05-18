<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
