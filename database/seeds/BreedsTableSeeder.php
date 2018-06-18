<?php

use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $currentTime=date('Y-m-d H:i:s');
        DB::table('breeds')->insert([
        	['id'=>1, 'name' => "Mèo A"],
        	['id'=>2, 'name' => "Mèo B"],
        	['id'=>3, 'name' => "Mèo C"]
        	// ['id'=>3, 'name' => "Mèo C",'created_at' => $currentTime,'updated_at' => $currentTime]
        ]);
    }
}
