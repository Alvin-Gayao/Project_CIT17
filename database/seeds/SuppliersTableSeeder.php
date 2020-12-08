<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 50 dummy suppliers
    	$suppliers = factory(\App\Supplier::class, 50)->create();
    }
}
