<?php

namespace Approached\LaravelDateInternational;

use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerDateIntlBuilder();
        $this->app->alias('dateintl', 'Approached\LaravelDateInternational\DateIntlBuilder');
    }

    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerDateIntlBuilder()
    {
        $this->app->singleton('dateintl', function ($app) {
            return new DateIntlBuilder();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['dateintl'];
    }
}
