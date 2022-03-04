<?php

namespace App\Filters;

use App\Services\SwapiHttpService;

abstract class SwapiFilter {

    public function __construct(
        protected array $response,
        protected string $search_value,
        protected SwapiHttpService $httpService
    ) {}

    abstract public function handle() : array;

}