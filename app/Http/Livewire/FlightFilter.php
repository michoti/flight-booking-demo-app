<?php

namespace App\Http\Livewire;

use App\Models\Flight;
use App\Models\FlightDetail;
use Livewire\Component;

class FlightFilter extends Component
{
    public $flights;
    public $search = '';
    public $departing_date;

    public function mount()
    {
        $this->flights = Flight::all();
    }

    public function searching()
    {

        
    }

    public function render()
    {
        return view('livewire.flight-filter')->layout('layouts.app');
    }
}
