<?php

namespace Database\Factories;

use Domains\Catalog\Models\Category;
use Domains\Catalog\Models\Product;
use Domains\Catalog\Models\Range;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cost = fake()->numberBetween(100, 100000);
        return [
            //
            'name' => fake()->name(),
            'description' => fake()->paragraph(4),
            'cost' => $cost,
            'retail' => ($cost * config('shop.profit_margin')),
            'active' => fake()->boolean(),
            'vat' => config('shop.vat'),
            'category_id' => Category::factory()->create(),
            'range_id' => $this->faker->boolean ?  Range::factory()->create() : null

        ];
    }
}
