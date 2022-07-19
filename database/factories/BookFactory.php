<?php

namespace Database\Factories;

use App\Models\{Author, Publisher};
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'publisher_id' => Publisher::factory(),
            'author_id'    => Author::factory(),
            'name'         => $this->faker->name,
            'cover'        => $this->faker->url,
            'pages'        => $this->faker->numberBetween(50, 2000),
            'year'         => $this->faker->year
        ];
    }
}
