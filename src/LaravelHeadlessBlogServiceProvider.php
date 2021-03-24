<?php

namespace Michaelchora\LaravelHeadlessBlog;

use Michaelchora\LaravelHeadlessBlog\Commands\LaravelHeadlessBlogCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelHeadlessBlogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-headless-blog')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('api')
            ->hasMigration('create_laravel_headless_blog_table')
            ->hasCommand(LaravelHeadlessBlogCommand::class);
    }
}
