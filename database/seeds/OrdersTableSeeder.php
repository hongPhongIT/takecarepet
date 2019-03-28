<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('orders')->get()->count() == 0) {
            $faker = Faker\Factory::create();

            for($i = 0; $i < 4; $i++) {
                App\Order::create([
                    'user_id'       => $faker->numberBetween(1,2),
                    'total_amount'  => $faker->numberBetween(50,200),
                    'time'          => $faker->time($format = 'H:i:s', $max = 'now'),
                    'is_completed'  => true,
                ]);
            }
        }
    }
}
