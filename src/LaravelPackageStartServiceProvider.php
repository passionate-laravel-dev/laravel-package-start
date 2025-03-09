<?php

namespace Passionator\LaravelPackageStart;

use Passionator\LaravelPackageStart\Commands\LaravelPackageStartCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelPackageStartServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-package-start')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_package_start_table')
            ->hasCommand(LaravelPackageStartCommand::class);
    }
}
