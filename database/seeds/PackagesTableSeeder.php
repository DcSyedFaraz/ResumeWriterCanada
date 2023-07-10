<?php

use App\Package;
use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
                'name' => 'CV Writing'
            ],
            [
                'name' => 'Cover Letter Writing',
            ],
            [
                'name' => 'LinkedIn Profile',
            ],
            [
                'name' => 'CV Writing + Cover Letter',
            ],
            [
                'name' => 'CV + Cover letter + Linkedin',
            ],
        ];

        Package::insert($packages);
    }
}
