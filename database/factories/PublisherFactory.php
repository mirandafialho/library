<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
{
    public function definition()
    {
        return [
            'country_id' => $this->getCountryId(),
            'name'       => $this->faker->name
        ];
    }

    private function getCountryId(): int
    {
        return Country::all()->random()->first()->id;
    }
}
