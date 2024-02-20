<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

     protected $client = Client::class;

     /**
      * Define the model's default state.
      *
      * @return array
      */
 
     public function definition()
     {
         return [
             'name' => $this->faker->randomElement(['Lejla', 'Adna', 'Merima', 'Haris', 'Ivan']),
             'surname' => $this->faker->randomElement(['Murić', 'Zorić', 'Salić', 'Krupić', 'Brkić']),
             'email' => $this->faker->randomElement(['xxxyyy@gmail.com', 'zzzsss@gmail.com', 'user@gmail.com']),
             'phone' => $this->faker->randomElement(['061736948', '062357967', '0606543726']),
             'adress' => $this->faker->randomElement(['Bužimska 543', 'Kralja Tomislava bb', 'Alekse Šantića 23']),
         ];
     }
}
