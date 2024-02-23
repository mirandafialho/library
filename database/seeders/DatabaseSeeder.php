<?php

namespace Database\Seeders;

use App\Models\{
    Author, Book, Publisher, User
};

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CountrySeeder::class,
        ]);

        User::factory()->create([
            'name'              => 'Library Admin',
            'email'             => 'admin@library.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('admin#2024'),
            'remember_token'    => Str::random(10),
        ]);

        User::factory(4)->create();
        Author::factory()->count(2)->create();
        Publisher::factory()->count(2)->create();
        Book::factory()->count(8)->create();
    }
}
