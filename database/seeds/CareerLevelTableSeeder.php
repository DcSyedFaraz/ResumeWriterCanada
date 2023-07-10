<?php

use App\CareerLevel;
use Illuminate\Database\Seeder;

class CareerLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CareerLevel::insert([
            [
                'name' => 'Early Career CV',
                'duration' => '0 - 2 years',
            ],
            [
                'name'=> 'Advance Career',
                'duration' => '2 - 8 years',
            ],
            [
                'name' => 'Specialist',
                'duration' => '8+ years',
            ],

        ]);
    }
}
