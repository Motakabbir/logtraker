<?php

namespace Adlog\Logtracker;

use Illuminate\Auth\Events\Login;
use Adlog\Logtracker\Listeners\LoginListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;


class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Login::class   => [
            LoginListener::class
        ]
    ];

    public function boot()
    {
        parent::boot();
    }
}