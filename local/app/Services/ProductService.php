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

    // join('discount', 'products.id_product', '=', 'discount.id_product')
    // join('category_product', 'category_product.id_cat_product', '=', 'products.id_product')
    public function getProductByURL($urlProduct)
    {
        $result = [];
        $result = Products::where('products.enable_product', true)
            ->where('products.url_product', '=', $urlProduct)
            ->first();

        if ($result != null) {
            $discount = Products::join('discount', 'products.id_product', '=', 'discount.id_product')
                ->where('products.url_product', '=', $urlProduct)
                ->first();

            if ($discount != null) {
                $result['result_discount'] = null;
                $result['enable_discount'] = $discount['enable_discount'];
                $result['type_discount'] = $discount['type_discount'];

                if ($result['enable_discount'] == true && $result['type_discount'] == '%') {
                    $result['result_discount'] = $result['price_product'] - ($result['price_product'] * $result['price_discount'] / 100);
                }
            }
        }
        return $result;
    }

    public function getProductByID($idProduct)
    {
        $result = [];
        $result = Products::join('discount', 'products.id_product', '=', 'discount.id_product')
            ->join('category_product', 'products.id_cat_product', '=', 'category_product.id_cat_product')
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
            ->limit(LIMIT_12)
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
        $query = Products::join('category_product', 'products.id_cat_product', '=', 'category_product.id_cat_product')
            ->select('products.*',
                'category_product.id_cat_product',
                'category_product.url_cat_product',
                'category_product.enable_cat_product',
            )
            ->where('products.enable_product', ENABLE)
            ->where('category_product.enable_cat_product', ENABLE);

        if ($idCat != null) {
            $query = $query->where('category_product.id_cat_product', $idCat);
        }
        return $query->paginate(LIMIT_8);
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

        return $query->paginate(LIMIT_8);
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
