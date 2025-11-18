<?php

namespace Arya\Nyebut;

use Arya\Nyebut\Commands\NyebutCommand;
use Illuminate\Support\ServiceProvider;

class NyebutServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('nyebut', fn() => new Nyebut());
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                NyebutCommand::class
            ]);
        }
    }
}
