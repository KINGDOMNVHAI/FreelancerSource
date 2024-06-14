<?php
namespace App\Services;

use App\Models\CategoryProduct;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\UserLinks;
use App\Models\WalkInGuest;
use App\Ultis\StringUltis;
use DB;

class DiscountService extends ServiceProvider
{
    public function __construct()
    {

    }

    public function getByIDProduct($idProduct)
    {
        return Discount::where('enable_discount', true)
            ->where('id_product', $idProduct)
            ->first();
    }

    public function insertUpdate($datas, $request, $uploadPath)
    {
        // idUpdate là id sẽ nhập vào data
        $idUpdate = $datas['id_product'];

        // Case 1: trường hợp Insert, id null
        // Case 2: trường hợp Update, id có giá trị
        if ($idUpdate == null || $idUpdate == 0)
        {
            $query = Discount::create([
                'id_product'        => $datas['id_product'],
                'price_discount'    => $datas['price_discount'],
                'type_discount'     => $datas['type_discount'],
                'start_date'        => $datas['start_date'],
                'end_date'          => $datas['end_date'],
                'enable_discount'   => $datas['enable']
            ]);
        }
        else
        {
            $query = Discount::where('id_discount', $idUpdate)
            ->update([
                'price_discount'    => $datas['price_discount'],
                'type_discount'     => $datas['type_discount'],
                'start_date'        => $datas['start_date'],
                'end_date'          => $datas['end_date'],
                'enable_discount'   => $datas['enable']
            ]);
        }

        return $query;
    }
}
