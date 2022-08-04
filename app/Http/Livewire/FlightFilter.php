<?php

namespace App\Http\Livewire;

use App\Models\Flight;
use App\Models\FlightDetail;
use Livewire\Component;
use Livewire\WithPagination;

class FlightFilter extends Component
{
    public $flights;
    public $airlines = [];
    public $search = '';

    public $source, $destination;
    public $departing_date;

    // public function mount($flights)
    // {
    //     $this->flights = $flights;
    // }

    public function searching()
    {
        
    }
    


    public function render()
    {
        return view('livewire.flight-filter')->layout('layouts.app');
    }
}
