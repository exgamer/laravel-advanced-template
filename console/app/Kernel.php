<?php

namespace Console\App;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Application;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    public function __construct(Application $app)
    {
        parent::__construct($app);
        //считываем конфиг с командами и регистриурем
        if (file_exists($commandsConfigPath = __DIR__.'/../config/commands.php')) {
            $this->commands = require $commandsConfigPath;
        }
    }


    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //
    }
}
