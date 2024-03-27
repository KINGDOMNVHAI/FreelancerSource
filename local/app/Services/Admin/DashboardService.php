<?php
namespace App\Services\Admin;

use App\Models\Posts;
use App\Models\Products;
use DB;
use Illuminate\Support\ServiceProvider;

class DashboardService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     *
     */
    public function analyticsPost()
    {
        $query =  Posts::select(
                'categories.id_cat',
                'categories.name_cat AS name_cat_post',
                'categories.url_cat' ,
                DB::raw('count(posts.id_cat_post) as count_post'),
                DB::raw('sum(posts.views) as view_post')
            )
            ->leftJoin('categories','posts.id_cat_post','categories.id_cat')
            ->groupBy('categories.id_cat', 'categories.name_cat', 'categories.url_cat', 'posts.id_cat_post')
            ->orderBy('posts.id_cat_post', 'ASC')
            ->get();

        return $query;
    }

    public function analyticsProduct()
    {
        $query =  Products::select(
                'category_product.id_cat_product',
                'category_product.name_cat_product',
                'category_product.url_cat_product' ,
                'products.id_cat_product' ,
                DB::raw('count(products.id_product) as count_product')
            )
            ->leftJoin('category_product','products.id_cat_product','category_product.id_cat_product')
            ->where('category_product.enable_cat_product', 1)
            ->where('category_product.id_parent', 0)
            ->groupBy('category_product.id_cat_product')
            ->get();

        return $query;
    }
}
