<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SwapiHttpService {

    public function all(string $resource) : array {
        $query_param = request('search') ? '?search='.request('search') : '';

        $response = Http::withOptions(['verify' => false])
                    ->get(config('swapi_api.root_url'). $resource . htmlspecialchars($query_param, ENT_QUOTES))
                    ->json();
        
        if(request('filter')) return $this->customFilter($response, $resource);

        return $response;
}

    public function get($id, string $resource) : array {
        return Http::withOptions(['verify' => false])
                    ->get(config('swapi_api.root_url'). $resource. '/' . (int) $id)
                    ->json();
    }

    private function customFilter($response,  $resource) : array {
        if(count($response['results']) === 0) return [];

        $filter_results = [];
        
        foreach(request()->except('filter') as $search_key => $search_value) {
            $filter_class = 'App\\Filters\\'.ucfirst($resource).ucfirst($search_key).'Filter';

            if(count($filter_results))
                $filter_results = (new $filter_class($filter_results, $search_value))->handle();
            else
                $filter_results = (new $filter_class($response, $search_value))->handle();   
        }

        return $filter_results;
    }

}