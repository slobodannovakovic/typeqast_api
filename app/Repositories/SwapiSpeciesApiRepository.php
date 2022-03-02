<?php

namespace App\Repositories;

use App\Services\SwapiHttpService;
use App\Repositories\Interfaces\SwapiSpeciesRepositoryInterface;

class SwapiSpeciesApiRepository implements SwapiSpeciesRepositoryInterface {

    public function __construct(private SwapiHttpService $httpService) {}

    public function all() : array {
        return $this->httpService->all(resource: 'species');
    }

    public function get($id) : array {
        return $this->httpService->get(id: $id, resource: 'species');
    }

}