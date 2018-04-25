<?php

namespace Buhori\Nahkoda;

use Illuminate\Support\ServiceProvider;

class NahkodaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'nahkoda');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'nahkoda');

        $this->publishes([
            __DIR__.'/public' => public_path('/'),
        ]);
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
