<?php

namespace App\Repositories;

use App\Services\SwapiHttpService;
use App\Repositories\Interfaces\SwapiVehiclesRepositoryInterface;

class SwapiVehiclesApiRepository implements SwapiVehiclesRepositoryInterface {

    public function __construct(private SwapiHttpService $httpService) {}

    public function all() : array {
        return $this->httpService->all(resource: 'vehicles');
    }

    public function get($id) : array {
        return $this->httpService->get(id: $id, resource: 'vehicles');
    }

}