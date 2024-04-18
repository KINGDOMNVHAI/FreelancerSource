<?php
namespace Database\Seeders;

use App\Models\BookingDetail;
use Illuminate\Database\Seeder;

class BookingDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookingDetail::create([
            'id_booking' => 1,
            'id_product' => 12,
            'quantity' => 2,
            'price_sale' => 75000,
            'discount' => 0,
            'unit_discount' => '%',
            'price_net' => 75000,
        ]);

        BookingDetail::create([
            'id_booking' => 2,
            'id_product' => 10,
            'quantity' => 1,
            'price_sale' => 75000,
            'discount' => 0,
            'unit_discount' => '%',
            'price_net' => 75000,
        ]);

        BookingDetail::create([
            'id_booking' => 2,
            'id_product' => 11,
            'quantity' => 1,
            'price_sale' => 75000,
            'discount' => 0,
            'unit_discount' => '%',
            'price_net' => 75000,
        ]);
    }
}
