<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightDetail extends Model
{
    use HasFactory;

    protected $table = 'flight_details';
    public $timestamps = false;

    protected $fillable = [
        'flight_source',
        'flight_destination',
        'departing_date',
        'returning_date',
        'departure_time',
        'arrival_time',
    ];

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }
}
