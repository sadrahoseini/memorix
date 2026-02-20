<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Listen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sx:listen';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Listen queues.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): void
    {

        $this->info('Start listening queues!');

        $this->call('queue:listen', [
            '--queue' => 'default'
        ]);
    }
}
