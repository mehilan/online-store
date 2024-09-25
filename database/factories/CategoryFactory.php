<?php

namespace Database\Factories;

use Domains\Catalog\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {

        return [
            'name' => fake()->words(3, true),
            'description' => fake()->paragraph(4, true),
            'active' => true
        ];
    }
}
