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
    protected $queryString = ['yearInputs'];

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
    // public function render()
    // {
    //     return view('livewire.car-filter', [
    //         'cars' =>$this->search === null
    //                             ? Car::all() : Car::where('name', 'like', '%'.$this->search.'%')
    //                                 ->orWhere('location', 'like', '%'.$this->search.'%')
    //                                 ->get(),
    //         'locations' => Car::get(),                                        
    //     ])->layout('layouts.app');
    // }

    public function render()
    {
        return view('livewire.car-filter', [

        
        

        ])->layout('layouts.app');
    }
}
