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

    public function listCategory($paginate, $enable)
    {
        $query = CategoryProduct::where('enable_cat_product', '=', $enable);

        if ($paginate == true) {
            return $query->paginate(LIMIT_12);
        }
        return $query->get();
    }

    public function listCategoryCheckParent($paginate, $enable, $parent)
    {
        $query = CategoryProduct::where('enable_cat_product', '=', $enable);

        if ($parent == true) {
            $query = $query->where('id_parent', '=', 0);
        } else {
            $query = $query->where('id_parent', '!=', 0);
        }
        if ($paginate == true) {
            return $query->paginate(LIMIT_12);
        }
        return $query->get();
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

    public function searchCategory($filter)
    {
        // idCat là một mảng nên dùng IN (1,2,3,4,5)
        $query = CategoryProduct::where('category_product.enable_cat_product', '=', $filter['enable'])
            ->select('category_product.id_cat_product',
                'category_product.name_cat_product',
                'category_product.url_cat_product',
                'category_product.enable_cat_product',
            )
        ;

        $keyword = null;
        $stringUltis = new StringUltis();
        if ($filter['keyword'] != null) {
            $keyword = $stringUltis->removeSpecialCharacter($filter['keyword']);
            $keyword = '%' . $keyword . '%';
            $query = $query->where('category_product.name_cat_product', 'like', $keyword);
        }

        return $query->paginate(LIMIT_12);
    }

    public function getCategory($urlCat)
    {
        return CategoryProduct::where('enable_cat_product', true)
            ->where('url_cat_product', $urlCat)
            ->first();
    }

    /**
     *
     *
     * @return void
     */
    public function insertUpdate($datas, $request, $uploadPath)
    {
        // File name mặc định không có tên
        // $fileName = '';

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
        $idUpdate = $datas['id_cat'];

        // Case 1: trường hợp Insert, id null
        // Case 2: trường hợp Update, id có giá trị
        if ($idUpdate == null || $idUpdate == 0)
        {
            $query = CategoryProduct::create([
                'name_cat_product'      => $datas['name_cat'],
                'url_cat_product'       => $datas['url_cat'],
                'id_parent'             => $datas['id_parent'],
                // 'thumbnail_cat'  => $fileName, // Lấy tên file
                'enable_cat_product'    => $datas['enable']
            ]);
        }
        else
        {
            $query = CategoryProduct::where('id_cat_product', $idUpdate)
            ->update([
                'name_cat_product'      => $datas['name_cat'],
                'url_cat_product'       => $datas['url_cat'],
                'id_parent'             => $datas['id_parent'],
                // 'thumbnail_cat'  => $fileName,
                'enable_cat_product'    => $datas['enable']
            ]);
        }

        return $query;
    }

    /**
     *
     *
     * @return void
     */
    public function changeEnable($idCat, $enable)
    {
        $query = CategoryProduct::where('id_cat_product', $idCat)
        ->update([
            'enable_cat_product' => $enable
        ]);

        return $query;
    }
}
