<?php

namespace SquadMS\Discord\Providers;

use Illuminate\Support\ServiceProvider;
use SquadMS\Foundation\Facades\SquadMSModuleRegistry;
use SquadMS\Discord\SquadMSModule;

class ModulesServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        SquadMSModuleRegistry::register(SquadMSModule::class);
    }
}
