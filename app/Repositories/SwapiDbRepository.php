<?php

namespace App\Repositories;

use App\Models\People;
use App\Repositories\Interfaces\SwapiRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class SwapiDbRepository implements SwapiRepositoryInterface {

    public function all() : Collection {
        return People::all();
    }

    public function get($id) : Collection {
        return People::find($id);
    }

}