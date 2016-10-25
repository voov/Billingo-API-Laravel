<?php
/**
 * Copyright (c) 2016, VOOV LLC.
 * All rights reserved.
 * Written by Daniel Fekete
 */

namespace Billingo\API\Laravel;


use Billingo\API\Connector\HTTP\Request;
use Illuminate\Support\ServiceProvider;

class BillingoServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('billingo-request', function() {
            $client = new Request([
                'public_key' => config('billingo.public_key'),
                'private_key' => config('billingo.private_key')
            ]);

            return $client;
        });

        $this->app->alias('billingo-request', Request::class);
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/billingo.php' => config_path('billingo.php'),
        ]);
    }

}
