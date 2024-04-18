@extends("admin.index")

@section('content-head')

@endsection

@section("content")

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Thông tin đơn hàng
                        </h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="ml-5 col-md-6">
                                    <div class="form-group text-description">
                                        <p>Mã đơn hàng: {{ $booking->code_booking }}</p>
                                        @if ($booking->booking_status == 1)
                                        <p class="btn btn-success">Mới</p>
                                        @elseif ($booking->booking_status == 2)
                                        <p class="btn btn-success">Đang xử lý</p>
                                        @elseif ($booking->booking_status == 3)
                                        <p class="btn btn-success">Hoàn thành</p>
                                        @elseif ($booking->booking_status == 4)
                                        <p class="btn btn-success">Hủy bỏ</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="ml-5 col-md-11">
                                    <div class="form-group text-description">
                                        <table class="table">
                                            <tr>
                                                <td>Sản phẩm</td>
                                                <td class="text-center">Số lượng</td>
                                                <td class="text-right">Giá</td>
                                            </tr>
                                            @foreach ($listBookingDetail as $booking)
                                            <tr>
                                                <td>{{ $booking->name_product }}</td>
                                                <td class="text-center">{{ $booking->quantity }}</td>
                                                <td class="text-right">{{ $booking->price_net }}</td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td>Tiền ship</td>
                                                <td colspan="2" class="text-right">{{ $booking->shipping }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Tổng giá</b></td>
                                                <td colspan="2" class="text-right"><b>{{ $booking->amount_net }}</b></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    @if ($booking->booking_status == 1 || $booking->booking_status == 2)
                                    <a href="/bookstore/change-status/{{$booking->id_booking}}/4" class="btn btn-danger">
                                        <i class="material-icons">close</i> Hủy bỏ
                                    </a>
                                    @endif
                                </div>
                                <div class="col-md-6 text-right">

                                    @if ($booking->booking_status == 1)
                                    <a href="/bookstore/change-status/{{$booking->id_booking}}/2" class="btn btn-danger">
                                        <span class="btn-label">
                                            <i class="material-icons">fast_forward</i>
                                        </span>
                                        Đang xử lý
                                    </a>
                                    @elseif ($booking->booking_status == 2)
                                    <a href="/bookstore/change-status/{{$booking->id_booking}}/3" class="btn btn-danger">
                                        <span class="btn-label">
                                            <i class="material-icons">check</i>
                                        </span>
                                        Hoàn thành
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <img class="img" src="{{ asset('frontend/bookstore/img/user.png') }}" alt="{{ $booking->fullname }}" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $booking->fullname }}</h4>
                        <p class="card-description">
                            Email: {{ $booking->email }}<br>
                            Phone: {{ $booking->phone }}<br>
                            Address: {{ $booking->address }}<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function changeStatus(id, status) {
        window.open("/bookstore/change-status/" + id + "/" + status);
    }
</script>
@stop
