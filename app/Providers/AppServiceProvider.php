<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;// dont use this program for laravel ,


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
            if(config('app.env') === 'production') {

            \URL::forceScheme('https');
            }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
           Schema::defaultStringLength('191');

    }
}
