<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class IdeHelperGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sx:ide';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run ide helper generate command.';

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
        $this->call('ide-helper:generate');
    }
}
