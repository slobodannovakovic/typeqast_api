<?php

use App\Http\Controllers\Api\PeopleController;
use Illuminate\Support\Facades\Route;

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

Route::get('people', [PeopleController::class, 'index']);
Route::get('people/{id}', [PeopleController::class, 'show']);

Route::get('films', []);
Route::get('films/{id}', []);

Route::get('starships', []);
Route::get('starships/{id}', []);

Route::get('vehicles', []);
Route::get('vehicles/{id}', []);

Route::get('species', []);
Route::get('species/{id}', []);

Route::get('planets', []);
Route::get('planets/{id}', []);
