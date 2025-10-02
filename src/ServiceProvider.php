<?php

namespace LaravelLegis\Core;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap package services.
     */
    public function boot(): void
    {
        // if ($this->app->runningInConsole()) {
        //     $this->commands([
        //         LegisClearCacheCommand::class,
        //         LegisFreshCommand::class,
        //         LegisClearStorageCommand::class,
        //     ]);
        // }

        $this->publishes([
            __DIR__.'/../config/legis-core.php' => config_path('legis-core.php'),
        ], 'legis-core-config');

        // $this->publishesMigrations([
        //     __DIR__.'/../database/migrations' => database_path('migrations'),
        // ], 'legis-core-migrations');

        // $this->publishes([
        //     __DIR__ . '/../database/seeders/' => database_path('seeders'),
        // ], 'legis-core-seeders');
    }

    /**
     * Register package services.
     */
    public function register()
    {
        $this->app->singleton(Manager::class, function () {
            return new Manager();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/legis-core.php',
            'legis-core'
        );
    }
}
