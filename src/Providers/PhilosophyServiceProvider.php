<?php

namespace Italofantone\Philosophy\Providers;

use Illuminate\Support\ServiceProvider;
use Italofantone\Philosophy\Commands\PhilosophyCommand;

class PhilosophyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PhilosophyCommand::class,
            ]);
        }
    }
}