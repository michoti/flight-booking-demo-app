<?php

namespace App\Http\Livewire;

use App\Models\Flight;
use App\Models\FlightDetail;
use Livewire\Component;
use Livewire\WithPagination;

class FlightFilter extends Component
{
    use WithPagination;
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
