<?php

namespace Database\Factories;

use Domains\Customer\Models\Address;
use Domains\Customer\Models\Location;
use Domains\Customer\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'label' => Arr::random([
                'Home',
                'Office',
                'Head Office',
                'Mums House',
            ]),
            'billing' => $this->faker->boolean(),
            'user_id' => User::factory()->create(),
            'location_id' => Location::factory()->create(),
        ];
    }

    public function billing()
    {
        return $this->state(function (array $attributes){
            return [
                'billing' => true
            ];
        });
    }

    public function shipping()
    {
        return $this->state(function (array $attributes){
            return [
                'billing' => false
            ];
        });
    }


}
