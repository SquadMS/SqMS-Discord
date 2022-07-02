<?php

namespace SquadMS\Discord;

use Illuminate\Support\Facades\Config;
use RestCord\DiscordClient;
use Spatie\LaravelPackageTools\Package;
use SquadMS\Foundation\Contracts\SquadMSModuleServiceProvider;

class DiscordServiceProvider extends SquadMSModuleServiceProvider
{
    public static string $name = 'sqms-discord';

    public function configureModule(Package $package): void
    {
        $package->hasAssets()
                ->hasConfigFile()
                ->hasRoutes(['web']);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function registeringModule(): void
    {
        $this->app->singleton(DiscordClient::class, function ($app) {
            return new DiscordClient([
                'token' => Config::get('sqms-discord.key'),
            ]);
        });
    }

    public function bootedModule(): void
    {
        /* Permissions */
        foreach (Config::get('sqms-discord.permissions.definitions', []) as $definition => $displayName) {
            SquadMSPermissions::define(Config::get('sqms-discord.permissions.module'), $definition, $displayName);
        }
    }
}
