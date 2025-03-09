<?php

use Illuminate\Console\Command;
use Passionator\LaravelPackageStart\Commands\LaravelPackageStartCommand;

use function Pest\Laravel\artisan;

it('can test', function () {
    artisan(LaravelPackageStartCommand::class)->assertExitCode(Command::SUCCESS);
});
