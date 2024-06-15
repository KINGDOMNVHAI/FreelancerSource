@extends('main.master-main')

@section('content-head')
<link rel="stylesheet" href="{{asset('frontend/css/home-grid.css')}}">
@endsection

@section('content')

@include('main.block.navbar-slider')

<!-- Shop Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-12">
            <!-- Price Start -->
            <div class="border-bottom mb-4 pb-4">
                <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                @include('main.block.form-search')
            </div>
            <!-- Price End -->
        </div>
        <!-- Shop Sidebar End -->

        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-12">
            <div class="row pb-3">
                <!-- <div class="col-12 pb-1">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="dropdown ml-4">
                            <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                        Sort by
                                    </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="#">Latest</a>
                                <a class="dropdown-item" href="#">Popularity</a>
                                <a class="dropdown-item" href="#">Best Rating</a>
                            </div>
                        </div>
                    </div>
                </div> -->

                @foreach($searchProduct as $product)
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{asset('/upload/images/thumbnail/products/' . $product->thumbnail_product)}}" alt="{{$product->name_product}}">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">{{$product->name_product}}</h6>
                            <div class="d-flex justify-content-center">
                                <h6>{{number_format($product->price_product, 0)}} VND</h6>
                                <!-- <h6 class="text-muted ml-2"><del>$123.00</del></h6> -->
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="{{route('detail-product', $product->url_product)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Giỏ hàng</a>
                        </div>
                    </div>
                </div>
                @endforeach

                @if ($notFound == false)
                    <div class="col-12 pb-1">
                        <div class="text-center mb-4">
                            <h2 class="section-title px-5"><span class="px-2">KHÔNG CÓ SẢN PHẨM</span></h2>
                        </div>
                    </div>
                @endif
                <div class="col-12 pb-1">
                    {!! $searchProduct->links('pagination::bootstrap-4') !!}
                    <!-- <nav aria-label="Page navigation">

                    </nav> -->
                </div>
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->

@endsection
