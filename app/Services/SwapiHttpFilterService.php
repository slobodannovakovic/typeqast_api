<?php

namespace App\Services;

class SwapiHttpFilterService {

    public function handle($response,  $resource, $swapiHttpService) : array {
        if(count($response['results']) === 0) return [];

        $filter_results = [];
        
        foreach(request()->except('filter', 'search', 'format', 'page') as $search_key => $search_value) {
            $filter_class = 'App\\Filters\\'.ucfirst($resource).'\\'.ucfirst($search_key).'Filter';
            $sanitized_search_value = htmlspecialchars((string) $search_value, ENT_QUOTES);

            if(count($filter_results))
                $filter_results = (new $filter_class($filter_results, $sanitized_search_value, $swapiHttpService))->handle();
            else
                $filter_results = (new $filter_class($response, $sanitized_search_value, $swapiHttpService))->handle();   
        }

        return $filter_results;
    }

}