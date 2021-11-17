<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Planet extends Component
{   
    public $amount = 8;

    public function  load(){

        $this->amount += 4;
    }

    public function render()
    {
        $results = Http::get('https://swapi.dev/api/planets/')->json()['results'];
        return view('livewire.planet',[
            'results' => collect($results)->take($this->amount)
        ]);
    }
}
