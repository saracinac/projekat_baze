<?php

namespace Database\Factories;
use App\Models\Treatment;

use Illuminate\Database\Eloquent\Factories\Factory;

class TreatmentFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

     protected $model = Treatment::class;

     /**
      * Define the model's default state.
      *
      * @return array
      */
 
     public function definition()
     {
         return [
             'name' => $this->faker->randomElement(['Muško šišanje', 'Žensko šišanje', 'Tretman lica', 'Manikura', 'Pedikura']),
             'description' => $this->faker->randomElement(['Klasično šišanje je tradicionalni pristup friziranju koji uključuje korištenje škara ili mašinice za šišanje kako bi se postigao željeni izgled kose.', 'Frizura sa slojevima je tehnika šišanja koja uključuje stvaranje različitih duljina u kosi kako bi se postigao slojeviti izgled. ', '
             Tretman lica je proces koji se obično izvodi u kozmetičkim salonima ili spa centrima, a fokusira se na čišćenje, hidrataciju i obnavljanje kože lica.', 'Manikura je kozmetički tretman koji se primjenjuje na noktima ruku radi poboljšanja njihovog izgleda i zdravlja. ', 'Pedikura je kozmetički tretman koji se primjenjuje na stopalima radi poboljšanja njihovog izgleda i zdravlja.']),
             'price' => $this->faker->randomElement(['10', '20', '30']),
         ];
     }
 }
