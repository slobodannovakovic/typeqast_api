<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Interfaces\SwapiSpeciesRepositoryInterface;

class SwapiSpeciesController extends Controller
{
    public function __construct(private SwapiSpeciesRepositoryInterface $swapiSpeciesRepository) {}

    public function index() : array|Collection {
        return $this->swapiSpeciesRepository->all();
    }

    public function show($id) : array|Collection {
        return $this->swapiSpeciesRepository->get(id: $id);
    }
}
