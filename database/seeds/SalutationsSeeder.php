<?php

use Illuminate\Database\Seeder;

class SalutationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salutation')->insert(
            [
                ['value' => 'Mr.'],
                ['value' => 'Mrs.'],
            ]
        );
    }
}
