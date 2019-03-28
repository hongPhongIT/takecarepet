<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('images')->get()->count() == 0) {
            $faker = Faker\Factory::create();

            for($i = 1; $i <= 20; $i++) {
                App\Image::create([
                    'post_id'   => $faker->unique()->numberBetween(1,20),
                    'link_image'      => 'uploads/2019/03/05/post.jpg',
                    'is_delete' => false,
                ]);
            }
        }
    }
}
