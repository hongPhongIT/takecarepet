<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('videos')->get()->count() == 0) {
            $faker = Faker\Factory::create();

            for($i = 1; $i <= 20; $i++) {
                App\Video::create([
                    'name'          => $faker->sentence($nbWords = 3, $variableNbWords = true),
                    'description'   => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
                    'link'          => 'https://i.ytimg.com/vi_webp/zpOULjyy-n8/sddefault.webp',
                    'category_id'   => $faker->numberBetween(1,12),
                    'is_delete'     => false,
                ]);
            }
        }
    }
}
