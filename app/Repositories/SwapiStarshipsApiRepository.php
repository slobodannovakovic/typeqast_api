<?php

namespace App\Repositories;

use App\Services\SwapiHttpService;
use App\Repositories\Interfaces\SwapiStarshipsRepositoryInterface;

class SwapiStarshipsApiRepository implements SwapiStarshipsRepositoryInterface {

    public function __construct(private SwapiHttpService $httpService) {}

    public function all() : array {
        return $this->httpService->all(resource: 'starships');
    }

    public function get($id) : array {
        return $this->httpService->get(id: $id, resource: 'starships');
    }

}