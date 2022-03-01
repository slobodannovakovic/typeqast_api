<?php

namespace App\Repositories;

use App\Models\People;
use App\Repositories\Interfaces\SwapiPeopleRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class SwapiPeopleDbRepository implements SwapiPeopleRepositoryInterface {

    public function all() : Collection {
        return People::all();
    }

    public function get($id) : Collection {
        return People::find($id);
    }

}