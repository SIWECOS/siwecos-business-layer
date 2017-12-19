<?php

use Illuminate\Database\Seeder;

class DangerLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('danger_level')->insert(
            [
                ['value' => 'info'],
                ['value' => 'warning'],
                ['value' => 'error'],
            ]
        );
    }
}
