<?php

namespace App\Http\Livewire;

use App\Models\Flight;
use App\Models\FlightDetail;
use Livewire\Component;
use Livewire\WithPagination;

class FlightFilter extends Component
{  
    public $flights;
    public $date;
    public $airlines = [];
    public function mount()
    {
        $this->flights = Flight::all();
    }
    public function render()
    {
        $this->flights = Flight::when($this->airlines, function($query) {
            $query->whereIn('airline_id', $this->airlines);
        })
        ->when($this->date, function($query) {
            $query->whereHas('flight_detail', function($q) {
                $q->whereDate('date', '>=', $this->date );
            });
        })
        ->get();

        return view('livewire.flight-filter')->layout('layouts.app');
    }
}
