<?php

namespace Helmab\ModelUniqueCode;

use Illuminate\Support\ServiceProvider;

class ModelUniqueCodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('model-unique-code.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'model-unique-code');

        // Register the main class to use with the facade
        $this->app->singleton('model-unique-code', function () {
            return new ModelUniqueCode;
        });
    }
}
