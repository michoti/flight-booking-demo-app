<?php

namespace App\Http\Livewire;

use App\Models\Flight;
use App\Models\FlightDetail;
use Livewire\Component;
use Livewire\WithPagination;

class FlightFilter extends Component
{  
    public $flights;
    public $departing_date;
    public $returning_date;
    public $airlines = [];
    public function mount()
    {
        $this->flights = Flight::all();
    }

    public function displayContent($id)
    {
        $airlineName = Flight::find($id)->airline->name;
        $content = Flight::find($id)->flight_detail;

        $this->dispatchBrowserEvent('openTest', [
            'flightSource'       => $content->flight_source,
            'flightDestination'  => $content->flight_destination,
            'flightDeparture'    => $content->departure_time,
            'flightArrival'      => $content->arrival_time,
            'flightAirline'      => $airlineName,
        ]);        
    }
    public function render()
    {
        $this->flights = Flight::when($this->airlines, function($query) {
                                $query->whereIn('airline_id', $this->airlines);
                            })
                            ->when($this->departing_date, function($query) {
                                $query->whereHas('flight_detail', function($q) {
                                    $q->whereDate('departing_date', '>=', $this->departing_date );
                                });
                            })
                            ->get();

        return view('livewire.flight-filter')->layout('layouts.app');
    }
}
