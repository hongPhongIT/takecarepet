<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('comments')->get()->count() == 0) {
            $faker = Faker\Factory::create();

            for($i = 1; $i <= 20; $i++) {
                App\Comment::create([
                    'content'       => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
                    'user_id'       => $faker->numberBetween(1,2),
                    'post_id'       => $faker->numberBetween(1,10),
                    'is_true'       => true,
                    'is_delete'     => false,
                ]);
            }
        }
    }
}
