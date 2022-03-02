<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Interfaces\SwapiPlanetsRepositoryInterface;

class SwapiPlanetsController extends Controller
{
    public function __construct(private SwapiPlanetsRepositoryInterface $swapiPlanetsRepository) {}

    public function index() : array|Collection {
        return $this->swapiPlanetsRepository->all();
    }

    public function show($id) : array|Collection {
        return $this->swapiPlanetsRepository->get(id: $id);
    }
}
