<?php

namespace Database\Seeders;

use App\Models\FlightDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class FlightDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FlightDetail::factory(5)
        ->state(new Sequence(
            ['flight_source' => 'Nairobi'],
            ['flight_source' => 'Mombasa'],
            ['flight_source' => 'Kampala'],
            ['flight_source' => 'Addis ababa'],
            ['flight_source' => 'Kinshasa'],
            ['flight_destination' => 'London'],
            ['flight_destination' => 'Sydney'],
            ['flight_destination' => 'New York'],
            ['flight_destination' => 'Berlin'],
            ['flight_destination' => 'Paris'],
        ))
        ->create();
    }
}
