<?php

namespace Database\Factories;

use Domains\Customer\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Location::class;

    public function definition(): array
    {

        $street = fake()->streetAddress();

        $house = Str::of($street)->after('');

        return [
            'house' => $house,
            'street' => Str::of($street)->before(''),
            'parish' => fake()->city,
            'ward' => fake()->address,
            'district' => fake()->citySuffix,
            'country' => fake()->country,
            'postcode' => fake()->postcode
        ];
    }


}
