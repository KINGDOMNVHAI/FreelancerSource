@extends("admin.index")

@section("content")

<div class="content">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <?php
                $count = 1;
                $color = 'card-header-warning';
                $icon = 'equalizer';
                ?>

                @foreach($categories as $category)

                    <?php
                    switch ($count) {
                        case "1":
                            $color = "card-header-warning";
                            $icon = 'equalizer';
                            break;
                        case "2":
                            $color = 'card-header-rose';
                            $icon = 'skip_next';
                            break;
                        case "3":
                            $color = 'card-header-success';
                            $icon = 'videogame_asset';
                            break;
                        case "4":
                            $color = 'card-header-info';
                            $icon = 'mouse';
                            break;
                        default:
                            $color = 'card-header-warning';
                            $icon = 'equalizer';
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
                                    <i class="material-icons"></i>
                                </div>
                                <p class="card-category">{{$category->name_cat_product}}</p>
                                <h3 class="card-title">{{$category->count_product}}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-danger">search</i>
                                    <a href="{{route('post-index')}}?&name_detailpost=&year=&month=&newold=&idCat={{$category->id_cat_product}}">Sô lượng sản phẩm</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">equalizer</i>
                            </div>
                            <p class="card-category">Tổng sản phẩm</p>
                            <h3 class="card-title">{{$countProducts}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">search</i>
                                <a href="{{route('product-index')}}">Danh sách sản phẩm</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">account_balance_wallet</i>
                            </div>
                            <p class="card-category">Tổng chuyên mục</p>
                            <h3 class="card-title">{{$countCategory}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">search</i>
                                <a href="{{route('category-index')}}">Danh sách chuyên mục</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title ">Thống kê hóa đơn</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th class="text-center" style="width: 40%">Trạng thái hóa đơn</th>
                                            <th class="text-center">Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">Mới tạo</td>
                                            <td class="text-center">{{$countBookingNew}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Đang xử lý<section></section></td>
                                            <td class="text-center">{{$countBookingProcessing}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Đã hoàn thành</td>
                                            <td class="text-center">{{$countBookingDone}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Bị hủy</td>
                                            <td class="text-center">{{$countBookingCancel}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@stop
