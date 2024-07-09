<?php

namespace HeyJorgeDev\LaravelStateflow;

use HeyJorgeDev\LaravelStateflow\Commands\LaravelStateflowCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelStateflowServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-stateflow')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-stateflow_table')
            ->hasCommand(LaravelStateflowCommand::class);
    }
}
