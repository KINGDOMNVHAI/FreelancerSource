<?php

use App\Model\Introduce;
use Illuminate\Database\Seeder;

class IntroduceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Introduce::create([
            'name_introduce'        => 'Vinaseed - cung cấp giải pháp bền vững',
            'url_introduce'         => 'vinaseed-cung-cap-giai-phap-ben-vung',
            'content1_introduce'    => '<p>Vinaseed là doanh nghiệp KHCN đầu tiên trong ngành giống cây trồng Việt Nam, tiên phong trong hoạt động nghiên cứu, ứng dụng và chuyển giao công nghệ với các giải pháp đột phá, đi trước và định hướng thị trường.</p>
<p>Hệ thống cơ sở hạ tầng phục vụ nghiên cứu hiện đại, đội ngũ chuyên gia hùng hậu, nhân sự trên 1000 lao động với 80% có trình độ đại học và trên đại học hoàn toàn làm chủ công nghệ chọn tạo giống tiên tiến trên thế giới, công nghệ sản xuất hạt lai, công nghệ sản xuất nông nghiệp 4.0.</p>',
            'content2_introduce'    => '<p>Xây dựng phương thức quản trị sản xuất nông nghiệp tiên tiến,  ứng dụng các giải pháp canh tác bền vững tiết kiệm tài nguyên, có truy xuất nguồn gốc, sử dụng các chế phẩm và thuốc BVTV có nguồn gốc sinh học thế hệ mới góp phần giảm hiệu ứng nhà kính, giảm tồn dư hóa chất và hàm lượng Nitorat trong sản phẩm, thực hiện cơ giới hóa trong sản xuất và chế biến.  Hỗ trợ các doanh nghiệp vừa và nhỏ, các HTX, hộ nông dân tham gia chuỗi liên kết sản xuất nông sản của Vinaseed để hình thành các vùng sản xuất nông nghiệp tập trung quy mô lớn, góp phần đem lại thu nhập ổn định cho người nông dân.</p>',
            'thumbnail_introduce'   => 'vinaseed-cung-cap-giai-phap-ben-vung-thumbnail.jpg',
            'enable_introduce'      => 1,
        ]);
    }
}
