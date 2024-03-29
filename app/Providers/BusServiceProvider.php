<?php

namespace App\Providers;

use Collective\Bus\Dispatcher;
use Illuminate\Support\ServiceProvider;

class BusServiceProvider extends ServiceProvider
{
    public function boot(Dispatcher $dispatcher)
    {
        $dispatcher->mapUsing(function($command)
        {
            return Dispatcher::simpleMapping(
                $command, 'App\Commands', 'App\Handlers\Commands'
            );
        });
    }

    public function register()
    {
        // TODO: Implement register() method.
        }
}