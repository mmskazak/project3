<?php

namespace Database\Factories;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TripFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trip::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $toMoscow = $this->faker->numberBetween(0, 1);

        return [
            'to_moscow' => $toMoscow,
            'to_serpukhov' => $toMoscow === 0 ? 1 : 0,
            'date_time' => $this->faker->dateTimeBetween('-5 day','now'),
            'description' => $this->faker->realText(),
            'passenger_seats' => $this->faker->numberBetween(1,3),
            'busy' => $this->faker->numberBetween(1,3),
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
