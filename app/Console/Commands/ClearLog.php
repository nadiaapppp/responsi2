<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;

class ClearLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear the application log files';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        File::put(storage_path('logs/laravel.log'), '');
        $this->info('Application logs have been cleared!');
    }
}
