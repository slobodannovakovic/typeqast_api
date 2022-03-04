<?php

namespace App\Filters\Planets;

use App\Filters\SwapiFilter;

class CreatedFilter extends SwapiFilter {

    public function handle() : array {
        $response = collect($this->response['results']);
        $request_date_arr = explode('/', request('created'));
        $date_param_arr = isset($request_date_arr[2])
                            ? [$request_date_arr[2], $request_date_arr[1], $request_date_arr[0]]
                            : null;

        try {
            if(is_null($date_param_arr)) throw new \Exception('Invalid date');

            $carbon_date_obj = \Carbon\Carbon::create(...$date_param_arr);

            $results = $response->filter(fn($planet) => \Carbon\Carbon::create(explode('T', $planet['created'])[0]) > $carbon_date_obj);

            return ['count' => $results->count(), 'results' => $results->toArray()];
        } catch(\Carbon\Exceptions\InvalidFormatException $e) {
            return ['error' => $e->getMessage()];
        } catch(\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

}