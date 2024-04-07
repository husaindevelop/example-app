<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use App\Jobs\NewQueue;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
   
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        //$n=new NewQueue("New");
    $schedule->job(dispatch(new NewQueue("Hello")))->everyMinute();

        /*
        $schedule->call(function () {
            DB::table('electricity')->update(['level13' => date ("H:i:s")]);      
        })->everyMinute();
        */
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
