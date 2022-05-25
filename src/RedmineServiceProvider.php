<?php

namespace SZonov\Redmine;

use Illuminate\Support\ServiceProvider;

class RedmineServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/redmine.php' => config_path('redmine.php')], 'config');
        $this->mergeConfigFrom(__DIR__ . '/../config/redmine.php', 'redmine');
    }

    public function register()
    {
        $this->app->singleton('redmine', function ($app) {
            return new RedmineManager($app->config['redmine'] ?? []);
        });
    }
}
