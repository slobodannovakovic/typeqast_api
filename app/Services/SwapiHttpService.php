<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SwapiHttpService {

    public function __construct(private SwapiHttpFilterService $filterService) {}

    public function all(string $resource) : array {
        $query_param = request('search') ? '?search='.request('search') : '';

        $response = Http::withOptions(['verify' => false])
                    ->get(config('swapi_api.root_url').$resource.htmlspecialchars($query_param, ENT_QUOTES))
                    ->json();
        
        if(request('filter')) return $this->filterService->handle($response, $resource, $this);

        return $response;
}

    public function get($id, string $resource) : array {
        return Http::withOptions(['verify' => false])
                    ->get(config('swapi_api.root_url').$resource.'/'. (int) $id)
                    ->json();
    }

    public function getByAttribute($searchValue, string $resource) : array {
        return Http::withOptions(['verify' => false])
                    ->get(config('swapi_api.root_url').$resource.'?search='.(string) htmlspecialchars($searchValue, ENT_QUOTES))
                    ->json();
    }

    public function getByPage(string $page_url = null, string $resource = null, $page_number = null) : array {
        if($page_url) {
            return Http::withOptions(['verify' => false])
                    ->get($page_url)
                    ->json();
        }

        return Http::withOptions(['verify' => false])
                    ->get(config('swapi_api.root_url').$resource.'/?page='.$page_number)
                    ->json();
        
    }

}