<?php

namespace Database\Factories;

use Domains\Catalog\Models\Range;
use Domains\Shared\Models\Concerns\KeyFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Range>
 */
class RangeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Range::class;

    public function definition(): array
    {
        return [
            //
            'name' => fake()->words(3, true),
            'description' => fake()->paragraph(4, true),
            'active' => true
        ];
    }
}
