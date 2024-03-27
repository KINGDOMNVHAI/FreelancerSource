@extends('main.master-main')

@section('content-head')

@endsection

@section('content')

@include('main.block.navbar')

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">{{$product->name_product}}</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">{{$product->name_cat}}</p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">{{$product->name_product}}</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Shop Detail Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="img/nha-quan-ly-cap-trung-mat-xich-song-con-cua-doanh-nghiep-1.jpg" alt="Image">
                    </div>
                    @if($product->img_product_2 != null)
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="{{asset('upload/images/products/' . $product->img_product_2)}}" alt="{{$product->name_product}}" width="100%">
                    </div>
                    @endif
                    @if($product->img_product_3 != null)
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="{{asset('upload/images/products/' . $product->img_product_3)}}" alt="{{$product->name_product}}" width="100%">
                    </div>
                    @endif
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold">{{$product->name_product}}</h3>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div>
                <!-- <small class="pt-1">(50 Reviews)</small> -->
            </div>
            <h3 class="font-weight-semi-bold mb-4">{{$product->price_product}} VND</h3>
            <p class="mb-4">{!! $product->present_product !!}</p>
            <div class="d-flex align-items-center mb-4 pt-2">
                <div class="input-group quantity mr-3" style="width: 130px;">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-minus" >
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <input type="text" id="quantity" class="form-control bg-secondary text-center" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="1">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-plus">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Thêm vào giỏ hàng</button>
            </div>
        </div>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Giới thiệu</a>
                <!-- <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Information</a> -->
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Đánh giá (0)</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    <h4 class="mb-3">Giới thiệu sách {{$product->name_product}}</h4>

                    {!! $product->content_product !!}

                    <p>Nhà quản lý cấp trung đóng vai như một trụ cột vững chắc trong doanh nghiệp, không chỉ duy trì sự ổn định mà còn thúc đẩy sự phát triển bền vững của doanh nghiệp. Nhưng nó chỉ đúng với những nhà quản lý cấp trung xuất sắc, khi đã nắm vững được những kiến thức về quản lý và thực thi.</p>

                    <p>Một trong số những thiếu sót của những nhà quản lý cấp trung hiện nay là chưa nhận thức được tầm quan trọng của mình, chưa hiểu đúng vai trò của mình khi đứng giữa quản lý cấp cao và nhân viên của mình.</p>

                    <p>Với vai trò là nhà quản lý cấp trung, bạn có nhận ra tầm quan trọng của việc hiểu rõ công việc của các thành viên trong nhóm không?</p>

                    <p>Có hiểu rõ yêu cầu đặc biệt của mỗi vị trí trong bộ phận cần đáp ứng? Hiểu rõ thành viên mong muốn gì?</p>

                    <p>Tại sao luôn bất mãn khi được giao việc? hay tại sao các nhà quản lý cấp cao chưa hài lòng với bạn?</p>

                    <p>Vì sao họ muốn bạn phải phát huy nhiều hơn nữa trong quản lý?...</p>

                    <p>Trả lời tất cả các câu hỏi và khúc mắc qua cuốn sách “Nhà quản lý cấp trung - Mắt xích sống còn của doanh nghiệp”. Cuốn sách giúp bạn trở thành nhà quản lý cấp trung xuất sắc, không chỉ giúp cấp cao không còn lo lắng về sự thiếu hiệu quả trong thực hiện công việc mà còn biến những người quản lý cấp trung vươn tới đỉnh cao.</p>

                    <p>Đối với những nhà quản lý này, kiến thức và kỹ năng quản lý vững vàng là điều cần thiết, bao gồm các kỹ năng điều hành giao tiếp hiệu quả, tinh thần trách nhiệm và làm việc chuyên nghiệp, công bằng và hiệu quả, cùng với tính thực tế và khả năng ứng dụng cao.</p>

                    <p>Để đạt được điều này, các nhà quản lý cấp trung cần tham gia vào quá trình chuyển đổi kế hoạch thành hành động và biến hành động thành kết quả. Cuốn sách đưa ra tất cả mọi thứ mà các nhà quản lý cấp trung cần nắm rõ khi đứng ở vị trí trung gian, cung cấp tất cả những phương pháp, công cụ và tiêu chuẩn toàn diện để hướng dẫn đội ngũ quản lý.</p>
                </div>
                <div class="tab-pane fade" id="tab-pane-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-4">1 review for "Colorful Stylish Shirt"</h4>
                            <div class="media mb-4">
                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                    <div class="text-primary mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-4">Leave a review</h4>
                            <small>Your email address will not be published. Required fields are marked *</small>
                            <div class="d-flex my-3">
                                <p class="mb-0 mr-2">Your Rating * :</p>
                                <div class="text-primary">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="message">Your Review *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Your Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Your Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Detail End -->

<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Đề xuất</span></h2>
    </div>
    @foreach($listProductRandom as $product)
    <div class="row px-xl-5 pb-3">
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
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- Products End -->

<script>
    function addCart(id) {
        let quantity = Number(document.getElementById('quantity').value);
        window.open("/bookstore/cart-add/" + id + "/" + quantity);
    }
</script>

@endsection
