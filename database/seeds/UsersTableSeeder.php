<?php

use App\Model\User;
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
        User::create([
            'name'      => 'hai',
            'username'  => 'nvhai',
            'password'  => bcrypt('123'),
            'email'     => 'nvhai@gmail.com',
        ]);

        User::create([
            'name'      => 'thu',
            'username'  => 'thu',
            'password'  => bcrypt('123'),
            'email'     => 'thu@gmail.com',
        ]);
    }
}
