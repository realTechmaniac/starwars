<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Vehicles extends Component
{
    public $amount = 8;

    public function  load(){

        $this->amount += 4;
    }

    public function render()
    {   
        $results = Http::get('https://swapi.dev/api/vehicles/')->json()['results'];
        return view('livewire.vehicles',[
            'results' => collect($results)->take($this->amount)
        ]);
    }
}
