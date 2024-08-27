<?php

namespace Database\Factories;

use App\Models\Products;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductsComment>
 */
class ProductsCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           
                'comment' => $this->faker->sentence,
                'vote_start' => $this->faker->numberBetween(1, 5),
                'created_at' => $this->faker->dateTime,
                'updated_at' => $this->faker->dateTime,
                'users_id' => User::all()->random()->id,
                'products_id' => Products::all()->random()->id,
          
        ];
    }
}
