<?php
namespace App\Services;

use App\Models\Booking;
use App\Models\BookingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use DB;

class BookingService extends ServiceProvider
{
    public function __construct()
    {

    }

    public function setBooking($listProduct, $infoPerson)
    {
        // Table Booking
        $timestamp = time();
        $codeBooking = 'OD' . gmdate('Ymdhms', $timestamp);;

        $amountSale = 0;

        foreach($listProduct as $product) {
            $amountSale = $amountSale + $product['price_product'];
        }

        // Insert Booking
        $queryBooking = Booking::insert([
            'code_booking'  => $codeBooking,
            'amount_sale'   => $amountSale,
            'shipping'      => SHIPPING_PRICE,
            'amount_net'    => $amountSale + SHIPPING_PRICE,
            'fullname'      => $infoPerson['fullname'],
            'email'         => $infoPerson['email'],
            'phone'         => $infoPerson['phone'],
            'address'       => $infoPerson['address'],
        ]);

        // Insert Booking Detail
        if ($queryBooking) {
            $bookingNew = Booking::where('booking_status', '=', BOOKING_STATUS_NEW)->orderBy('id_booking', 'desc')->first();
            $idBooking = $bookingNew->id_booking;

            foreach($listProduct as $product) {
                $queryBookingDetail = BookingDetail::insert([
                    'id_booking'    => $bookingNew->id_booking,
                    'id_product'    => $product['id_product'],
                    'quantity'      => $product['quantity'],
                    'price_sale'    => $product['price_product'],
                    'discount'      => $amountSale,
                    'unit_discount' => $amountSale,
                    'price_net'     => $amountSale,
                ]);
            }
            return $idBooking;
        }
        return null;
    }

    public function getBooking($id)
    {
        return Booking::where('id_booking', '=', $id)->first();
    }

    public function getBookingDetail($id)
    {
        $query = DB::table('booking_detail')->join('products', 'products.id_product', '=', 'booking_detail.id_product')
            ->select('products.id_product'
            ,'products.name_product'
            ,'products.thumbnail_product'

            , 'booking_detail.id_booking'
            , 'booking_detail.quantity'
            , 'booking_detail.price_sale'
            , 'booking_detail.price_net'
            , 'booking_detail.created_at'
        )->where('booking_detail.id_booking', '=', $id)
        ->get();

        return $query;
    }

    public function getListBookingPaginate()
    {
        return Booking::where('booking_status', '=', BOOKING_STATUS_NEW)->orderBy('created_at', 'desc')->paginate();
    }
}
