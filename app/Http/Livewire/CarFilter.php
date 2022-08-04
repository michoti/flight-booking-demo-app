<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class CarFilter extends Component
{
    // public $search = '';
    public $cars, $name = '';
    public $location = '';
    public $from, $to;
    public $yearInputs = [];
    // protected $queryString = ['yearInputs'];

    public function mount()
    {
        $this->cars = Car::all();
    }

    public function searching()
    {
        $car = Car::query();

        if(!empty($this->name))
        {
            $car = $car->where('name', 'like', '%'.$this->name.'%');
        }

        if(!empty($this->location))
        {
            $car = $car->where('location', 'like', '%'.$this->location.'%');
        }

        if(!empty($this->from))
        {
            $car = $car->whereDate('release_date', '>=', $this->from );
        }

        if(!empty($this->to))
        {
            $car = $car->whereDate('release_date', '<=', $this->to );
        }

        if(!empty($this->to) && !empty($this->from))
        {
            $car = $car->whereBetween('release_date',[$this->from.'00.00.00', $this->from.'23.59.59']);
        }

        $this->cars = $car
                      ->when($this->yearInputs, function($query) {
                          $query->whereIn('year', $this->yearInputs);
                      })
                      ->get();        
    }

    public function render()
    {
        $this->cars = Car::when($this->yearInputs, function($query) {
                          $query->whereIn('year', $this->yearInputs);
                      })
                      ->when($this->name, function($query) {
                        $query->where('name', 'like', '%'.$this->name.'%');
                      })
                      ->get(); 

        return view('livewire.car-filter')->layout('layouts.app');
    }
}
