<?php

namespace Shipu\Settings\Providers;


use App;
use Illuminate\Support\ServiceProvider;
use Kodeeo\Settings\Contracts\SettingsContract;
use Kodeeo\Settings\Models\SettingsEloquent;
use Kodeeo\Settings\Services\SettingsService;
use Kodeeo\Settings\Settings;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfig();
        $this->publishMigration();
    }

    /**
     * Publish config file.
     *
     * @return void
     */
    public function publishConfig()
    {
        $configPath = realpath(__DIR__.'/../../config/settings.php');
        $this->publishes([
            $configPath => config_path('site-settings.php'),
        ]);
        $this->mergeConfigFrom($configPath, 'site-settings');
    }

    /**
     * Publish migration file.
     *
     * @return void
     */
    public function publishMigration()
    {
        $this->publishes([
            realpath(__DIR__.'/../Migrations/') => database_path('migrations'),
        ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
