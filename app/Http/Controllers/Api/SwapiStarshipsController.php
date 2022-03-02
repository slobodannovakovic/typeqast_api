<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Interfaces\SwapiStarshipsRepositoryInterface;

class SwapiStarshipsController extends Controller
{
    public function __construct(private SwapiStarshipsRepositoryInterface $swapiStarshipsRepository) {}

    public function index() : array|Collection {
        return $this->swapiStarshipsRepository->all();
    }

    public function show($id) : array|Collection {
        return $this->swapiStarshipsRepository->get(id: $id);
    }
}
