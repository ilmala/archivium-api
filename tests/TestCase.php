<?php

namespace Ilmala\Archivium\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ilmala\Archivium\ArchiviumServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Ilmala\\Archivium\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ArchiviumServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_archivium-api_table.php.stub';
        $migration->up();
        */
    }
}
