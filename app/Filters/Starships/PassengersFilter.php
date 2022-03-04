<?php

namespace App\Filters\Starships;

use App\Filters\SwapiFilter;

class PassengersFilter extends SwapiFilter {

    public function handle() : array {
        $response = collect($this->response['results']);

        $filtered_response = $response->filter(fn($starship) => (int) $starship['passengers'] > (int) request('passengers'));
        
        return ['count' => $filtered_response->count(), 'results' => $filtered_response->toArray()];
    }

}