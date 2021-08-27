<?php

namespace Database\Factories;

use App\Models\Passenger;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PassengerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Passenger::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'trip_id' => Trip::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
