<?php

use App\Deadline;
use Illuminate\Database\Seeder;

class DeadlineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Deadline::insert([
            [
                'name' => '5 Days',
                'duration_in_days' => '5',
            ],
            [
                'name' => '3 Days',
                'duration_in_days' => '3',
            ],
            [
                'name' => '1 Day',
                'duration_in_days' => '1',
            ],

        ]);
    }
}
