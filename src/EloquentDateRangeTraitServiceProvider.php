<?php

namespace Gitwithravish\EloquentDateRangeTrait;

use Illuminate\Support\ServiceProvider;

class EloquentDateRangeTraitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'eloquent-date-range-trait');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'eloquent-date-range-trait');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('eloquent-date-range-trait.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/eloquent-date-range-trait'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/eloquent-date-range-trait'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/eloquent-date-range-trait'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'eloquent-date-range-trait');

        // Register the main class to use with the facade
        $this->app->singleton('eloquent-date-range-trait', function () {
            return new EloquentDateRangeTrait;
        });
    }
}
