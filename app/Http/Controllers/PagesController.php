<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('pages.index');
        
    }

    public function showFilms(){

        return view('dashboard.pages.films');
    }

    public function showPeople(){

        return view('dashboard.pages.people');
    }

    public function showPlanet(){

        return view('dashboard.pages.planet');
    }

    public function showSpecies(){

        return view('dashboard.pages.species');
    }

    public function showStarships(){

        return view('dashboard.pages.starships');

    }

    public function showVehicles(){

        return view('dashboard.pages.vehicles');
        
    }
}
