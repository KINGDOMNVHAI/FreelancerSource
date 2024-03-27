<?php
namespace App\Services;

use Illuminate\Support\ServiceProvider;
use App\Models\Categories;
use App\Models\Discount;
use App\Models\ProductCategory;
use App\Models\Products;
use App\Ultis\StringUltis;
use DB;

class ProductService extends ServiceProvider
{
    public function __construct()
    {

    }

    public function getProduct($urlProduct)
    {
        $result = [];
        $result = Products::join('discount', 'products.id_product', '=', 'discount.id_product')
            ->join('category_product', 'category_product.id_cat_product', '=', 'products.id_product')
            ->where('enable_product', true)
            ->where('url_product', $urlProduct)
            ->first();

        if ($result != null) {
            $result['result_discount'] = null;
            if ($result['enable_discount'] == true && $result['type_discount'] == '%') {
                $result['result_discount'] = $result['price_product'] - ($result['price_product'] * $result['price_discount'] / 100);
            }
        }
        return $result;
    }

    public function getProductByID($idProduct)
    {
        $result = [];
        $result = Products::join('discount', 'products.id_product', '=', 'discount.id_product')
            ->join('product_category', 'products.id_product', '=', 'product_category.id_product')
            ->join('categories', 'product_category.id_category', '=', 'categories.id_cat')
            ->where('enable_product', true)
            ->where('products.id_product', $idProduct)
            ->first();

        if ($result != null) {
            $result['result_discount'] = null;
            if ($result['enable_discount'] == true && $result['type_discount'] == '%') {
                $result['result_discount'] = $result['price_product'] - ($result['price_product'] * $result['price_discount'] / 100);
            }
        }
        return $result;
    }

    public function getProductPopular()
    {
        return Products::where('enable_product', ENABLE)
            ->where('popular', 1)
            ->limit(config('limit.12'))
            ->get();
    }

    public function getProductRandom($limit)
    {
        return Products::where('enable_product', ENABLE)
            ->limit($limit)
            ->orderBy(DB::raw('RAND()'))
            ->get();
    }

    public function getProductByCategory($idCat)
    {
        $query = Products::join('product_category', 'products.id_product', '=', 'product_category.id_product')
            ->join('categories', 'product_category.id_category', '=', 'categories.id_cat')
            ->select('products.*',
                'product_category.*',
                'categories.id_cat',
                'categories.url_cat',
                'categories.enable_cat',
            )
            ->where('products.enable_product', ENABLE)
            ->where('product_category.enable_product_category', ENABLE)
            ->where('categories.enable_cat', ENABLE);

        if ($idCat != null) {
            $query = $query->where('categories.id_cat', $idCat);
        }
        return $query->paginate(config('limit.12'));
    }

    public function searchProduct($filter)
    {
        // idCat là một mảng nên dùng IN (1,2,3,4,5)
        $query = Products::join('category_product', 'products.id_cat_product', '=', 'category_product.id_cat_product')
            ->select('products.*',
                'category_product.id_cat_product',
                'category_product.name_cat_product',
                'category_product.url_cat_product',
                'category_product.enable_cat_product',
            )
            ->where('products.enable_product', ENABLE)
            ->where('category_product.enable_cat_product', ENABLE)
        ;

        $keyword = null;
        $stringUltis = new StringUltis();
        if ($filter['keyword'] != null) {
            $keyword = $stringUltis->removeSpecialCharacter($filter['keyword']);
            $keyword = '%' . $keyword . '%';
            $query = $query->where('products.name_product', 'like', $keyword);
        }

        if ($filter['idCat'][0] != null) {
            $query = $query->whereIn('category_product.id_cat_product', $filter['idCat'][0]);
        }
        if ($filter['minPrice'] != null) {
            $query = $query->where('products.price_product', '>=', $filter['minPrice']);
        }
        if ($filter['maxPrice'] != null) {
            $query = $query->where('products.price_product', '<=', $filter['maxPrice']);
        }

        return $query->paginate(config('limit.12'));
    }

    /**
     * product insert or update
     *
     * @return void
     */
    public function insertUpdate($datas, $request, $uploadPath)
    {
        // File name mặc định không có tên
        $fileName = '';

        if ($request->hasFile('thumbnail'))
        {
            // Thư mục upload
            // $uploadPath = public_path('upload/images/thumbnail');
            $file = $request->file('thumbnail');

            // File name được gắn tên
            $fileName = $file->getClientOriginalName();

            // Đưa file vào thư mục
            $file->move(base_path($uploadPath), $fileName);
        } else {
            $fileName = $request->img;
        }

        // idUpdate là id sẽ nhập vào data
        $idUpdate = $datas['id_product'];

        // Case 1: trường hợp Insert, id null
        // Case 2: trường hợp Update, id có giá trị
        if ($idUpdate == null)
        {
            $query = Products::create([
                'name_product'      => $datas['name_product'],
                'url_product'       => $datas['url_product'],
                'info_product'      => $datas['info_product'],
                // 'date_post'       => date('Y-m-d'),
                'present_product'   => $datas['present_product'],
                'content_product'   => $datas['content_product'],
                'price_product'     => $datas['price_product'],
                'unit_product'      => $datas['unit_product'],
                'thumbnail_product' => $fileName, // Lấy tên file
                'id_cat_post'       => $datas['id_cat_post'],
                'enable_product'    => $datas['enable'],
            ]);
        }
        else
        {
            $query = Products::where('id_product', $idUpdate)
            ->update([
                'name_product'      => $datas['name_product'],
                'url_product'       => $datas['url_product'],
                'info_product'      => $datas['info_product'],
                // 'date_post'       => $datas['date_post'],
                'present_product'   => $datas['present_product'],
                'content_product'   => $datas['content_product'],
                'price_product'     => $datas['price_product'],
                'unit_product'      => $datas['unit_product'],
                'thumbnail_product' => $fileName,
                // 'id_cat_post'     => $datas['id_cat_post'],
                'enable_product'    => $datas['enable'],
            ]);
        }

        return $query;
    }
}
