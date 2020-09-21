<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            [
              'id'  			=> 8,
              'nama'  			=> 'heni huhu',
              'email' 			=> 'b@gmail.com',
              'password'		=> bcrypt('111111'),
              'role'			=> 'Kepala Perpus',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
        ]);
    }
}
