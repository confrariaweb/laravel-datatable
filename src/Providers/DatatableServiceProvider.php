<?php

namespace ConfrariaWeb\Datatable\Providers;

use ConfrariaWeb\Datatable\Components\Datatable;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class DatatableServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'datatable');
        //Blade::component('datatable::components.datatable', 'datatable');
        Blade::component('datatable', Datatable::class);
    }

    public function register()
    {
    }
}
