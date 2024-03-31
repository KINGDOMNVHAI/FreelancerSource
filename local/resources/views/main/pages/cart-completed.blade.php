@extends('main.master-main')

@section('content-head')

@endsection

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Hoàn tất</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Trang chủ</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Đặt hàng thành công</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Checkout Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-6">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Thông tin</h4>
                </div>
                <div class="card-body">
                    <h5 class="font-weight-medium mb-3">Địa chỉ thanh toán</h5>
                    <div class="row">
                        <div class="col-md-10 form-group">
                            <p><b>Tên:</b> {{$infoBooking->fullname}}</p>
                            <p><b>Email:</b> {{$infoBooking->email}}</p>
                            <p><b>Số điện thoại:</b> {{$infoBooking->phone}}</p>
                            <p><b>Địa chỉ:</b> {{$infoBooking->address}}</p>
                        </div>
                    </div>
                    <hr class="mt-0">
                    <div class="row">
                        <div class="col-md-10 form-group">
                            <p><b>Mã đơn hàng:</b> {{$infoBooking->code_booking}}</p>
                            <p><b>Phương thức thanh toán:</b> direct</p>
                        </div>
                    </div>
                </div>
            </div>
            <p>Email đã được gửi. Hãy kiểm tra đơn hàng của bạn.</p>
        </div>
        <div class="col-lg-6">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                </div>
                <div class="card-body">
                    <h5 class="font-weight-medium mb-3">Sản phẩm</h5>
                    @foreach($listProduct as $product)
                    <div class="d-flex justify-content-between">
                        <p>{{$product->name_product}}</p>
                        <p>{{$product->price_net}} VND</p>
                    </div>
                    @endforeach
                    <hr class="mt-0">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Tổng giá tiền sản phẩm</h6>
                        <h6 class="font-weight-medium">{{$infoBooking->amount_sale}}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">{{SHIPPING_PRICE_TEXT}} VND</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Tổng cộng</h5>
                        <h5 class="font-weight-bold">{{$infoBooking->amount_net}} VND</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->

@endsection
