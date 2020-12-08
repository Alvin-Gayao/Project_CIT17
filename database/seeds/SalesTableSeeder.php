<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 50 dummy suppliers
    	$suppliers = factory(\App\Sales::class, 50)->create();
    }
}
