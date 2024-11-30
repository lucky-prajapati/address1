<?php

namespace Lucky\Address1\Providers;

use Illuminate\Support\ServiceProvider;

class AddressProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ]);
    }
}