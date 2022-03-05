<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\SwapiFilmsRepositoryInterface;

class FilmsController extends Controller
{
    public function __construct(private SwapiFilmsRepositoryInterface $filmsApiRepository) {}

    public function index() {
        $films = $this->filmsApiRepository->all()['results'];

        return view('front.films.index', compact('films'));
    }
}
