<?php

namespace App\Providers;

use App\Repositories\SwapiDbRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\SwapiApiRepository;
use App\Repositories\Interfaces\SwapiRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //can be swaped with SwapiDbRepository::class implementation
        $this->app->bind(SwapiRepositoryInterface::class, SwapiApiRepository::class);
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
