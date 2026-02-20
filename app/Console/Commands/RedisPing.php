<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class RedisPing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:ping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Redis connectivity and return PONG if Redis is available';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
			$response = Redis::ping();

			if ($response == 'PONG') {
				$this->info('✅ Redis is available: ' . $response);
				return Command::SUCCESS;
			} else {
				$this->warn('⚠️  Redis responded with: ' . $response);
				return Command::FAILURE;
			}
		} catch (Exception $e) {
			$this->error('❌ Redis connection failed: ' . $e->getMessage());
			return Command::FAILURE;
		}
    }
}
