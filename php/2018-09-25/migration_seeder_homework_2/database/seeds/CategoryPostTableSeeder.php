<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('category_post')->insert([
                'category_id' => $faker->randomDigitNotNull,
                'post_id' => $faker->randomDigitNotNull
            ]);
        }
    }
}
