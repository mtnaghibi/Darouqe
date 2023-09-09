<?php

namespace AR\Darouqe\Laravel\Providers;

use AR\Darouqe\Darouqe;
use Illuminate\Support\ServiceProvider;

class DarouqeServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Darouqe::class, function () {
            return new Darouqe();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Darouqe::class];
    }
}
