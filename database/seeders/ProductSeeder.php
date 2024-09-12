<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'slug' => $faker->slug,
                'status' => rand(0, 1), // random status (0 or 1)
            ]);
        }
    }
}
