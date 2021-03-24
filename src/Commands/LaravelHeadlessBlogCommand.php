<?php

namespace Michaelchora\LaravelHeadlessBlog\Commands;

use Illuminate\Console\Command;

class LaravelHeadlessBlogCommand extends Command
{
    public $signature = 'laravel-headless-blog';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
