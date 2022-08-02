<?php

use App\Http\Livewire\CarFilter;
use App\Http\Livewire\FlightFilter;
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

Route::get('/flight', FlightFilter::class);
Route::get('/cars', CarFilter::class);
