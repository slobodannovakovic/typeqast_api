<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SwapiFilmsController;
use App\Http\Controllers\Api\SwapiPeopleController;

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

Route::get('swapi-people', [SwapiPeopleController::class, 'index']);
Route::get('swapi-people/{id}', [SwapiPeopleController::class, 'show']);

Route::get('swapi-films', [SwapiFilmsController::class, 'index']);
Route::get('swapi-films/{id}', [SwapiFilmsController::class, 'show']);

Route::get('swapi-starships', []);
Route::get('swapi-starships/{id}', []);

Route::get('swapi-vehicles', []);
Route::get('swapi-vehicles/{id}', []);

Route::get('swapi-species', []);
Route::get('swapi-species/{id}', []);

Route::get('swapi-planets', []);
Route::get('swapi-planets/{id}', []);
