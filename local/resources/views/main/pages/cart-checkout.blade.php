@extends('main.master-main')

@section('content-head')

@endsection

@section('content')

@include('main.block.navbar')

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Giỏ hàng</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Trang chủ</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Giỏ hàng</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Checkout Start -->
@if($arrayCart != null)
<form action="{{route('cart-payment')}}" method="POST">
{{ csrf_field() }}
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8">

            <table class="table table-bordered text-center mb-4">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng giá</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @foreach($arrayCart as $cart)
                    <tr>
                        <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;">{{$cart['name_product']}}</td>
                        <td class="align-middle">{{$cart['price_product']}} VND</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" name="proQuantity[{!! $cart['id_product'] !!}]" class="form-control form-control-sm bg-secondary text-center" value="{{$cart['quantity']}}">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle"></td>
                        <td class="align-middle">
                            <div class="btn btn-sm btn-primary">
                                <i class="fa fa-times" onclick="removeProductCart({{$cart['id_product']}}, {{$cart['quantity']}})"></i>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mb-4">
                <h4 class="font-weight-semi-bold mb-4">Địa chỉ thanh toán (Billing Address)</h4>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Họ tên</label>
                        <input type="text" class="form-control" name="fullname" placeholder="John">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" placeholder="example@email.com">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control" name="phone" placeholder="+123 456 789">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="address" placeholder="123 Street">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Tổng đơn hàng</h4>
                </div>
                <div class="card-body">
                    <h5 class="font-weight-medium mb-3">Sản phẩm</h5>
                    <!-- <div class="d-flex justify-content-between">
                        <p></p>
                        <p></p>
                    </div> -->
                    <hr class="mt-0">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Tổng giá tiền sản phẩm</h6>
                        <h6 class="font-weight-medium">{{$total}}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Tiền ship</h6>
                        <h6 class="font-weight-medium">{{SHIPPING_PRICE_TEXT}} VND</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Tổng cộng</h5>
                        <h5 class="font-weight-bold">{{$total + SHIPPING_PRICE}} VND</h5>
                    </div>
                </div>
            </div>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Hình thức thanh toán</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="directcheck" value="directcheck" checked>
                            <label class="custom-control-label" for="directcheck">Thanh toán trực tiếp</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="banktransfer" value="banktransfer">
                            <label class="custom-control-label" for="banktransfer">Chuyển khoản</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <button type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Đặt hàng</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<!-- Checkout End -->

@else

<!-- Checkout Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Bạn chưa có sản phẩm</span></h2>
    </div>
</div>
<!-- Checkout End -->

<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Đề xuất</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        @foreach($listProductRandom as $product)
        <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('upload/images/products/' . $product->img_product_1)}}" alt="{{$product->name_product}}">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{$product->name_product}}</h6>
                    <div class="d-flex justify-content-center">
                        <h6>{{$product->price_product}} VND</h6><h6 class="text-muted ml-2"><del>{{$product->price_product}} VND</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
                    <!-- <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Giỏ hàng</a> -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Products End -->

@endif

<script>
function removeProductCart(idProduct, quantity) {
    console.log(quantity)
    console.log(proQuantity[quantity])

    // let quantity = Number(document.getElementById('quantity').value);
    // window.open("/bookstore/cart-add/" + id + "/" + quantity);
}


</script>

@endsection
