<?php

namespace Michaelchora\LaravelHeadlessBlog;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Michaelchora\LaravelHeadlessBlog\LaravelHeadlessBlog
 */
class LaravelHeadlessBlogFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-headless-blog';
    }
}
