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
            'thumbnail_product' => 'day-con-lam-giau-thumbnail.jpg',
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
            'thumbnail_product' => 'kinh-doanh-vi-cong-dong-chia-khoa-cho-xa-hoi-moi-thumbnail.jpg',
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
            'thumbnail_product' => 'khoa-hoc-than-kinh-danh-cho-cac-nha-lanh-dao-thumbnail.jpg',
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
            'thumbnail_product' => 'lanh-dao-bang-long-biet-on-thumbnail.jpg',
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
            'thumbnail_product' => 'noi-lam-viec-tuyet-voi-cho-tat-ca-thumbnail.jpg',
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
            'name_product' => 'Nhà quản lý cấp trung - Mắt xích sống còn của doanh nghiệp',
            'url_product' => 'nha-quan-ly-cap-trung-mat-xich-song-con-cua-doanh-nghiep',
            'info_product' => 'Nhà quản lý cấp trung',
            'present_product' => 'Đối với các nhà quản lý cấp trung, kiến thức và kỹ năng quản lý vững vàng là điều cần thiết, bao gồm các kỹ năng điều hành giao tiếp hiệu quả, tinh thần trách nhiệm và làm việc chuyên nghiệp, công bằng và hiệu quả, cùng với tính thực tế và khả năng ứng dụng cao.
',
            'content_product' => '<p>Nhà quản lý cấp trung đóng vai như một trụ cột vững chắc trong doanh nghiệp, không chỉ duy trì sự ổn định mà còn thúc đẩy sự phát triển bền vững của doanh nghiệp. Nhưng nó chỉ đúng với những nhà quản lý cấp trung xuất sắc, khi đã nắm vững được những kiến thức về quản lý và thực thi.</p>

<p>Một trong số những thiếu sót của những nhà quản lý cấp trung hiện nay là chưa nhận thức được tầm quan trọng của mình, chưa hiểu đúng vai trò của mình khi đứng giữa quản lý cấp cao và nhân viên của mình.</p>

<p>Với vai trò là nhà quản lý cấp trung, bạn có nhận ra tầm quan trọng của việc hiểu rõ công việc của các thành viên trong nhóm không?</p>

<p>Có hiểu rõ yêu cầu đặc biệt của mỗi vị trí trong bộ phận cần đáp ứng? Hiểu rõ thành viên mong muốn gì?</p>

<p>Tại sao luôn bất mãn khi được giao việc? hay tại sao các nhà quản lý cấp cao chưa hài lòng với bạn?</p>

<p>Vì sao họ muốn bạn phải phát huy nhiều hơn nữa trong quản lý?...</p>

<p>Trả lời tất cả các câu hỏi và khúc mắc qua cuốn sách “Nhà quản lý cấp trung - Mắt xích sống còn của doanh nghiệp”. Cuốn sách giúp bạn trở thành nhà quản lý cấp trung xuất sắc, không chỉ giúp cấp cao không còn lo lắng về sự thiếu hiệu quả trong thực hiện công việc mà còn biến những người quản lý cấp trung vươn tới đỉnh cao.</p>

<p>Đối với những nhà quản lý này, kiến thức và kỹ năng quản lý vững vàng là điều cần thiết, bao gồm các kỹ năng điều hành giao tiếp hiệu quả, tinh thần trách nhiệm và làm việc chuyên nghiệp, công bằng và hiệu quả, cùng với tính thực tế và khả năng ứng dụng cao.</p>

<p>Để đạt được điều này, các nhà quản lý cấp trung cần tham gia vào quá trình chuyển đổi kế hoạch thành hành động và biến hành động thành kết quả. Cuốn sách đưa ra tất cả mọi thứ mà các nhà quản lý cấp trung cần nắm rõ khi đứng ở vị trí trung gian, cung cấp tất cả những phương pháp, công cụ và tiêu chuẩn toàn diện để hướng dẫn đội ngũ quản lý.</p>

',
            'thumbnail_product' => 'nha-quan-ly-cap-trung-mat-xich-song-con-cua-doanh-nghiep-thumbnail.jpg',
            'img_product_1' => 'nha-quan-ly-cap-trung-mat-xich-song-con-cua-doanh-nghiep-1.jpg',
            'id_cat_product' => CATEGORY_KINH_TE,
            'enable_product' => 1,
            'price_product' => 190000,
            'unit_product' => 'Quyển',
            'popular' => 1,
        ]);

        Discount::create([
            'id_product' => $i,
            'price_discount' => 0,
            'type_discount' => '%',
            'start_date' => '2022-07-18',
            'end_date' => null,
            'enable_discount' => 1,
        ]);

        $i++;
        Products::create([
            'name_product' => 'Tư duy số',
            'url_product' => 'tu-duy-so',
            'info_product' => 'Tư duy số',
            'present_product' => '<p></p>
',
            'content_product' => 'Mô tả
',
            'thumbnail_product' => 'tu-duy-so-thumbnail.jpg',
            'img_product_1' => 'tu-duy-so-1.jpg',
            'img_product_2' => 'tu-duy-so-2.jpg',
            'id_cat_product' => CATEGORY_KINH_TE,
            'enable_product' => 1,
            'price_product' => 255000,
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
            'name_product' => 'Giao tiếp EQ cao',
            'url_product' => 'giao-tiep-eq-cao',
            'info_product' => 'Giao tiếp EQ cao',
            'present_product' => '<p></p>
',
            'content_product' => 'Mô tả
',
            'thumbnail_product' => 'giao-tiep-eq-cao-thumbnail.jpg',
            'img_product_1' => 'giao-tiep-eq-cao-1.jpg',
            'id_cat_product' => CATEGORY_KINH_TE,
            'enable_product' => 1,
            'price_product' => 100000,
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
            'name_product' => 'Cao thủ EQ - Trân lý trí, trọng xúc cảm',
            'url_product' => 'cao-thu-eq',
            'info_product' => 'Cao thủ EQ',
            'present_product' => '<p></p>
',
            'content_product' => 'Mô tả
',
            'thumbnail_product' => 'cao-thu-eq-thumbnail.jpg',
            'img_product_1' => 'cao-thu-eq-1.jpg',
            'id_cat_product' => CATEGORY_KINH_TE,
            'enable_product' => 1,
            'price_product' => 40000,
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
            'thumbnail_product' => 'inuyasha-tap-1-thumbnail.jpg',
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

        $i++;
        Products::create([
            'name_product' => 'Giấy Paper One A4 ĐL 70gsm',
            'url_product' => 'paper-one-a4-dl-70gsm',
            'info_product' => 'Giấy Paper One A4 ĐL 70gsm',
            'present_product' => '<p></p>
',
            'content_product' => '
',
            'thumbnail_product' => 'paper-one-a4-dl-70gsm-thumbnail.jpg',
            'img_product_1' => 'paper-one-a4-dl-70gsm-1.jpg',
            'img_product_2' => 'paper-one-a4-dl-70gsm-2.jpg',
            'img_product_3' => 'paper-one-a4-dl-70gsm-3.jpg',
            'id_cat_product' => CATEGORY_VAN_PHONG_PHAM,
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
