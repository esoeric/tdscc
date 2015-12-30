<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.app', function($view)
        {
            $production = \App\Project::where('status_id', 1)->get();
            $design = \App\Project::where('status_id', 2)->get();
            $prospect = \App\Project::where('status_id', 3)->get();
            $view->with(compact('production','design','prospect'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
