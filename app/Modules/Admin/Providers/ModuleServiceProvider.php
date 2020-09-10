<?php

namespace App\Modules\Admin\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('admin', 'Resources/Lang', 'app'), 'admin');
        $this->loadViewsFrom(module_path('admin', 'Resources/Views', 'app'), 'admin');
        $this->loadMigrationsFrom(module_path('admin', 'Database/Migrations', 'app'));
        if(!$this->app->configurationIsCached()) {
            $this->loadConfigsFrom(module_path('admin', 'Config', 'app'));
        }
        $this->loadFactoriesFrom(module_path('admin', 'Database/Factories', 'app'));



    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
