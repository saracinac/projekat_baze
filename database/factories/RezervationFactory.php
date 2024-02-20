<?php

namespace Database\Factories;

use App\Models\Rezervation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class RezervationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rezervation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = $this->faker->dateTimeThisYear()->format('Y-m-d');

        return [
            'date' => $date,
            'client' => $this->faker->numberBetween(1, 10),
            'treatment' => $this->faker->numberBetween(1, 10),
            'stylist' => $this->faker->numberBetween(1, 10),
        ];
    }
}
