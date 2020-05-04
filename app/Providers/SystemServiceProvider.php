<?php

namespace App\Providers;



use Illuminate\Support\ServiceProvider;
use App\Services\impl\FileServiceImpl;


class SystemServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\FileService', function ($app) {
            return (new FileServiceImpl());
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
