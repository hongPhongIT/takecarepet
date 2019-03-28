<?php

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('order_details')->get()->count() == 0) {
            $faker = Faker\Factory::create();

            for($i = 1; $i < 20; $i++) {
                App\OrderDetail::create([
                    'service_id'    => $faker->numberBetween(1,4),
                    'order_id'      => $faker->numberBetween(1,4),
                ]);
            }
        }
    }
}
