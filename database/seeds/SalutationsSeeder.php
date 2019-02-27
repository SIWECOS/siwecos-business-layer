<?php

use Illuminate\Database\Seeder;
use App\Salutation;

class SalutationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Salutation::create(['value' => 'Mr.']);
        Salutation::create(['value' => 'Mrs.']);
    }
}
