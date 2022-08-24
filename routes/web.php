<?php

use App\Http\Controllers\CarFilterController;
use App\Http\Livewire\CarFilter;
use App\Http\Livewire\FlightFilter;
use App\Models\Airline;
use App\Models\FlightDetail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/flights', function(){

    $available_airlines = Airline::get('name');

    $flight_source = FlightDetail::get('flight_source');
    $flight_destination = FlightDetail::get('flight_destination');

    return view('layouts.app', [
        'flight_sources' => $flight_source,
        'flight_destinations' => $flight_destination,
        'available_airlines' => $available_airlines,
    ]);
});
 Route::get('/cars', CarFilter::class);
// Route::get('/cars', [CarFilterController::class, 'index']);
