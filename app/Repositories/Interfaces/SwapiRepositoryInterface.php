<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface SwapiRepositoryInterface {

    public function all() : array|Collection;

    public function get($id) : array|Collection;

}