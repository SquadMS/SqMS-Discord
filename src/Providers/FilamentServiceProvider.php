<?php

namespace SquadMS\Discord\Providers;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentServiceProvider extends PluginServiceProvider
{
    protected array $resources = [
        //
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('sqms-discord');
    }
}
