<?php

namespace MagmaTech\LoggerElastic\Providers;

use MagmaTech\LoggerElastic\Listeners\PrepareLogPayload;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Log\Events\MessageLogged;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        MessageLogged::class => [
            PrepareLogPayload::class
        ],
    ];

    /**
     * @return void
     */
    public function boot(): void
    {
        parent::boot();
    }
}
