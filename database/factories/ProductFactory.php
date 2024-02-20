<?php

namespace Database\Factories;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

     protected $product = Product::class;

     /**
      * Define the model's default state.
      *
      * @return array
      */
 
     public function definition()
     {
         return [
             'name' => $this->faker->randomElement(['Šampon za kosu', 'Krema za ruke', 'Regenerator', 'Turpija', 'Ulje']),
             'description' => $this->faker->randomElement(['Intenzivno hidrira', 'Obnavlja', 'Njeguje', 'Ugodan miris']),
             'price' => $this->faker->randomElement(['10', '20', '30']),
         ];
     }
}
