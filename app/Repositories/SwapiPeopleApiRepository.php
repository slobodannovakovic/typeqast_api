<?php

namespace App\Repositories;

use App\Services\SwapiHttpService;
use App\Repositories\Interfaces\SwapiPeopleRepositoryInterface;

class SwapiPeopleApiRepository implements SwapiPeopleRepositoryInterface {

    public function __construct(private SwapiHttpService $httpService) {}

    public function all() : array {
        return $this->httpService->all(resource: 'people');
    }

    public function get($id) : array {
        return $this->httpService->get(id: $id, resource: 'people');
    }

}