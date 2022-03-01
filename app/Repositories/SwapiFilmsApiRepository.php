<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;
use App\Repositories\Interfaces\SwapiFilmsRepositoryInterface;

class SwapiFilmsApiRepository implements SwapiFilmsRepositoryInterface {

    public function all() : array {
        $query_param = request('search') ? '?search='.request('search') : '';

        return Http::withOptions(['verify' => false])
                    ->get('http://swapi.dev/api/films'. htmlspecialchars($query_param, ENT_QUOTES))
                    ->json();
    }

    public function get($id) : array {
        return Http::withOptions(['verify' => false])
                    ->get('http://swapi.dev/api/films/'. (int) $id)
                    ->json();
    }

}