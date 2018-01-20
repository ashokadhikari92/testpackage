<?php

namespace MyPackage\TestPackage;


use Illuminate\Support\ServiceProvider;

class TestPackageServiceProvider  extends ServiceProvider
{
    public function boot()
    {
        if(!$this->app->routesAreCached()){
            require __DIR__.'/Routes/web.php';
        }
    }
}