<?php

namespace Railken\LaraOre;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Railken\LaraOre\Api\Support\Router;

class TaxServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../config/ore.tax.php' => config_path('ore.tax.php')], 'config');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutes();

        config(['ore.permission.managers' => array_merge(Config::get('ore.permission.managers', []), [
            \Railken\LaraOre\Tax\TaxManager::class,
        ])]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\Railken\Laravel\Manager\ManagerServiceProvider::class);
        $this->app->register(\Railken\LaraOre\ApiServiceProvider::class);
        $this->mergeConfigFrom(__DIR__.'/../config/ore.tax.php', 'ore.tax');
    }

    /**
     * Load routes.
     *
     * @return void
     */
    public function loadRoutes()
    {
        Router::group(array_merge(Config::get('ore.tax.router'), [
            'namespace' => 'Railken\LaraOre\Http\Controllers',
        ]), function ($router) {
            $router->get('/', ['uses' => 'TaxesController@index']);
            $router->post('/', ['uses' => 'TaxesController@create']);
            $router->put('/{id}', ['uses' => 'TaxesController@update']);
            $router->delete('/{id}', ['uses' => 'TaxesController@remove']);
            $router->get('/{id}', ['uses' => 'TaxesController@show']);
        });
    }
}
