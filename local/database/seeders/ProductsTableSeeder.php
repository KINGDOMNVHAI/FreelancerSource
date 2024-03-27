<?php
namespace Database\Seeders;

use App\Models\Discount;
use App\Models\Products;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i=1;
        Products::create([
            'name_product' => 'Dạy con làm giàu',
            'url_product' => 'day-con-lam-giau',
            'info_product' => 'Dạy con làm giàu',
            'present_product' => 'Một quyển sách luôn nằm trong top Best Seller của tác giả Robert T Kiyosaki.
',
            'content_product' => 'Mô tả
',
            'thumbnail_product' => 'day-con-lam-giau-1.jpg',
            'img_product_1' => 'day-con-lam-giau-1.jpg',
            'img_product_2' => 'day-con-lam-giau-2.jpg',
            'img_product_3' => 'day-con-lam-giau-3.jpg',
            'id_cat_product' => CATEGORY_KINH_TE,
            'enable_product' => 1,
            'price_product' => 75000,
            'unit_product' => 'Quyển',
            'popular' => 1,
        ]);

        Discount::create([
            'id_product' => $i,
            'price_discount' => 0,
            'type_discount' => '%',
            'start_date' => '2022-07-18',
            'end_date' => null,
            'enable_discount' => 0,
        ]);

        $i++;
        Products::create([
            'name_product' => 'Kinh doanh vì cộng đồng',
            'url_product' => 'kinh-doanh-vi-cong-dong-chia-khoa-cho-xa-hoi-moi',
            'info_product' => 'Kinh doanh vì cộng đồng',
            'present_product' => '<p></p>
',
            'content_product' => 'Mô tả
',
            'thumbnail_product' => 'kinh-doanh-vi-cong-dong-chia-khoa-cho-xa-hoi-moi-1.jpg',
            'img_product_1' => 'kinh-doanh-vi-cong-dong-chia-khoa-cho-xa-hoi-moi-1.jpg',
            'id_cat_product' => CATEGORY_KINH_TE,
            'enable_product' => 1,
            'price_product' => 89000,
            'unit_product' => 'Quyển',
            'popular' => 1,
        ]);

        Discount::create([
            'id_product' => $i,
            'price_discount' => 0,
            'type_discount' => '%',
            'start_date' => '2022-07-18',
            'end_date' => null,
            'enable_discount' => 0,
        ]);

        $i++;
        Products::create([
            'name_product' => 'Khoa học thần kinh dành cho các nhà lãnh đạo',
            'url_product' => 'khoa-hoc-than-kinh-danh-cho-cac-nha-lanh-dao',
            'info_product' => 'Khoa học thần kinh dành cho các nhà lãnh đạo',
            'present_product' => '<p></p>
',
            'content_product' => '
',
            'thumbnail_product' => 'khoa-hoc-than-kinh-danh-cho-cac-nha-lanh-dao-1.jpg',
            'img_product_1' => 'khoa-hoc-than-kinh-danh-cho-cac-nha-lanh-dao-1.jpg',
            'id_cat_product' => CATEGORY_KINH_TE,
            'enable_product' => 1,
            'price_product' => 160000,
            'unit_product' => 'Quyển',
            'popular' => 1,
        ]);

        Discount::create([
            'id_product' => $i,
            'price_discount' => 0,
            'type_discount' => '%',
            'start_date' => '2022-07-18',
            'end_date' => null,
            'enable_discount' => 0,
        ]);

        $i++;
        Products::create([
            'name_product' => 'Lãnh đạo bằng lòng biết ơn',
            'url_product' => 'lanh-dao-bang-long-biet-on',
            'info_product' => 'Lãnh đạo bằng lòng biết ơn',
            'present_product' => '<p></p>
',
            'content_product' => '
',
            'thumbnail_product' => 'lanh-dao-bang-long-biet-on-1.jpg',
            'img_product_1' => 'lanh-dao-bang-long-biet-on-1.jpg',
            'id_cat_product' => CATEGORY_KINH_TE,
            'enable_product' => 1,
            'price_product' => 120000,
            'unit_product' => 'Quyển',
            'popular' => 1,
        ]);

        Discount::create([
            'id_product' => $i,
            'price_discount' => 0,
            'type_discount' => '%',
            'start_date' => '2022-07-18',
            'end_date' => null,
            'enable_discount' => 0,
        ]);

        $i++;
        Products::create([
            'name_product' => 'Nơi làm việc tuyệt vời cho tất cả',
            'url_product' => 'noi-lam-viec-tuyet-voi-cho-tat-ca',
            'info_product' => 'Nơi làm việc tuyệt vời cho tất cả',
            'present_product' => '<p></p>
',
            'content_product' => '
',
            'thumbnail_product' => 'noi-lam-viec-tuyet-voi-cho-tat-ca-1.jpg',
            'img_product_1' => 'noi-lam-viec-tuyet-voi-cho-tat-ca-1.jpg',
            'id_cat_product' => CATEGORY_KINH_TE,
            'enable_product' => 1,
            'price_product' => 185000,
            'unit_product' => 'Quyển',
            'popular' => 1,
        ]);

        Discount::create([
            'id_product' => $i,
            'price_discount' => 0,
            'type_discount' => '%',
            'start_date' => '2022-07-18',
            'end_date' => null,
            'enable_discount' => 0,
        ]);

        $i++;
        Products::create([
            'name_product' => 'Inuyasha tập 1',
            'url_product' => 'inuyasha-tap-1',
            'info_product' => 'Inuyasha tập 1',
            'present_product' => '<p></p>
',
            'content_product' => '
',
            'thumbnail_product' => 'inuyasha-tap-1-1.jpg',
            'img_product_1' => 'inuyasha-tap-1-1.jpg',
            'img_product_2' => 'inuyasha-tap-1-2.jpg',
            'img_product_3' => 'inuyasha-tap-1-3.jpg',
            'id_cat_product' => CATEGORY_MANGA,
            'enable_product' => 1,
            'price_product' => 75000,
            'unit_product' => 'Quyển',
            'popular' => 1,
        ]);

        Discount::create([
            'id_product' => $i,
            'price_discount' => 0,
            'type_discount' => '%',
            'start_date' => '2022-07-18',
            'end_date' => null,
            'enable_discount' => 0,
        ]);






    }
}
