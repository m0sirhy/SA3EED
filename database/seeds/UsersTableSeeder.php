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
        //
        DB::table('users')->insert([
          'user_name'=>Str::random(10),
          'email'=>'user@gmail.com',
          'password'=>bcrypt('123456'),
        ]);
    }
}
