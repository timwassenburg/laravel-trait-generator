<?php

namespace TimWassenburg\TraitGenerator;

use Illuminate\Support\ServiceProvider;
use TimWassenburg\TraitGenerator\Console\MakeTrait;

class TraitGeneratorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([MakeTrait::class]);
        }
    }
}
