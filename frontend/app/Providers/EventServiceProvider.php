<?php

namespace Frontend\App\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \Frontend\App\Events\ExampleEvent::class => [
            \Frontend\App\Listeners\ExampleListener::class,
        ],
    ];
}
