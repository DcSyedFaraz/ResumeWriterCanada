<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            StatusTableSeeder::class,
            CategoryTableSeeder::class,
            TagsTableSeeder::class,
            CountryTableSeeder::class,
            CareerLevelTableSeeder::class,
            DeadlineTableSeeder::class,
            SelectServicesSeeder::class,
            PackagesTableSeeder::class,
            OrderServiceSeeder::class,
            FareTableSeeder::class,
            WebSettingTableSeeder::class,
            ServiceTableSeeder::class,
        ]);
    }
}
