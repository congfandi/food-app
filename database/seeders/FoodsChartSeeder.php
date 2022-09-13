<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class FoodsChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $limit = 10;
        for ($i = 1; $i <= $limit; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                DB::table('foods_carts')->insert([ //,
                    'food_id' => $faker->numberBetween(1, 1000),
                    'cart_id' => $i,
                    'quantity' => $faker->numberBetween(1, 10),
                ]);
            }
        }
    }
}
