<?php

namespace App\Http\Livewire;

use App\Models\Airline;
use App\Models\Flight;
use App\Models\FlightDetail;
use Livewire\Component;
use Livewire\WithPagination;

class FlightFilter extends Component
{  
    public $flights;
    public $source;
    public $destination;
    public $departing_date;
    public $returning_date;
    public $airlines = [];
    public $available_airlines;
    public $flight_sources;
    public $flight_destinations;
    
    public function mount()
    {

        // $ids = Airline::query()->pluck('id')->toArray();
        // $this->airlines = array_fill_keys($ids,false);
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
                            ->when($this->source, function($query) {
                                $query->whereHas('flight_detail', function($q) {
                                    $q->where('flight_source', $this->source );
                                });
                            })
                            ->when($this->destination, function($query) {
                                $query->whereHas('flight_detail', function($q) {
                                    $q->where('flight_destination', $this->destination );
                                });
                            })
                            ->when($this->source && $this->destination, function($query) {
                                $query->whereHas('flight_detail', function($q) {
                                    $q->where('flight_source', $this->source )
                                      ->where('flight_destination', $this->destination );
                                });
                            })
                            ->when($this->departing_date, function($query) {
                                $query->whereHas('flight_detail', function($q) {
                                    $q->whereDate('departing_date', '>=', $this->departing_date );
                                });
                            })
                            ->when($this->returning_date, function($query) {
                                $query->whereHas('flight_detail', function($q) {
                                    $q->whereDate('returning_date', '<=', $this->returning_date );
                                });
                            })
                            ->when($this->returning_date && $this->departing_date, function($query) {
                                $query->whereHas('flight_detail', function($q) {
                                    $q->whereDate('departing_date', '>=', $this->departing_date )
                                      ->whereDate('returning_date', '<=', $this->returning_date );
                                });
                            })
                            ->get();

        return view('livewire.flight-filter');
    }
}
