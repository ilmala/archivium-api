<?php

namespace Ilmala\Archivium;

use Ilmala\Archivium\Commands\ArchiviumCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ArchiviumServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('archivium-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_archivium-api_table')
            ->hasCommand(ArchiviumCommand::class);
    }
}
