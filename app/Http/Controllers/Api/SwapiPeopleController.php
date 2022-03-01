<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\SwapiRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class SwapiPeopleController extends Controller
{
    public function __construct(private SwapiRepositoryInterface $swapiRepository) {}

    public function index() : array|Collection {
        return $this->swapiRepository->all();
    }

    public function show($id) : array|Collection {
        return $this->swapiRepository->get($id);
    }
}
