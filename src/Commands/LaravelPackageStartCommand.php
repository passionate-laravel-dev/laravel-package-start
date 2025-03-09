<?php

namespace Passionator\LaravelPackageStart\Commands;

use Illuminate\Console\Command;

class LaravelPackageStartCommand extends Command
{
    public $signature = 'laravel-package-start';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
