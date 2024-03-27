@extends("admin.index")

@section("content")

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">

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

                    @if ($listProduct == null)

                    <div class="card-body">
                        <p>Bạn không có sản phẩm nào</p>
                    </div>

                    @else

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th class="text-center" style="width: 10%">ID sản phẩm</th>
                                        <th class="text-center" style="width: 20%">Thumbnail</th>
                                        <th style="width: 20%">Tên sản phẩm</th>
                                        <th style="width: 20%">Giá</th>
                                        <th class="th-description" style="width: 20%">Thuộc gian hàng</th>
                                        <th style="width: 10%">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listProduct as $product)
                                    <tr>
                                        <td class="text-center">{{$product->id_product}}</td>
                                        <td class="text-center">
                                            @if (strlen($product->thumbnail_product) <= 4)
                                            <div class="img-container">
                                                <img src="{{ asset('admin/assets/img/image_placeholder.jpg') }}" alt="{{$product->name_product}}" width="80%">
                                            </div>
                                            @else
                                            <div class="img-container">
                                                <img src="{{asset('upload/images/thumbnail/products/' . $product->thumbnail_product)}}" alt="{{$product->name_product}}">
                                            </div>
                                            @endif
                                        </td>
                                        <td>{{$product->name_product}}</td>
                                        <td>{{$product->price_product}}</td>
                                        <td>{{$product->name_cat}}</td>
                                        <td class="td-actions">
                                            <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" onclick="window.location = '{{ route('product-insert-update', $product->id_product) }}'">
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
