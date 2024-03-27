@extends("admin.index")

@section("content")

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    @include('AdminPageViews.product.menu-button-product')
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title ">Danh sách sản phẩm</h4>
                    </div>

                    @if ($productDeletedListOfUserService[0] == null)

                    <div class="card-body">
                        <p>Bạn chưa xóa sản phẩm nào</p>
                    </div>

                    @else

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th class="text-center" style="width: 10%">ID sản phẩm</th>
                                        <th class="text-center" style="width: 20%">Thumbnail</th>
                                        <th style="width: 30%">Tên sản phẩm</th>
                                        <th class="th-description" style="width: 20%">Thuộc gian hàng</th>
                                        <th style="width: 10%">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productListOfUserService as $product)
                                    <tr>
                                        <td class="text-center">{{$product->product_id}}</td>
                                        <td class="text-center">
                                            @if (strlen($product->product_images) <= 4)
                                            <div class="img-container">
                                                <img src="{{ asset('public/FoodPage/upload/avatars/default/logo-default.jpg') }}" alt="..." width="80%">
                                            </div>
                                            @else
                                            <div class="img-container">
                                                <img src="{{ asset('upload/users/' . $product->user_id . '/product/' . $product->product_images) }}" alt="...">
                                            </div>
                                            @endif
                                        </td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->store_name}}r</td>
                                        <td class="td-actions">
                                            <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fix images product size -->
<style>
    .img-container img{width:70%;}
    @media (max-width: 700px) {
        .img-container img{width:100%;}
    }
</style>

@stop
