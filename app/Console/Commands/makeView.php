<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class makeView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'makeview';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'to create new view in views folder';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('now nothing to show');
    }
}