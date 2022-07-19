<?php

namespace Database\Seeders;

use App\Models\{
    Author, Book, Publisher, User
};

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();
        Author::factory()->count(2)->create();
        Publisher::factory()->count(2)->create();
        Book::factory()->count(8)->create();
    }
}
