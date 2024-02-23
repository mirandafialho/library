<?php

namespace Database\Factories;

use App\Models\{Author, Category, Publisher};
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'publisher_id'     => Publisher::factory(),
            'author_id'        => Author::factory(),
            'category_id'      => Category::factory(),
            'name'             => $this->faker->name,
            'cover_url'        => $this->faker->url,
            'isbn'             => $this->faker->isbn13,
            'print_length'     => $this->faker->numberBetween(50, 400),
            'publication_year' => $this->faker->year,
            'edition'          => $this->faker->randomDigitNotZero(),
        ];
    }
}
