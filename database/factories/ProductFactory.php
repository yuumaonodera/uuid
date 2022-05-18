<?php

namespace Database\Factories;

use App\Model\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'rpice' => $this->faker->randomNumber,
            'uuid' => $this->faker->uuid
        ];
    }
}
