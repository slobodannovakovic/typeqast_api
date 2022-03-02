<?php

namespace App\Filters;

class FilmsCharacterFilter implements FilterableSwapiApiInterface {

    public function __construct(private array $results, private string $search_value) {}

    public function handle() {
        dd($this->results, $this->search_value);
    }

}