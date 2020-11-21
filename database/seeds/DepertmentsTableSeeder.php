<?php

use Illuminate\Database\Seeder;

class DepertmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Depertment::class, 5)->create();
    }
}
