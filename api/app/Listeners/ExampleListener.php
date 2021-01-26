<?php

namespace Api\App\Listeners;

use Api\App\Events\ExampleEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ExampleListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \Frontend\App\Events\ExampleEvent  $event
     * @return void
     */
    public function handle(ExampleEvent $event)
    {
        //
    }
}
