<?php

namespace Deniscosmin21\LogService\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Deniscosmin21\LogService\LogServiceServiceProvider;
use Deniscosmin21\LogService\Providers\FacadeServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Deniscosmin21\\LogService\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LogServiceServiceProvider::class,
            FacadeServiceProvider::class,
        ];
    }

    /**
     * Get package aliases.
     *
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
     
    protected function getPackageAliases($app)
    {
        return [
            'LogInfo' => \Deniscosmin21\LogService\Facades\LogService::class
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_logservice_table.php.stub';
        $migration->up();
        */
    }
}
