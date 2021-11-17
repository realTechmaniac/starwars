<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Starships extends Component
{
    public $films;
    public $amount = 3;

    public function  load(){

        $this->amount += 3;
    }

    public function render()
    {   
        $results = Http::get('https://swapi.dev/api/starships/')->json()['results'];
        return view('livewire.starships', [
            'results' => collect($results)->take($this->amount)
        ]);
    }
}
