<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $table = 'flights';

    protected $fillable = ['flight_detail_id','airline_id'];

    public function flight_detail()
    {
        return $this->belongsTo(FlightDetail::class);
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }
}
