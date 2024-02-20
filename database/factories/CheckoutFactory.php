<?php

namespace Database\Factories;
use App\Models\Checkout;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Checkout>
 */
class CheckoutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

     protected $checkout = Checkout::class;

     /**
      * Define the model's default state.
      *
      * @return array
      */
 
     public function definition()
     {
         return [
             'reservation' => $this->faker->numberBetween(1,10),
             'product' => $this->faker->numberBetween(1,10),
             'review' => $this->faker->randomElement(['Jako ljubazno osoblje!!', 'Super!!', 'Uredno i čisto!!']),
             
         ];
     }
}
