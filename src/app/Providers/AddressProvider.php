<?php

namespace Lucky\Address1\Providers;

use Illuminate\Support\ServiceProvider;

class AddressProvider extends ServiceProvider
{
    public function boot()
    {
        $this-> loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
}