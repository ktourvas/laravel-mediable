<?php

namespace ktourvas\LaravelMediable;

use Illuminate\Support\ServiceProvider;

class LaravelMediableServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../config/laravel-mediable.php' => config_path('laravel-mediable.php'),
        ]);

    }

}