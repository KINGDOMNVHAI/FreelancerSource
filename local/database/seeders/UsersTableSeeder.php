<?php
namespace Database\Seeders;

use App\Models\User;
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
            'lastname'  => 'Nguyễn',
            'firstname' => 'Admin 1',
            'username'  => 'admin1',
            'password'  => md5('123456'),
            'email'     => 'admin1@gmail.com',
            'role'      => ROLE_ADMIN,

            'city'      => 'TPHCM',
            'address'   => 'Q1',
            // 'company'   => 'KINGDOM NVHAI',
            // 'description' => 'KINGDOM NVHAI',
            // 'signature' => 'NVHAI',
            'avatar'    => 'avatar_tohka.jpg',
            'banner'    => 'banner_Kurumi.jpg',
        ]);

        User::create([
            'lastname'  => 'Lê',
            'firstname' => 'User 1',
            'username'  => 'user1',
            'password'  => md5('123456'),
            'email'     => 'user1@gmail.com',
            'role'      => ROLE_MEMBER,

            'city'      => 'TPHCM',
            'address'   => 'Q1',
            'avatar'    => 'avatar_tohka.jpg',
            'banner'    => 'banner_Kurumi.jpg',
        ]);

        User::create([
            'lastname'  => 'Hà',
            'firstname' => 'User 2',
            'username'  => 'user2',
            'password'  => md5('123456'),
            'email'     => 'user2@gmail.com',
            'role'      => ROLE_MEMBER,

            'city'      => 'TPHCM',
            'address'   => 'Q1',
            'avatar'    => 'avatar_tohka.jpg',
            'banner'    => 'banner_Kurumi.jpg',
        ]);

    }
}
