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
        // $this->call(UserSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(AuthRulesTableSeeder::class);
        $this->call(AuthGroupsTableSeeder::class);
        $this->call(AuthGroupAccessesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(IndustriesTableSeeder::class);
        $this->call(ChinaAreasTableSeeder::class);
        $this->call(ConfigsTableSeeder::class);
    }
}
