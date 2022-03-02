<?php

namespace App\Repositories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Interfaces\SwapiVehiclesRepositoryInterface;

class SwapiVehiclesDbRepository implements SwapiVehiclesRepositoryInterface {

    public function all() : Collection {
        return Vehicle::all();
    }

    public function get($id) : Collection {
        return Vehicle::find($id) ?: new Collection;
    }

}