<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Factory;
use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Database\Seeders\AuthorSeeder;
use PhpParser\Node\Stmt\Catch_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AuthorSeeder::class,
            CategorySeeder::class,
        ]);
        //Publisher::factory()->count(10)->make();
        Publisher::factory(10)->create();
        Book::factory()->count(500)->create();

    }
}
