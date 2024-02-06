<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'libPdt'=>fake()->name(),
            "prixVente"=>$this->faker->randomElement([5700,4500,5000]),
            'Qte'=>$this->faker->randomElement([10,5,3]),
            'description'=>fake()->text(),
            'type'=>fake()->name(),
        ];
    }
}
