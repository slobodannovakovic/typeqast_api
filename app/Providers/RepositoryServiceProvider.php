<?php

namespace App\Providers;

use App\Repositories\SwapiPeopleDbRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\SwapiPeopleApiRepository;
use App\Repositories\Interfaces\SwapiPeopleRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //can be swaped with SwapiPeopleDbRepository::class implementation
        $this->app->bind(SwapiPeopleRepositoryInterface::class, SwapiPeopleApiRepository::class);
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
