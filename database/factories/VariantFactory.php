<?php

namespace Database\Factories;

use Domains\Catalog\Models\Product;
use Domains\Catalog\Models\Variant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Variant>
 */
class VariantFactory extends Factory
{

    protected $model = Variant::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $product = Product::factory()->create();
        $cost = fake()->boolean() ? $product->cost : ($product->cost + fake()->numberBetween(100, 7500));
        $shippable = fake()->boolean();

        return [
            //
            'name' => fake()->words(3, true),
            'cost' => $cost,
            'retail' => ($product->cost === $cost) ? $product->retail : ($product->retail + fake()->numberBetween(100, 7500)),
            'height' => $shippable ? fake()->numberBetween(100, 10000) : null,
            'width' => fake()->boolean() ? fake()->numberBetween(100, 10000) : null,
            'length' => fake()->boolean() ? fake()->numberBetween(100, 10000) : null,
            'weight' => fake()->boolean() ? fake()->numberBetween(100, 10000) : null,
            'active' => $this->faker->boolean,
            'shippable' => $shippable,
            'product_id' => $product->id
        ];
    }
}
