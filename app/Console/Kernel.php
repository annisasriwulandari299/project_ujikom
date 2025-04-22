<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();

        // Tambahkan ini untuk testing pengingat mingguan
        $schedule->command('send:weekly-reminder')
         ->weekly()
         ->mondays()
         ->at('08:00');

        //  $schedule->command('send:weekly-reminder')
        //  ->weekly()
        //  ->mondays()
        //  ->at('08:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
