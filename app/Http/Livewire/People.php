<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
class People extends Component
{

    public $amount = 8;

    public function  load(){

        $this->amount += 4;
    }

    public function render()
    {
        $results = Http::get('https://swapi.dev/api/people/')->json()['results'];
        return view('livewire.people', [
            'results' => collect($results)->take($this->amount)
        ]);
    }
}


