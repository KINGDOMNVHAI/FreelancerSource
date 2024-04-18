<?php
namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Booking::create([
            'code_booking' => 'TEST00001',
            'amount_sale' => 150000,
            'shipping' => 10000,
            'amount_net' => 150000,
            'booking_status' => 4,
            'fullname' => 'Việt Hải',
            'phone' => '0706533309',
            'email' => 'nvhai@gmail.com',
            'address' => 'Q1, TPHCM',
        ]);

        Booking::create([
            'code_booking' => 'TEST00002',
            'amount_sale' => 150000,
            'shipping' => 0,
            'amount_net' => 150000,
            'booking_status' => 3,
            'fullname' => 'Việt Hải',
            'phone' => '0706533309',
            'email' => 'nvhai@gmail.com',
            'address' => 'Q1, TPHCM',
        ]);
    }
}
