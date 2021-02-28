<?php

use App\Model\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'name_post'         => 'Nhiệt độ dưới 0 độ C, rừng Y Tý tuyết rơi dày, Sa Pa có mưa',
            'url_post'          => 'nhiet-do-duoi-0-do-c-rung-y-ty-tuyet-roi-day-sapa-co-mua',
            'content_post'      => '<p>Ông Lưu Minh Hải - Giám đốc Đài khí tượng thuỷ văn tỉnh Lào Cai cho biết, không riêng Y Tý mà Sa Pa cũng có tuyết. Tuy nhiên, tuyết chỉ rơi ở khu vực từ đèo Ô Quý Hồ lên tới đỉnh Fansipan. Tuyết rơi hầu khắp ở khu vực này, tuy nhiên mật độ không dày.</p>

<p>"Tại đèo Ô Quý Hồ tuyết rơi nhẹ hơn khu vực xã Y Tý của huyện Bát Xát, tỉnh Lào Cai", ông Lưu Minh Hải nhấn mạnh.</p>

<p>Cũng theo ông Hải cho biết, ở trung tâm thị trấn Sa Pa nhiệt độ khoảng -2,1 độ C tuy nhiên chỉ có băng giá. Vì tại trung tâm Sa Pa đang có mưa và mây mù nên không xảy ra hiện tượng tuyết rơi.</p>

<p>Tuyết rơi tạo ra hiện tượng thiên nhiên kỳ thú, tuy nhiên bông tuyết rơi bám vào cây cối và đặc biệt là hoa màu sẽ gây hư hỏng, làm thiệt hại kinh tế của người dân, theo lời ông Hải.</p>

<p>Dự báo đêm và rạng sáng mai, mưa tuyết sẽ xuất hiện mạnh hơn và tại thị trấn Sa Pa cũng như dãy Hoàng Liên Sơn mưa tuyết sẽ lan toả xuống vùng thấp. Khi đó, lòng thị trấn Sa Pa cũng sẽ có tuyết rơi.</p>

',
            'date_post'         => '2021-01-10',
            'thumbnail_post'    => 'nhiet-do-duoi-0-do-c-rung-y-ty-tuyet-roi-day-sapa-co-mua-thumbnail.jpg',
            // 'id_cat'            => 1,
            'enable_post'       => 1,
        ]);

        Post::create([
            'name_post'         => 'Lào Cai: Sẽ xử lý trường hợp găm hàng, đẩy giá thịt lợn vào dịp Tết',
            'url_post'          => 'lao-cai-se-xu-ly-truong-hop-gam-hang-day-gia-thit-lon-vao-dip-tet',
            'content_post'      => '<p>Ông Đỗ Hồng Quân - Trưởng Phòng NNPT-NT huyện Bảo Thắng (Lào Cai) cho biết, sau khi khống chế dịch tả lợn Châu Phi, huyện bám sát chỉ đạo của tỉnh để khuyến cáo người dân tổ chức tái đàn, tăng đàn, phát triển chăn nuôi theo hướng an toàn sinh học nên kịp thời khôi phục tổng đàn. Tổng đàn lợn trên địa bàn huyện là hơn 150.000 con. Có thể cung ứng ra thị trường 2.050 tấn thịt lợn vào dịp Tết Nguyên đán 2021.</p>

<p>"Huyện Bảo Thắng chỉ đạo các xã, thị trấn và các cơ quan chuyên môn tuyên truyền, hướng dẫn người chăn nuôi tổ chức tái đàn, vừa đảm bảo yêu cầu phòng, chống dịch, vừa cân đối cung - cầu", ông Quân nói.</p>

<p>Hợp tác xã chăn nuôi Quý Hiền (huyện Bảo Thắng) - cơ sở chăn nuôi có quy mô lớn nhất tỉnh, do chủ động khoanh vùng, xử lý và dập dịch triệt để nên hợp tác xã không bị thiệt hại do dịch tả lợn Châu Phi. Đặc biệt, hợp tác xã áp dụng phương pháp chăn nuôi an toàn sinh học nên duy trì khoảng 6.000 con lợn thịt cung ứng cho thị trường.</p>

<p>Ông Lê Mạnh Quý - Giám đốc Hợp tác xã Chăn nuôi Quý Hiền cho biết, sản phẩm thịt lợn của hợp tác xã đang không đủ cung ứng cho thị trường trong tỉnh Lào Cai. Từ ngày 15 tháng Chạp, dự kiến nhu cầu thịt lợn tăng khoảng 30 - 40% so với ngày thường, vì vậy giá thịt sẽ tăng. Tuy nhiên, hợp tác xã sẽ duy trì mức giá ổn định để giữ thương hiệu.</p>

<p>Còn tại huyện Văn Bàn, người chăn nuôi áp dụng các biện pháp kỹ thuật về giống, thức ăn chăn nuôi và quy trình chăm sóc, nuôi dưỡng để kịp tái đàn, cung cấp thịt lợn cho thị trường.</p>

',
            'date_post'         => '2021-01-11',
            'thumbnail_post'    => 'lao-cai-se-xu-ly-truong-hop-gam-hang-day-gia-thit-lon-vao-dip-tet-thumbnail.jpg',
            // 'id_cat'            => 1,
            'enable_post'       => 1,

        ]);

        Post::create([
            'name_post'         => 'Nhân bản vô tính lợn rừng - mũi tên trúng hai đích của Trung Quốc',
            'url_post'          => 'nhan-ban-vo-tinh-lon-rung-mui-ten-trung-hai-dich-cua-trung-quoc',
            'content_post'      => '<p>Cơ sở nhân bản vô tính lợn rừng ở Hồ Bắc với chức năng chọn tạo- nhân giống vừa để bảo vệ nguồn gen lợn rừng bản địa vừa tạo thêm nguồn cung thịt mới.</p>

<p>Theo đó, xa hơn cơ sở nghiên cứu giống tại miền trung Trung Quốc này còn tiến đến mục tiêu phá vỡ thế độc quyền về giống lợn của nước ngoài cũng như tham vọng xoay chuyển cục diện ngành công nghiệp thịt lợn của Trung Quốc ngày một trở nên bớt lệ thuộc.</p>
',
            'date_post'         => '2021-01-12',
            'thumbnail_post'    => 'nhan-ban-vo-tinh-lon-rung-mui-ten-trung-hai-dich-cua-trung-quoc-thumbnail.jpg',
            // 'id_cat'            => 1,
            'enable_post'       => 1,

        ]);
    }
}
