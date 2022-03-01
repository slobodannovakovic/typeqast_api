<?php

namespace App\Repositories;

use App\Models\Film;
use App\Repositories\Interfaces\SwapiFilmsRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class SwapiFilmsDbRepository implements SwapiFilmsRepositoryInterface {

    public function all() : Collection {
        return Film::all();
    }

    public function get($id) : Collection {
        return Film::find($id);
    }

}