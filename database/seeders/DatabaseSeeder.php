<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            FoodSeeder::class,
            ChartSeeder::class,
            FoodsChartSeeder::class,
            PaymentSeeder::class,
            CounterSeeder::class,
            AbsensiSeeder::class
        ]);
    }
}
