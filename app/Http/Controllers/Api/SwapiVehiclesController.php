<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Interfaces\SwapiVehiclesRepositoryInterface;

class SwapiVehiclesController extends Controller
{
    public function __construct(private SwapiVehiclesRepositoryInterface $swapiVehiclesRepository) {}

    public function index() : array|Collection {
        return $this->swapiVehiclesRepository->all();
    }

    public function show($id) : array|Collection {
        return $this->swapiVehiclesRepository->get(id: $id);
    }
}
