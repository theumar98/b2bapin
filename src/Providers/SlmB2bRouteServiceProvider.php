<?php
namespace Slm\B2b\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class SlmB2bRouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Slm\B2b\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        //
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        $route_entities = ['product','orders','shipments','brands','categories'];
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(function($router) use ($route_entities){
                foreach($route_entities as $route_entity){
                    require __DIR__ . '/../Http/Routes/api/'.$route_entity.'.php';
                }
            });
    }
}

