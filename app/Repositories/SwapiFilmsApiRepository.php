<?php

namespace App\Repositories;

use App\Services\SwapiHttpService;
use App\Repositories\Interfaces\SwapiFilmsRepositoryInterface;

class SwapiFilmsApiRepository implements SwapiFilmsRepositoryInterface {

    public function __construct(private SwapiHttpService $httpService) {}

    public function all() : array {
        return $this->httpService->all(resource: 'films');
    }

    public function get($id) : array {
        return $this->httpService->get(id: $id, resource: 'films');
    }

}