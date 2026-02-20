<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Reset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sx:r';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset database migrations and seed data to it again.';

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
        $this->call('migrate:fresh', [
            '--force' => true
        ]);
        $this->info('Migrations executed successfuly!');
        $this->call('db:seed', [
            '--force' => true
        ]);
        $this->info('Done!');
    }
}
