<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Starwars extends Component
{
    public $films;
    public $amount = 3;

    public function  load(){

        $this->amount += 3;
    }

    public function render()
    {
        $filmresults = Http::get('https://swapi.dev/api/films/')->json()['results'];
        return view('livewire.starwars',[
            'filmresults' => collect($filmresults)->take($this->amount)
        ]);
    }
}
