@extends("admin.index")

@section("content")
<div class="content">
    <div id="loading" style="display:none;position: absolute;width: 100%;height: 100%;top: 0;left: 0;right: 0;bottom: 0;
    background-color: rgba(255,255,255,0.6);z-index: 999;cursor: pointer;">
        <img src="{{ asset('/admin/assets/img/ajax-loading.gif') }}"style="padding-top:30%; padding-left:45%">
    </div>

    <div class="container-fluid">
        <div class="row">
            <?php
                $count = 1;
                $color = 'card-header-warning';
                $icon = 'equalizer';
                $status = 'mới';
            ?>

            @foreach($countBooking as $booking)

            <?php
                switch ($count) {
                    case "1":
                        $color = "card-header-warning";
                        $icon = 'add_circle_outline';
                        $status = 'mới';
                        break;
                    case "2":
                        $color = 'card-header-rose';
                        $icon = 'fast_forward';
                        $status = 'đang xử lý';
                        break;
                    case "3":
                        $color = 'card-header-success';
                        $icon = 'done';
                        $status = 'hoàn thành';
                        break;
                    case "4":
                        $color = 'card-header-info';
                        $icon = 'cancel';
                        $status = 'hủy bỏ';
                        break;
                    default:
                        $color = 'card-header-warning';
                        $icon = 'add_circle_outline';
                        $status = 'mới';
                }

                if ($count == 4)
                {
                    $count = 1;
                }
                else
                {
                    $count++;
                }
            ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header {{$color}} card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">{{$icon}}</i>
                        </div>
                        <p class="card-category">Đơn hàng {{$status}}</p>
                        <h3 class="card-title">{{$booking}}</h3>
                    </div>
                    <div class="card-footer">
                        <!-- <div class="stats">
                            <i class="material-icons text-danger">search</i>
                            <a href="">Danh sách tất cả sản phẩm</a>
                        </div> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    <form action="{{route('booking-index')}}" method="GET">
    {!! csrf_field() !!}
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-text">
                        <div class="card-icon">
                        <i class="material-icons">library_books</i>
                        </div>
                        <h4 class="card-title">Tìm kiếm</h4>
                    </div>
                    <div class="card-body row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" name="code_booking" id="code_booking" class="form-control" placeholder="Mã đơn hàng">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="dropdown bootstrap-select show-tick">
                                <select class="selectpicker" name="year" id="year" data-style="select-with-transition" title="Năm">
                                    <option value="all">Tất cả năm</option>
                                    @for($i=2015;$i<=$currentyear;$i++)
                                    <option value="{{$i}}" <?php echo (isset($_GET['year']) && $_GET['year'] == $i) ? 'selected' : '' ?>>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="dropdown bootstrap-select show-tick">
                                <select class="selectpicker" name="month" id="month" data-style="select-with-transition" title="Tháng">
                                    <option value="all">Tất cả tháng</option>
                                    @for($i=1;$i<=12;$i++)
                                    <option value="{{$i}}" <?php echo (isset($_GET['month']) && $_GET['month'] == $i) ? 'selected' : '' ?>>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="dropdown bootstrap-select show-tick">
                                <select class="selectpicker" name="status" id="status" data-style="select-with-transition" title="Tình trạng" data-size="7" tabindex="-98">
                                    <option value="1" <?php echo (isset($_GET['status']) && $_GET['status'] == 1) ? 'selected' : '' ?>>Mới</option>
                                    <option value="2" <?php echo (isset($_GET['status']) && $_GET['status'] == 2) ? 'selected' : '' ?>>Đang xử lý</option>
                                    <option value="3" <?php echo (isset($_GET['status']) && $_GET['status'] == 3) ? 'selected' : '' ?>>Hoàn thành</option>
                                    <option value="4" <?php echo (isset($_GET['status']) && $_GET['status'] == 4) ? 'selected' : '' ?>>Hủy bỏ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="dropdown bootstrap-select show-tick">
                                <select class="selectpicker" name="newold" id="newold" data-style="select-with-transition" title="Thời gian" data-size="7" tabindex="-98">
                                    <option value="desc" <?php echo (isset($_GET['newold']) && $_GET['newold'] == 'desc') ? 'selected' : '' ?>>Mới nhất </option>
                                    <option value="asc" <?php echo (isset($_GET['newold']) && $_GET['newold'] == 'asc') ? 'selected' : '' ?>>Cũ nhất</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="dropdown bootstrap-select show-tick">
                                <button class="btn btn-primary"><i class="fa fa-search"></i> Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title ">Danh sách đơn hàng</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th class="text-center" style="width: 10%">Booking Code</th>
                                        <th class="text-center" style="width: 10%">Ngày đặt</th>
                                        <th class="text-center" style="width: 10%">Giá bán</th>
                                        <th class="th-description" style="width: 10%">Trạng thái</th>
                                        <th style="width: 10%">Chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listBooking as $booking)
                                    <tr>
                                        <td class="text-center">{{ $booking->code_booking }}</td>
                                        <td class="text-center">{{ $booking->created_at }}</td>
                                        <td class="text-center">{{ $booking->amount_net }}</td>
                                        <td>
                                            @if ($booking->booking_status == 1)
                                                Mới
                                            @elseif ($booking->booking_status == 2)
                                                Đang xử lý
                                            @elseif ($booking->booking_status == 3)
                                                Hoàn thành
                                            @else
                                                Hủy bỏ
                                            @endif
                                        </td>
                                        <td class="td-actions">
                                            <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" onclick="window.location = '{{ route('booking-detail', $booking->id_booking) }}'">
                                                <i class="material-icons">remove_red_eye</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>

            </div>
        </div>
        {!! $listBooking->links('pagination::bootstrap-4') !!}
    </div>
</div>

<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("#datepicker1").datetimepicker();
    });
</script> -->

<script type="text/javascript">
$(document).ready(function () {
    $(document).ajaxStart(function () {
        $("#loading").show();
    }).ajaxStop(function () {
        $("#loading").hide();
    });
});
function edit_category_ajax(id_post)
{
    var idcategory = "id_category" + id_post;
    var e = document.getElementById(idcategory);
    var id_category = e.options[e.selectedIndex].value;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type:'POST',
        dataType: 'JSON',
        url: '<?php echo route('posts-change-category-ajax'); ?>',
        data:{
            id_category:id_category,
            id_post:id_post
        },
        success:function(data){
            alert('Cập nhật thành công!');
        },
        error:function(xhr, data){
            console.log(xhr);
        }
    });
}
</script>

<!-- Fix images product size -->
<style>
    .img-container img {
        width: 70%;
    }

    @media (max-width: 700px) {
        .img-container img {
            width: 100%;
        }
    }
</style>
@stop
