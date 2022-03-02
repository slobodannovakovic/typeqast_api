<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SwapiHttpService {

    public function all(string $resource) : array {
        $query_param = request('search') ? '?search='.request('search') : '';

        return Http::withOptions(['verify' => false])
                    ->get('http://swapi.dev/api/'. $resource . htmlspecialchars($query_param, ENT_QUOTES))
                    ->json();
    }

    public function get($id, $resource) : array {
        return Http::withOptions(['verify' => false])
                    ->get('http://swapi.dev/api/'. $resource. '/' . (int) $id)
                    ->json();
    }

}