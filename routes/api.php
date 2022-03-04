<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SwapiFilmsController;
use App\Http\Controllers\Api\SwapiPeopleController;
use App\Http\Controllers\Api\SwapiPlanetsController;
use App\Http\Controllers\Api\SwapiSpeciesController;
use App\Http\Controllers\Api\SwapiVehiclesController;
use App\Http\Controllers\Api\SwapiStarshipsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//filter films by character example http://typeqast-api.localhost/api/swapi-films?filter=1&character=dart

//filter planets by created date exapmle http://typeqast-api.localhost/api/swapi-planets?filter=1&created=12/04/2014

Route::get('swapi-people', [SwapiPeopleController::class, 'index']);
Route::get('swapi-people/{id}', [SwapiPeopleController::class, 'show']);

Route::get('swapi-films', [SwapiFilmsController::class, 'index']);
Route::get('swapi-films/{id}', [SwapiFilmsController::class, 'show']);

Route::get('swapi-starships', [SwapiStarshipsController::class, 'index']);
Route::get('swapi-starships/{id}', [SwapiStarshipsController::class, 'show']);

Route::get('swapi-vehicles', [SwapiVehiclesController::class, 'index']);
Route::get('swapi-vehicles/{id}', [SwapiVehiclesController::class, 'show']);

Route::get('swapi-species', [SwapiSpeciesController::class, 'index']);
Route::get('swapi-species/{id}', [SwapiSpeciesController::class, 'show']);

Route::get('swapi-planets', [SwapiPlanetsController::class, 'index']);
Route::get('swapi-planets/{id}', [SwapiPlanetsController::class, 'show']);
