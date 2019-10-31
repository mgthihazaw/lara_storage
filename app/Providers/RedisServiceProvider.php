<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RedisServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('redis', function ($app) {
            return new Database($app['config']['database.redis']);
            // return $app['config']['database.redis'];
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function provides()
    {
        return array('redis');
    }
}