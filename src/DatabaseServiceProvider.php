<?php

namespace Joydip\Laravel5_database_utilities;

use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // require __DIR__.'/routes/routes.php';
        
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        
        $this->publishes([
            __DIR__.'/Config/database_manager.php' => config_path('database_manager.php'),
        ], 'config');
        
        $this->loadViewsFrom(__DIR__.'/Views', 'laravel5_database_utilities');
        
        $this->publishes([
            __DIR__.'/Views' => resource_path('views/laravel5_database_utilities'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Config
        $this->mergeConfigFrom( __DIR__.'/Config/database_manager.php', 'database_manager');
        
        // View
        $this->loadViewsFrom(__DIR__ . '/Views', 'database');
        
        // This will create a facade
        // laravel service container can find it and initiate our class
        $this->app->bind('joydip-database', function(){
            
            return new Database();
            
        });
    }
}
