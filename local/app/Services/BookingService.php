<?php
namespace App\Services;

use App\Models\Booking;
use App\Models\BookingDetail;
use App\Ultis\StringUltis;
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
        $query = DB::table('booking')->join('booking_detail', 'booking.id_booking', '=', 'booking_detail.id_booking')
            ->join('products', 'products.id_product', '=', 'booking_detail.id_product')
            ->select('products.id_product'
            ,'products.name_product'
            ,'products.thumbnail_product'

            , 'booking.shipping'
            , 'booking.amount_net'
            , 'booking.booking_status'
            , 'booking.fullname'
            , 'booking.phone'
            , 'booking.email'
            , 'booking.address'

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
        $bookingStatus = BOOKING_STATUS_NEW;

        return DB::table('booking')
        ->select(
            'booking.*'
        )->paginate();

        // return Booking::where('booking_status', '=', $bookingStatus)
        //             ->orderBy('created_at', 'desc')
        //             ->paginate();
    }

    public function searchBooking($filter)
    {
        // idCat là một mảng nên dùng IN (1,2,3,4,5)
        $query = DB::table('booking')
            ->select('booking.*',
            )
        ;

        $code = null;
        $stringUltis = new StringUltis();
        if ($filter['code_booking'] != null) {
            $code = $stringUltis->removeSpecialCharacter($filter['code_booking']);
            $code = '%' . $code . '%';
            $query = $query->where('booking.code_booking', 'like', $code);
        }

        if ($filter['year'] != null) {
            $query = $query->whereYear('created_at', '=', $filter['year']);
        }

        if ($filter['month'] != null) {
            $query = $query->whereMonth('created_at', '=', $filter['month']);
        }

        if ($filter['status'] != null) {
            $query = $query->where('booking_status', '=', $filter['status']);
        }

        if ($filter['sort'] != null && $filter['sort'] == 'asc') {
            $query = $query->orderBy('created_at', 'asc');
        } else {
            $query = $query->orderBy('created_at', 'desc');
        }

        return $query->paginate(LIMIT_8);
    }

    public function countBookingByStatus()
    {
        $result = [];
        $listBooking = DB::table('booking')
            ->select(DB::raw('
                count(booking.id_booking) as count_booking,
                booking.booking_status
            '))->groupBy('booking.booking_status')
            ->get();

        $countNew = 0;
        $countProcessing = 0;
        $countDone = 0;
        $countCancelled = 0;
        foreach($listBooking as $booking) {
            if ($booking->booking_status == 1) {
                $countNew = $booking->count_booking;
            }
            if ($booking->booking_status == 2) {
                $countProcessing = $booking->count_booking;
            }
            if ($booking->booking_status == 3) {
                $countDone = $booking->count_booking;
            }
            if ($booking->booking_status == 4) {
                $countCancelled = $booking->count_booking;
            }
        }
        array_push($result, $countNew);
        array_push($result, $countProcessing);
        array_push($result, $countDone);
        array_push($result, $countCancelled);

        return $result;
    }

    public function changeStatus($id, $status)
    {
        Booking::where('id_booking', $id)
            ->update([
                'booking_status' => $status,
            ]);
    }
    public function countAllBookingByStatus($status)
    {
        return Booking::where('booking_status', $status)->count();
    }
}
