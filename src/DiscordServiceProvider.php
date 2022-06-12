<?php

namespace SquadMS\Discord;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use RestCord\DiscordClient;

class DiscordServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DiscordClient::class, function ($app) {
            return new DiscordClient([
                'token' => Config::get('sqms-discord.key')
            ]);
        });
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
