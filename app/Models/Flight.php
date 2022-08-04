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

    public static function checkBoxFilter($entries,array $parameter,string $column)
    {
        $filtered = Flight::query()
                          ->when($parameter, function($query) use($parameter, $column) {
                              $query->whereIn($column, $parameter);
                          })->get();
        $entries = $filtered;

        return $entries;
    }
}
