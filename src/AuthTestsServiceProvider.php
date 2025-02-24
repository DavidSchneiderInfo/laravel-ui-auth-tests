<?php

namespace DavidSchneiderInfo\AuthTests;

use DCzajkowski\AuthTests\Console\Commands\AuthTestsMakeCommand;
use Illuminate\Support\ServiceProvider;

class AuthTestsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                AuthTestsMakeCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
