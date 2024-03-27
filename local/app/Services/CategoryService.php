<?php
namespace App\Services;

use App\Models\CategoryProduct;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\UserLinks;
use App\Models\WalkInGuest;
use App\Ultis\StringUltis;
use DB;

class CategoryService extends ServiceProvider
{
    public function __construct()
    {

    }

    public function listCategory($enable)
    {
        if ($enable == null) {
            $enable = true;
        }
        return CategoryProduct::where('enable_cat_product', $enable)->get();
    }

    public function listCategoryHaveCountProduct()
    {
        return CategoryProduct::join('products', 'products.id_cat_product', '=', 'category_product.id_cat_product')
            ->select(DB::raw('
                count(products.id_product) as count_product,
                category_product.id_cat_product,
                category_product.name_cat_product,
                category_product.url_cat_product,
                category_product.thumbnail_cat_product,
                category_product.enable_cat_product
            '))->where('category_product.enable_cat_product', true)
            ->where('products.enable_product', true)
            ->groupBy('category_product.id_cat_product')
            ->get();
    }

    public function getCategory($urlCat)
    {
        return CategoryProduct::where('enable_cat_product', true)
            ->where('url_cat_product', $urlCat)
            ->first();
    }

    /**
     * Insert Walk-In Guest
     *
     * @return array
     */
    public function insertWalkInGuest($request)
    {
        return WalkInGuest::insert([
            'name_wig' => $request->fullname,
            'country_wig' => $request->country,
            'email_wig' => $request->email,
            'phone_wig' => $request->phone,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * Insert Customer
     *
     * @return array
     */
    public function insertCustomer($request)
    {
        User::insert([
            'firstname' => $request->cfFirstName,
            'lastname' => $request->cfLastName,
            'username' => $request->cfUsername,
            'password' => md5($request->cfPassword),
            'gender' => $request->cfGender,
            'email' => $request->cfEmail,
            'phone' => $request->cfPhone,
            'country' => $request->cfCountry,
            'address' => $request->cfAddress,
            'enable_user' => true,

            'facebook' => $request->cfFacebook,
            'twitter' => $request->cfTwitter,
            'linkedin' => $request->cfLinkedin,
            'youtube' => $request->cfYouTube,

            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * Insert User Links
     *
     * @return array
     */
    public function insertUserLinks($id, $url)
    {
        UserLinks::insert([
            'id_user' => $id,
            'url_link' => $url,
            'enable_link' => true
        ]);
    }
}
