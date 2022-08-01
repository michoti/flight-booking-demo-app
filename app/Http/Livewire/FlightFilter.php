<?php

namespace App\Http\Livewire;

use App\Models\FlightDetail;
use Livewire\Component;

class FlightFilter extends Component
{
    public $flights;
    public $name;
    public $departing_date;
    
    public function mount()
    {
        $this->flights = FlightDetail::all();
    }

    public function searching()
    {
        // $flight = FlightDetail::query();

        if(!empty($this->name))
        {
            $flight = FlightDetail::query()->where('flight_source', 'like', '%'. $this->name .'%');
            $this->flights = $flight->get();
            return $this->flights;
        }
    }

    public function render()
    {
        return view('livewire.flight-filter', [
            'flights' => $this->flights,
        ])
        ->layout('layouts.app');
    }
}
