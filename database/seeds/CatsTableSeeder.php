<?php

use Illuminate\Database\Seeder;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $currentTime=date('Y-m-d H:m:s');
//        DB::table('cats')->insert([
//        	['id'=>1, 'name' => "Mèo một",'date_of_birth' => "2018-3-5",'breed_id' => 1, 'user_id' => 1],
//        	['id'=>2, 'name' => "Mèo hai",'date_of_birth' => "2018-4-7",'breed_id' => 2, 'user_id' => 2],
//        	['id'=>3, 'name' => "Mèo ba",'date_of_birth' => "2018-5-10",'breed_id' => 3, 'user_id' => 3],
//        ]);
        factory(Furbook\Cat::class, 50)->create();
    }
}
