<?php

namespace HeyJorgeDev\LaravelStateflow\Commands;

use Illuminate\Console\Command;

class LaravelStateflowCommand extends Command
{
    public $signature = 'laravel-stateflow';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
