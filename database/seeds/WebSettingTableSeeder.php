<?php

use App\WebSetting;
use Illuminate\Database\Seeder;

class WebSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebSetting::insert([
            [
                'name' => 'CV Writers',
                'email' => 'info@cvwriters.ae',
                'contact' => '+971 56 699 5815',
                'address' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio dicta voluptate necessitatibus, error autem tenetur fuga eveniet maxime facilis quo aperiam hic, beatae ullam. Iusto, dolorum doloribus. Sed, cum.',
                'facebook_link' => 'https://www.facebook.com/cvwritersuae',
                'instagram_link' => 'https://www.instagram.com/cvwritersuae/',
                'linkedin_link' => 'null',
                'whatsapp_link' => 'https://api.whatsapp.com/send?phone=971566995815',
            ]
        ]);
    }
}
