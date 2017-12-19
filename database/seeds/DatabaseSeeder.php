<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DangerLevelSeeder::class);
        $this->call(SalutationsSeeder::class);
        $this->call(OrgSizesSeeder::class);
        $this->call(AclLevelSeeder::class);
    }
}
