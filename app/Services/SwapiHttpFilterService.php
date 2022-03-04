<?php

namespace App\Services;

class SwapiHttpFilterService {

    public function handle($response,  $resource, $swapiHttpService) : array {
        if(count($response['results']) === 0) return [];

        return $this->initiateFilterAndGetResults($response,  $resource, $swapiHttpService);
    }

    private function initiateFilterAndGetResults($response, $resource, $swapiHttpService) : array {
        static $filter_results_arr = ['count' => 0, 'results' => []];

        foreach(request()->except('filter', 'search', 'format', 'page') as $search_key => $search_value) {
            $filter_class = 'App\\Filters\\'.ucfirst($resource).'\\'.ucfirst($search_key).'Filter';
            $sanitized_search_value = htmlspecialchars((string) $search_value, ENT_QUOTES);

            $filter_results = (new $filter_class($response, $sanitized_search_value, $swapiHttpService))->handle();

            if(isset($filter_results['error'])) {
                return $filter_results;
            }

            if($filter_results['count'] > 0) {
                $filter_results_arr['count'] = $filter_results_arr['count'] + $filter_results['count'];
                $filter_results_arr['results'][] = $filter_results['results'];
            }
        }

        if(!is_null($response['next'])) {
            $new_page_response = $swapiHttpService->getByPage(page_url: $response['next']);

            $this->initiateFilterAndGetResults($new_page_response, $resource, $swapiHttpService);
        }

        return $filter_results_arr;
    }

}