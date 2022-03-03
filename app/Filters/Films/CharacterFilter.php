<?php

namespace App\Filters\Films;

use App\Filters\SwapiFilter;

class CharacterFilter extends SwapiFilter {

    public function handle() : array {
        $character = $this->httpService->getByAttribute(
            searchValue: $this->search_value, resource: 'people'
        );

        if(count($character['results']) === 0) return ['count' => 0, 'results' => []];

        $filmsCollection = collect($this->response['results']);

        $filteredCollection = $filmsCollection->filter(
            fn($value) => in_array($character['results'][0]['url'], $value['characters'])
        );

        return ['count' => $filteredCollection->count(), 'results' => $filteredCollection->toArray()];
    }

}