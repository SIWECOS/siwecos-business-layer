<?php

use Illuminate\Database\Seeder;
use App\OrgSize;

class OrgSizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrgSize::create(
            ['value' => '1-10'],
            ['value' => '11-50'],
            ['value' => '51-100'],
            ['value' => '100+']
        );
    }
}
