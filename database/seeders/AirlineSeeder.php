<?php

namespace Database\Seeders;

use App\Models\Airline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Airline::factory(5)
        ->state(new Sequence(
            ['name' => 'Kenya airways'],
            ['name' => 'Rwanda airways'],
            ['name' => 'Ethiopian airways'],
            ['name' => 'Etihad airways'],
            ['name' => 'Qatar airways'],
        ))
        ->create();
    }
}
