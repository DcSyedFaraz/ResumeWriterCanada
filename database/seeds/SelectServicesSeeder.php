<?php

use Illuminate\Database\Seeder;
use App\SelectServices;

class SelectServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SelectServices::insert([
            [
                'name' => 'Resume Writing',
            ],
            [
                'name' => 'CV Writing',
            ],
            [
                'name' => 'Cover Letter Writing',
            ],
            [
                'name' => 'LinkedIn Profile',
            ],
            [
                'name' => 'Resume + Cover Letter Writing',
            ],
            [
                'name' => 'CV + Cover Letter Writing',
            ],
            [
                'name' => 'Full Package: Resume + Cover Letter + LinkedIn Profile + Thank You &amp; Follow-up Letters',
            ],
            [
                'name' => 'Full Package: CV + Cover Letter + LinkedIn Profile + Thank You &amp; Follow-up Letters'
            ],
         
        ]);
         
    }
}
