<?php

namespace Database\Seeders;

use App\Models\Passenger;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserSeeder::class,
            TripSeeder::class,
            PassengerSeeder::class,
        ]);

    }
}
