<?php
namespace Database\Seeders;

use App\Models\Distributors;
use Illuminate\Database\Seeder;

class DistributorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Distributors::create([
            'name_dis' => 'Nhà phân phối 1',
            'address_dis' => 'distributor-1',
            'email_dis' => 'distributor1@gmail.com',
            'phone_dis' => '012345678',
            'enable_dis' => 1,
        ]);

        Distributors::create([
            'name_dis' => 'Nhà phân phối 2',
            'address_dis' => 'distributor-2',
            'email_dis' => 'distributor2@gmail.com',
            'phone_dis' => '012345678',
            'enable_dis' => 1,
        ]);
    }
}
