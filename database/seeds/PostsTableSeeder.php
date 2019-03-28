<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('posts')->get()->count() == 0) {
            $faker = Faker\Factory::create();

            for($i = 1; $i <= 20; $i++) {
                App\Post::create([
                    'title'         => $faker->sentence($nbWords = 7, $variableNbWords = true),
                    'content'       => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
                    'date_post'     => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
                    'user_id'       => $faker->numberBetween(1,2),
                    'is_delete'     => false,
                ]);
            }
        }
    }
}
