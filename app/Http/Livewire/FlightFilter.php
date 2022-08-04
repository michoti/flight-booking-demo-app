<?php

namespace App\Http\Livewire;

use App\Models\Flight;
use App\Models\FlightDetail;
use Livewire\Component;
use Livewire\WithPagination;

class FlightFilter extends Component
{  
    public function render()
    {
        return view('livewire.flight-filter')->layout('layouts.app');
    }
}
