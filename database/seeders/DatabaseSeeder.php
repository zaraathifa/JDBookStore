<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Rating;

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

        Author::factory(50)->create();
        Category::factory(20)->create();
        Book::factory(100)->create();
        
        //Rating::factory(100)->create();

        // Author::factory(100)->create();
        // Category::factory(300)->create();
        // Book::factory(10000)->create();
        

    }
}
