<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Species extends Component
{   
    public $amount = 8;

    public function  load(){

        $this->amount += 4;
    }

    public function render()
    {   
        $results = Http::get('https://swapi.dev/api/species/')->json()['results'];
        return view('livewire.species',[
            'results' => collect($results)->take($this->amount)
        ]);
    }
}
