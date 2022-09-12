<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class PaymentSeeder extends Seeder
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
        for ($i = 0; $i < $limit; $i++) {
            $chartId = $faker->numberBetween(1, 10);
            $chart = \App\Models\FoodsChart::where('chart_id', $chartId)->get();
            $total = 0;
            foreach ($chart as $key => $value) {
                $food = \App\Models\foods::where('id', $value->food_id)->first();
                $totalPrice = $food->price * $value->quantity;
                $total += $totalPrice;
            }
            DB::table('payments')->insert([ //,
                'chart_id' => $chartId,
                'payment_method' => $faker->randomElement(['cash', 'credit_card']),
                'total' => $total,
                'status' => 'success',
                'return' => 0,
                'paid' => $total,
                'final_total' => $total,
                'discount' => 0,
            ]);
        }
    }
}
