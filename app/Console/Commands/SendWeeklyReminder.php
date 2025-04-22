<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\WeeklyReminder;
use App\Models\User;

class SendWeeklyReminder extends Command
{
    protected $signature = 'send:weekly-reminder';
    protected $description = 'Send weekly reminder email to users';

    public function handle()
    {
        // Logika untuk mengirim email
        $users = User::all(); // Sesuaikan dengan model dan query Anda

        foreach ($users as $user) {
            Mail::to($user->email)->send(new WeeklyReminder($user));
        }

        $this->info('Weekly reminder emails sent successfully!');
    }
}
