<?php

namespace App\Repositories;

use App\Services\SwapiHttpService;
use App\Repositories\Interfaces\SwapiPlanetsRepositoryInterface;

class SwapiPlanetsApiRepository implements SwapiPlanetsRepositoryInterface {

    public function __construct(private SwapiHttpService $httpService) {}

    public function all() : array {
        return $this->httpService->all(resource: 'planets');
    }

    public function get($id) : array {
        return $this->httpService->get(id: $id, resource: 'planets');
    }

}