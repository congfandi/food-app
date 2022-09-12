<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ChartSeeder extends Seeder
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
            DB::table('charts')->insert([ //,
                'user_id' => $i,
                'status' => 'pending',
            ]);
        }
    }
}
