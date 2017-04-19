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
            'name' => 'Abraham Jordy',
            'a_patern' => 'Ruiz',
            'a_matern' => 'Ponce',
            'admin'   =>  true,
            'email'  => 'abraham.ruiz@netcloud.com',
            'password'   => Hash::make('admin'),
        ]);
    }
}
