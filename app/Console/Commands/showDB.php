<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class showDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'show the current connected database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info(DB::connection()->getDatabaseName());
    }
}