<?php

use Illuminate\Database\Seeder;

class OrgSizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_size')->insert(
            [
                ['value' => '1-10'],
                ['value' => '11-50'],
                ['value' => '51-100'],
                ['value' => '100+'],
            ]
        );
    }
}
