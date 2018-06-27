<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id'=>1, 'name' => "user1", 'email' => 'user1@gmail.com', 'password' => bcrypt('123456'), 'is_admin' => false],
            ['id'=>2, 'name' => "user2", 'email' => 'user2@gmail.com', 'password' => bcrypt('123456'), 'is_admin' => true],
            ['id'=>3, 'name' => "admin", 'email' => 'admin@gmail.com', 'password' => bcrypt('456789'), 'is_admin' => true],
            // ['id'=>3, 'name' => "Mèo C",'created_at' => $currentTime,'updated_at' => $currentTime]
        ]);
    }
}
