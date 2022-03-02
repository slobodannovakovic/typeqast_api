<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Interfaces\SwapiFilmsRepositoryInterface;

class SwapiFilmsController extends Controller
{
    public function __construct(private SwapiFilmsRepositoryInterface $swapiFilmsRepository) {}

    public function index() : array|Collection {
        return $this->swapiFilmsRepository->all();
    }

    public function show($id) : array|Collection {
        return $this->swapiFilmsRepository->get(id: $id);
    }
}
