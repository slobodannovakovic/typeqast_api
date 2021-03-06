<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Interfaces\SwapiVehiclesRepositoryInterface;

/**
 * @group Vehicles
 * 
 */
class SwapiVehiclesController extends Controller
{
    public function __construct(private SwapiVehiclesRepositoryInterface $swapiVehiclesRepository) {}

    public function index() : array|Collection {
        return $this->swapiVehiclesRepository->all();
    }

    /**
     *  @urlParam id int required Example: 4
     * 
     */
    public function show($id) : array|Collection {
        return $this->swapiVehiclesRepository->get(id: $id);
    }
}
