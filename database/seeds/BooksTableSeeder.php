<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 30; $i++) {
            Book::create([
                'title' => $faker->sentence,
                'author' => $faker->name,
                'image' => $faker->image,
                'description' => $faker->paragraph,
                'link' => $faker->imageUrl(),
                'category_id' => rand(1,6)
            ]);
        }
    }
}
