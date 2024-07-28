<?php

namespace Deniscosmin21\LogService;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Deniscosmin21\LogService\Commands\LogServiceCommand;
use Deniscosmin21\LogService\LogService;
use Illuminate\Foundation\AliasLoader;
use Spatie\LaravelPackageTools\Commands\InstallCommand;

class LogServiceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('logservice')
            ->hasConfigFile()
            ->hasViews()
            ->publishesServiceProvider('FacadeServiceProvider')
            ->hasMigration('create_logservice_table')
            ->hasInstallCommand(function(InstallCommand $command) {
                $command->copyAndRegisterServiceProviderInApp();
            });
    }
}
