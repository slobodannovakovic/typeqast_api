<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class SwapiPeopleController extends Controller
{
    public function index() : array {
        $query_param = request('search') ? '?search='.request('search') : '';

        return Http::withOptions(['verify' => false])
                    ->get('http://swapi.dev/api/people'. htmlspecialchars($query_param, ENT_QUOTES))
                    ->json();
    }

    public function show($id) : array {
        return Http::withOptions(['verify' => false])
                    ->get('http://swapi.dev/api/people/'. (int) $id)
                    ->json();
    }
}
