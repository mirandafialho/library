<?php

namespace Database\Factories;

use App\Models\Country;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'country_id' => $this->getCountryId(),
            'name'       => $this->faker->name,
            'birth'      => $this->faker->dateTimeThisCentury
        ];
    }

    private function getCountryId(): int
    {
        return Country::all()->random()->pluck('id');
    }
}
