<?php

use Illuminate\Database\Seeder;

class AclLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acl_level')->insert(
            [
                ['value' => 'admin'],
                ['value' => 'user'],

            ]
        );
    }
}
