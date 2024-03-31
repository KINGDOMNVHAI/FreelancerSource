<!doctype html>
<html lang="en">
  <head>
    <title>Xác nhận thanh toán</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 m-auto">
                <h3>Email xác nhận thanh toán</h3>
                <p>Xin chào, {{$infoBooking->fullname}}! Đây thông tin hóa đơn của bạn.</p>

                <ul>
                  <li>Mã hóa đơn: {{$infoBooking->code}}
                  <li>Tên người nhận: {{$infoBooking->fullname}}
                  <li>Số điện thoại: {{$infoBooking->phone}}
                  <li>Địa chỉ liên hệ: {{$infoBooking->address}}
                </ul>

                <h3>Danh sách sản phẩm</h3>
                @foreach($listProduct as $product)
                  {{$product->name_product}} x {{$product->quantity}} = {{$product->price_sale}} VND
                @endforeach
                <p>Tiền ship: {{$infoBooking->shipping}} VND</p>
                <p><b>Tổng cộng: {{$infoBooking->amount_net}} VND</b></p>
            </div>
        </div>
    </div>
  </body>
</html>
