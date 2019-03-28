<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('categories')->get()->count() == 0) {
            $faker = Faker\Factory::create();

            for($i = 1; $i < 4; $i++) {
                App\Category::create([
                    'id'            => $i,
                    'name'          => $faker->sentence($nbWords = 3, $variableNbWords = true),
                    'description'   => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
                    'parent_id'     => 0,
                ]);
                for($j = 1; $j < 4; $j++) {
                    App\Category::create([
                        'id'            => $faker->unique()->numberBetween(4,12),
                        'name'          => $faker->sentence($nbWords = 5, $variableNbWords = true),
                        'description'   => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
                        'parent_id'     => $i,
                    ]);
                }
            }
        }
    }
}
