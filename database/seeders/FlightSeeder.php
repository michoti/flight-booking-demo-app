<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flight::factory(30)->create();
    }
}
