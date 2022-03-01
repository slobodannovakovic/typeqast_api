<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SwapiFilmsDbRepository;
use App\Repositories\SwapiFilmsApiRepository;
use App\Repositories\SwapiPeopleDbRepository;
use App\Repositories\SwapiPeopleApiRepository;
use App\Repositories\Interfaces\SwapiFilmsRepositoryInterface;
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

        //can be swaped with SwapiFilmsDbRepository::class implementation
        $this->app->bind(SwapiFilmsRepositoryInterface::class, SwapiFilmsApiRepository::class);
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
