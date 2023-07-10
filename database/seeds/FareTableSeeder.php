<?php

use App\Fare;
use Illuminate\Database\Seeder;

class FareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fare::insert([
            ['package_id' => 1, 'career_level_id' => 1, 'day_model_id' => 1, 'fare' => 50],
            ['package_id' => 1, 'career_level_id' => 1, 'day_model_id' => 2, 'fare' => 60],
            ['package_id' => 1, 'career_level_id' => 1, 'day_model_id' => 3, 'fare' => 80],
            ['package_id' => 2, 'career_level_id' => 1, 'day_model_id' => 1, 'fare' => 30],
            ['package_id' => 2, 'career_level_id' => 1, 'day_model_id' => 2, 'fare' => 40],
            ['package_id' => 2, 'career_level_id' => 1, 'day_model_id' => 3, 'fare' => 60],
            ['package_id' => 3, 'career_level_id' => 1, 'day_model_id' => 1, 'fare' => 40],
            ['package_id' => 3, 'career_level_id' => 1, 'day_model_id' => 2, 'fare' => 50],
            ['package_id' => 3, 'career_level_id' => 1, 'day_model_id' => 3, 'fare' => 70],
            ['package_id' => 4, 'career_level_id' => 1, 'day_model_id' => 1, 'fare' => 75],
            ['package_id' => 4, 'career_level_id' => 1, 'day_model_id' => 2, 'fare' => 95],
            ['package_id' => 4, 'career_level_id' => 1, 'day_model_id' => 3, 'fare' => 135],
            ['package_id' => 5, 'career_level_id' => 1, 'day_model_id' => 1, 'fare' => 115],
            ['package_id' => 5, 'career_level_id' => 1, 'day_model_id' => 2, 'fare' => 145],
            ['package_id' => 5, 'career_level_id' => 1, 'day_model_id' => 3, 'fare' => 215],


            ['package_id' => 1, 'career_level_id' => 2, 'day_model_id' => 1, 'fare' => 60],
            ['package_id' => 1, 'career_level_id' => 2, 'day_model_id' => 2, 'fare' => 70],
            ['package_id' => 1, 'career_level_id' => 2, 'day_model_id' => 3, 'fare' => 90],
            ['package_id' => 2, 'career_level_id' => 2, 'day_model_id' => 1, 'fare' => 40],
            ['package_id' => 2, 'career_level_id' => 2, 'day_model_id' => 2, 'fare' => 50],
            ['package_id' => 2, 'career_level_id' => 2, 'day_model_id' => 3, 'fare' => 70],
            ['package_id' => 3, 'career_level_id' => 2, 'day_model_id' => 1, 'fare' => 50],
            ['package_id' => 3, 'career_level_id' => 2, 'day_model_id' => 2, 'fare' => 60],
            ['package_id' => 3, 'career_level_id' => 2, 'day_model_id' => 3, 'fare' => 80],
            ['package_id' => 4, 'career_level_id' => 2, 'day_model_id' => 1, 'fare' => 95],
            ['package_id' => 4, 'career_level_id' => 2, 'day_model_id' => 2, 'fare' => 115],
            ['package_id' => 4, 'career_level_id' => 2, 'day_model_id' => 3, 'fare' => 155],
            ['package_id' => 5, 'career_level_id' => 2, 'day_model_id' => 1, 'fare' => 145],
            ['package_id' => 5, 'career_level_id' => 2, 'day_model_id' => 2, 'fare' => 175],
            ['package_id' => 5, 'career_level_id' => 2, 'day_model_id' => 3, 'fare' => 235],

            ['package_id' => 1, 'career_level_id' => 3, 'day_model_id' => 1, 'fare' => 80],
            ['package_id' => 1, 'career_level_id' => 3, 'day_model_id' => 2, 'fare' => 90],
            ['package_id' => 1, 'career_level_id' => 3, 'day_model_id' => 3, 'fare' => 110],
            ['package_id' => 2, 'career_level_id' => 3, 'day_model_id' => 1, 'fare' => 50],
            ['package_id' => 2, 'career_level_id' => 3, 'day_model_id' => 2, 'fare' => 60],
            ['package_id' => 2, 'career_level_id' => 3, 'day_model_id' => 3, 'fare' => 80],
            ['package_id' => 3, 'career_level_id' => 3, 'day_model_id' => 1, 'fare' => 60],
            ['package_id' => 3, 'career_level_id' => 3, 'day_model_id' => 2, 'fare' => 70],
            ['package_id' => 3, 'career_level_id' => 3, 'day_model_id' => 3, 'fare' => 90],
            ['package_id' => 4, 'career_level_id' => 3, 'day_model_id' => 1, 'fare' => 125],
            ['package_id' => 4, 'career_level_id' => 3, 'day_model_id' => 2, 'fare' => 145],
            ['package_id' => 4, 'career_level_id' => 3, 'day_model_id' => 3, 'fare' => 185],
            ['package_id' => 5, 'career_level_id' => 3, 'day_model_id' => 1, 'fare' => 185],
            ['package_id' => 5, 'career_level_id' => 3, 'day_model_id' => 2, 'fare' => 215],
            ['package_id' => 5, 'career_level_id' => 3, 'day_model_id' => 3, 'fare' => 175],
        ]);
    }
}
