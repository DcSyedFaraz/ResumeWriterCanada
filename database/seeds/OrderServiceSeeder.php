<?php

use App\OrderService;
use Illuminate\Database\Seeder;

class OrderServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order_services = [
            [
                'name' => 'Resume Writing',
            ],
            [
                'name' => 'Cv Writing',
            ],
            [
                'name' => 'Cover Letter Writing',
            ],
            [
                'name' => 'LinkedIn Profile',
            ],
            [
                'name' => 'Full Package with Resume',
            ],
            [
                'name' => 'Full Package with CV',
            ],
        ];

        OrderService::insert($order_services);
    }
}
