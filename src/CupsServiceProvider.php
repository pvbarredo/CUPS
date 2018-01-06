<?php

namespace Pvbarredo\CUPS;

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
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Cups', 'Pvbarredo\CUPS\Cups');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Pvbarredo\CUPS\CupsController');
    }
}
