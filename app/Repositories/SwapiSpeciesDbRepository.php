<?php

namespace App\Repositories;

use App\Models\Specie;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Interfaces\SwapiSpeciesRepositoryInterface;

class SwapiSpeciesDbRepository implements SwapiSpeciesRepositoryInterface {

    public function all() : Collection {
        return Specie::all();
    }

    public function get($id) : Collection {
        return Specie::find($id);
    }

}