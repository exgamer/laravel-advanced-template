<?php

namespace Frontend\App\Events;

use Illuminate\Queue\SerializesModels;

abstract class Event
{
    use SerializesModels;
}
