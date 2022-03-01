<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class PeopleController extends Controller
{
    public function index() {
        return Http::withOptions(['verify' => false])
                    ->get('http://swapi.dev/api/people')
                    ->json();
    }

    public function show($id) {
        return Http::withOptions(['verify' => false])
                    ->get('http://swapi.dev/api/people/'. (int) $id)
                    ->json();
    }
}
