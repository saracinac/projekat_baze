<?php

namespace Database\Factories;
use App\Models\Stylist;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stylist>
 */
class StylistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

     protected $stylist = Stylist::class;

     /**
      * Define the model's default state.
      *
      * @return array
      */
 
     public function definition()
     {
         return [
             'name' => $this->faker->randomElement(['Ivana', 'Amina', 'Alem', 'Haris', 'Ivan']),
             'surname' => $this->faker->randomElement(['Hadžić', 'Torić', 'Salić', 'Krupić', 'Brkić']),
             'email' => $this->faker->randomElement(['xxxyyy@gmail.com', 'zzzsss@gmail.com', 'user@gmail.com']),
             'phone' => $this->faker->randomElement(['061736948', '062357967', '0606543726']),
             'speciality' => $this->faker->randomElement(['Kozmetički tretmani', 'Frizure za savdbe', 'Nokti']),
         ];
     }
}
