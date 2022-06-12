<?php

namespace SquadMS\Discord;

use Illuminate\Support\ServiceProvider;

class DiscordServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* Configuration */
        $this->mergeConfigFrom(__DIR__.'/../config/sqms-discord.php', 'sqms-discord');
        
        /* Load Migrations */
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
