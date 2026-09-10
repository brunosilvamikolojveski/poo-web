<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Review>
 */
// database/factories/ReviewFactory.php
class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition(): array
    {
        return [
            'product_id'=> Product::inRandomOrder()->first()?->id ?? Product::factory(),
            'customer_id'=> Customer::inRandomOrder()->first()?->id ?? Customer::factory(),
            'rating'=> fake()->numberBetween(1, 5),
            'comment'=> fake()->boolean(70)
                ? fake()->sentence(random_int(5, 15))
                : null,
        ];
    }
}

