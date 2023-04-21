<?php

namespace TimWassenburg\TraitGenerator;

use Illuminate\Support\ServiceProvider;
use TimWassenburg\TraitGenerator\Console\MakeTraitCommand;

class TraitGeneratorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([MakeTraitCommand::class]);
        }
    }
}
