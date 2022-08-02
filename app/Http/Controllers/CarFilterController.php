<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarFilterController extends Controller
{
    public function index()
    {

        return view('layouts.app', [
            'locations' => Car::get('location')
        ]);
    }
}
