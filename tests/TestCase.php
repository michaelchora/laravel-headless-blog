<?php

namespace Michaelchora\LaravelHeadlessBlog\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Michaelchora\LaravelHeadlessBlog\LaravelHeadlessBlogServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Michaelchora\\LaravelHeadlessBlog\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelHeadlessBlogServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        /*
        include_once __DIR__.'/../database/migrations/create_laravel_headless_blog_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
