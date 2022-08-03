<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class CarFilter extends Component
{
    public $search = '';
    public $location;
    public function render()
    {
        return view('livewire.car-filter', [
            'cars' =>$this->search === null
                                ? Car::all() : Car::where('name', 'like', '%'.$this->search.'%')
                                    ->orWhere('location', 'like', '%'.$this->search.'%')
                                    ->get(),
            'locations' => Car::get(),                                        
        ])->layout('layouts.app');
    }
}
