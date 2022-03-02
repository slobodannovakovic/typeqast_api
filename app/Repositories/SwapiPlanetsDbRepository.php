<?php

namespace App\Repositories;

use App\Models\Planet;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Interfaces\SwapiPlanetsRepositoryInterface;

class SwapiPlanetsDbRepository implements SwapiPlanetsRepositoryInterface {

    public function all() : Collection {
        return Planet::all();
    }

    public function get($id) : Collection {
        return Planet::find($id) ?: new Collection;
    }

}