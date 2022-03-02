<?php

namespace App\Repositories;

use App\Models\Starship;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Interfaces\SwapiStarshipsRepositoryInterface;

class SwapiStarshipsDbRepository implements SwapiStarshipsRepositoryInterface {

    public function all() : Collection {
        return Starship::all();
    }

    public function get($id) : Collection {
        return Starship::find($id) ?: new Collection;
    }

}