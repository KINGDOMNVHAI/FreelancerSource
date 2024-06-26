<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-dark pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <!-- <a class="text-dark" href="">FAQs</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Help</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Support</a> -->
                @auth
                    <!-- User is authenticated -->
                    <span class="text-muted px-2">Xin chào, {{ Auth::user()->firstname }}!</span>
                @else
                    <!-- User is not authenticated -->
                @endauth
            </div>
        </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="{{route('home')}}" class="text-decoration-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">B</span>Store</h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
        </div>
        <div class="col-lg-3 col-6 text-right">
            <a href="{{route('cart-checkout')}}" class="btn border">
                <i class="fas fa-shopping-cart text-primary"></i>
                @if($arrayCart != null)
                    @if($totalQuantity > 9)
                    <span class="badge">9+</span>
                    @else
                    <span class="badge">{{$totalQuantity}}</span>
                    @endif
                @else
                <span class="badge">0</span>
                @endif
            </a>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Thể loại</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">Ngoại ngữ <i class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="{{route('category-product', 'tieng-anh')}}" class="dropdown-item">Tiếng Anh</a>
                            <a href="{{route('category-product', 'tieng-nhat')}}" class="dropdown-item">Tiếng Nhật</a>
                        </div>
                    </div>
                    <a href="{{route('category-product', 'kinh-te')}}" class="nav-item nav-link">Kinh tế</a>
                    <a href="{{route('category-product', 'manga')}}" class="nav-item nav-link">Manga</a>
                    <a href="{{route('category-product', 'van-phong-pham')}}" class="nav-item nav-link">Văn phòng phẩm</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="{{route('home')}}" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">B</span>Store</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <!-- <a href="{{route('home')}}" class="nav-item nav-link">Trang chủ</a> -->
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cửa hàng</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                            </div>
                        </div> -->
                        <a href="{{route('category-product', 'all')}}" class="nav-item nav-link">Sản phẩm</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link">Liên hệ</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        @auth
                            <!-- User is authenticated -->
                            <a href="{{route('logout')}}" class="nav-item nav-link">Đăng xuất</a>
                        @else
                            <!-- User is not authenticated -->
                            <a href="{{route('login')}}" class="nav-item nav-link">Đăng nhập</a>
                            <a href="{{route('main-register')}}" class="nav-item nav-link">Đăng ký</a>
                        @endauth
                    </div>
                </div>
            </nav>
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 410px;">
                        <img class="img-fluid" src="{{asset('/frontend/bookstore/img/carousel-sach-thang-4.jpg')}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">Đọc sách</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Sách tháng 4</h3>
                                <!-- <a href="" class="btn btn-light py-2 px-3">Mua ngay!</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 410px;">
                        <img class="img-fluid" src="{{asset('/frontend/bookstore/img/carousel-sach-thang-3.jpg')}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">Đọc sách</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Sách tháng 3</h3>
                                <!-- <a href="" class="btn btn-light py-2 px-3">Mua ngay!</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->
