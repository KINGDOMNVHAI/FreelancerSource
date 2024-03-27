@extends("admin.index")

@section('content-head')

@endsection

@section("content")

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="id_booking" class="form-control" value="{{ $booking->id_booking }}">
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        {{-- <div class="card-icon">
                            <i class="material-icons">contacts</i>
                        </div> --}}
                        <h4 class="card-title">Thông tin</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <label class="col-md-1 col-form-label">Booking Code</label>
                            <div class="col-md-10">
                                <div class="form-group has-default">
                                    <input type="text" name="code_booking" class="form-control" placeholder="Tên bài viết" value="{{ $booking->code_booking }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Ngày đặt</label>
                            <div class="col-md-10">
                                <input type="text" name="created_at" class="form-control" placeholder="Tên bài viết" value="{{ $booking->created_at }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th class="text-center" style="width: 10%">Tên sản phẩm</th>
                                    <th class="text-center" style="width: 10%">Hình ảnh</th>
                                    <th class="text-center" style="width: 10%">Ngày đặt</th>
                                    <th class="text-center" style="width: 10%">Giá bán</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listBookingDetail as $booking)
                                <tr>
                                    <td>{{ $booking->name_product }}</td>
                                    <td class="text-center">
                                        @if (strlen($booking->thumbnail_product) <= 4)
                                        <img src="{{ asset('admin/assets/img/image_placeholder.jpg') }}" alt="{{$booking->name_product}}" width="60%">
                                        @else
                                        <img src="{{asset('upload/images/thumbnail/products/' . $booking->thumbnail_product)}}" alt="{{$booking->name_product}}" width="60%">
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $booking->created_at }}</td>
                                    <td class="text-center">{{ $booking->price_net }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
