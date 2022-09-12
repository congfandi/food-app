<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $limit = 1000;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('foods')->insert([ //,
                'name' => $faker->word(),
                'description' => $faker->text,
                'price' => $faker->numberBetween(1000, 100000),
                'image' => $faker->imageUrl($width = 640, $height = 480, 'food'),
                'category_id' => $faker->numberBetween(1, 10),
                'status' => 'available',
            ]);
        }
    }
}
