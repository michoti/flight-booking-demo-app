<?php

namespace App\Http\Livewire;

use App\Models\FlightDetail;
use Livewire\Component;

class FlightFilter extends Component
{
    public $search = '';
    public $departing_date;

    public function render()
    {
        return view('livewire.flight-filter', [
            'flightListing' => FlightDetail::where('flight_source', 'like', '%'.$this->search.'%')->get()
        ]);
    }
}
