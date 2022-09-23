<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
       for ($i=0; $i < 10; $i++) { 
        DB::table('absensis')->insert([
            'user_id' => $i,
            'waktu_masuk' => now(),
            'waktu_pulang' => now(),
        ]);
       }
    }
}
