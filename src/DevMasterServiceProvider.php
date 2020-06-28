<?php

namespace I9w3b\DevMaster;

use Illuminate\Support\ServiceProvider;

class DevMasteruServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__ . '/Resources/views' => resource_path('views'),
        ], 'devmaster-view');

        $this->publishes([
            __DIR__ . '/Resources/views/layouts' => resource_path('views/layouts'),
        ], 'devmaster-view-layouts');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
