<?php

namespace Audizz\pevb-CUPS;

use Illuminate\Support\ServiceProvider;

class CupsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Audizz\pevb-CUPS\CupsController');
    }
}
