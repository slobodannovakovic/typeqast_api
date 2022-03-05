<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\SwapiPeopleRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

/**
 * @group Poeple
 * 
 */
class SwapiPeopleController extends Controller
{
    public function __construct(private SwapiPeopleRepositoryInterface $swapiPeopleRepository) {}

    public function index() : array|Collection {
        return $this->swapiPeopleRepository->all();
    }

    /**
     *  @urlParam id int required Example: 1
     * 
     */
    public function show($id) : array|Collection {
        return $this->swapiPeopleRepository->get(id: $id);
    }
}
