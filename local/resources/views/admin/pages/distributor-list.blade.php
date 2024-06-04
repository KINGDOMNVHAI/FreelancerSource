@extends("admin.index")

@section("content")

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="POST" action="{{route('product-index')}}">
                    <div class="card-header card-header-rose card-header-text">
                        <div class="card-text">
                            <h4 class="card-title">Tìm nhà cung cấp</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        {{ csrf_field() }}
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Tên nhà cung cấp</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="keyword" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Giá</label>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="minPrice" class="form-control" min="0" placeholder="Thấp nhất">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="maxPrice" class="form-control" min="0" placeholder="Cao nhất">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-md-4 col-sm-3">
                                <select class="selectpicker" data-style="select-with-transition"  title="To Price" data-size="7">
                                    <option value="desc">From high</option>
                                    <option value="asc">From low </option>
                                </select>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-fill btn-rose" value="Tìm kiếm" />
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title ">Danh sách nhà cung cấp</h4>
                    </div>

                    @if ($listProduct == null)

                    <div class="card-body">
                        <p>Không có nhà cung cấp nào</p>
                    </div>

                    @else

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th class="text-center" style="width: 10%">ID nhà cung cấp</th>
                                        <th style="width: 30%">Tên nhà cung cấp</th>
                                        <th class="text-center" style="width: 20%">Số loại sản phẩm cung cấp</th>
                                        <th>Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listProduct as $product)
                                    <tr>
                                        <td class="text-center">{{$product->id_product}}</td>
                                        <td>
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
                                        <td>{{$product->name_cat_product}}</td>
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

                        {!! $listProduct->links('pagination::bootstrap-4') !!}
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
