<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('services')->get()->count() == 0) {
            $faker = Faker\Factory::create();

            // for($i = 0; $i < 4; $i++) {
            //     App\Service::create([
            //         'name'          => $faker->sentence($nbWords = 5, $variableNbWords = true),
            //         'description'   => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
            //         'price'         => $faker->numberBetween(2,500),
            //     ]);
            // }
            $services = [
                [                    
                    'name' => 'Trim the Pet hair',
                    'description' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
                    'image' => 'uploads/2019/03/05/trim.jpg',
                    'price' => '80',
                    'created_at' => DB::raw('now()'),
                    'updated_at' => DB::raw('now()'),
                ],[                    
                    'name' => 'Nail care cleans Pet ears',
                    'description' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
                    'image' => 'uploads/2019/03/05/clean_pet.jpg',
                    'price' => '75',
                    'created_at' => DB::raw('now()'),
                    'updated_at' => DB::raw('now()'),
                ],[                    
                    'name' => 'Bath and brush Pet hair (with standard shampoo).',
                    'description' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
                    'image' => 'uploads/2019/03/05/brush.jpg',
                    'price' => '120',
                    'created_at' => DB::raw('now()'),
                    'updated_at' => DB::raw('now()'),
                ],[                    
                    'name' => 'Full COMBO of fur care',
                    'description' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
                    'image' => 'uploads/2019/03/05/full_combo.jpg',
                    'price' => '200',
                    'created_at' => DB::raw('now()'),
                    'updated_at' => DB::raw('now()'),
                ]
            ];
            DB::table('services')->insert($services);
        }
    }
}
