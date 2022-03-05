<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Interfaces\SwapiSpeciesRepositoryInterface;

/**
 * @group Species
 * 
 */
class SwapiSpeciesController extends Controller
{
    public function __construct(private SwapiSpeciesRepositoryInterface $swapiSpeciesRepository) {}

    public function index() : array|Collection {
        return $this->swapiSpeciesRepository->all();
    }

    /**
     *  @urlParam id int required Example: 1
     * 
     */
    public function show($id) : array|Collection {
        return $this->swapiSpeciesRepository->get(id: $id);
    }
}
