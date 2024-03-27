<?php
namespace Database\Seeders;

use App\Models\CategoryProduct;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryProduct::create([
            'name_cat_product' => 'Ngoại ngữ',
            'url_cat_product' => CATEGORY_URL_NGOAI_NGU,
            'thumbnail_cat_product' => 'ngoai-ngu.jpg',
            'enable_cat_product' => true,
        ]);

        CategoryProduct::create([
            'name_cat_product' => 'Tiếng Anh',
            'url_cat_product' => CATEGORY_URL_TIENG_ANH,
            'thumbnail_cat_product' => 'ngoai-ngu.jpg',
            'id_parent' => 1,
            'enable_cat_product' => true,
        ]);

        CategoryProduct::create([
            'name_cat_product' => 'Tiếng Nhật',
            'url_cat_product' => CATEGORY_URL_TIENG_NHAT,
            'thumbnail_cat_product' => 'ngoai-ngu.jpg',
            'id_parent' => 1,
            'enable_cat_product' => true,
        ]);

        CategoryProduct::create([
            'name_cat_product' => 'Kinh tế',
            'url_cat_product' => CATEGORY_URL_KINH_TE,
            'thumbnail_cat_product' => 'kinh-te.jpg',
            'enable_cat_product' => true,
        ]);

        CategoryProduct::create([
            'name_cat_product' => 'Manga',
            'url_cat_product' => CATEGORY_URL_MANGA,
            'thumbnail_cat_product' => 'manga.jpg',
            'enable_cat_product' => true,
        ]);

        CategoryProduct::create([
            'name_cat_product' => 'Văn phòng phẩm',
            'url_cat_product' => CATEGORY_URL_VAN_PHONG_PHAM,
            'thumbnail_cat_product' => 'van-phong-pham.jpg',
            'enable_cat_product' => true,
        ]);
    }
}
