@extends('main.master-main')

@section('content-head')

@endsection

@section('content')

<!-- Checkout Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-6">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Information</h4>
                </div>
                <div class="card-body">
                    <h5 class="font-weight-medium mb-3">Billing Address</h5>
                    <div class="row">
                        <div class="col-md-10 form-group">
                            <p><b>Tên:</b> Nguyễn...</p>
                            <p><b>Email:</b> nvhai@gmail.com</p>
                            <p><b>Mobile:</b> 083 3999 ...</p>
                            <p><b>Address Line 1:</b> 123 street</p>
                        </div>
                    </div>
                    <hr class="mt-0">
                    <div class="row">
                        <div class="col-md-10 form-group">
                            <p><b>Payment:</b> direct</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse mb-4" id="shipping-address">
                <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>First Name</label>
                        <input class="form-control" type="text" placeholder="John">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Last Name</label>
                        <input class="form-control" type="text" placeholder="Doe">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text" placeholder="example@email.com">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Mobile No</label>
                        <input class="form-control" type="text" placeholder="+123 456 789">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Address Line 1</label>
                        <input class="form-control" type="text" placeholder="123 Street">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Address Line 2</label>
                        <input class="form-control" type="text" placeholder="123 Street">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Country</label>
                        <select class="custom-select">
                            <option selected>United States</option>
                            <option>Afghanistan</option>
                            <option>Albania</option>
                            <option>Algeria</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>City</label>
                        <input class="form-control" type="text" placeholder="New York">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>State</label>
                        <input class="form-control" type="text" placeholder="New York">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>ZIP Code</label>
                        <input class="form-control" type="text" placeholder="123">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                </div>
                <div class="card-body">
                    <h5 class="font-weight-medium mb-3">Products</h5>
                    <div class="d-flex justify-content-between">
                        <p>Colorful Stylish Shirt 1</p>
                        <p>$150</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Colorful Stylish Shirt 2</p>
                        <p>$150</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Colorful Stylish Shirt 3</p>
                        <p>$150</p>
                    </div>
                    <hr class="mt-0">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium">$150</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">$10</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold">$160</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->


<section class="inner-section single-banner" style="background: url({{asset('frontend/images/single-banner.jpg')}}) no-repeat center;">
    <div class="container">
        <h2>ĐẶT THÀNH CÔNG</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Đặt hàng thành công</li>
        </ol>
    </div>
</section>
<section class="inner-section checkout-part">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-12">
                <div class="alert-info">
                    <p>Returning customer? <a href="login.html">Click here to login</a></p>
                </div>
            </div> -->
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4>Đặt hàng thành công</h4>
                    </div>
                    <div class="account-content">
                        <div class="table-scroll">
                            <h2>Email đã được gửi cho bạn</h2>
                        </div>
                        <!-- <div class="chekout-coupon"><button class="coupon-btn">Do you have a coupon code?</button>
                            <form class="coupon-form">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit"><span>apply</span></button>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="contact-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                    class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3>add new contact</h3>
                </div>
                <div class="form-group"><label class="form-label">title</label><select class="form-select">
                        <option selected>choose title</option>
                        <option value="primary">primary</option>
                        <option value="secondary">secondary</option>
                    </select></div>
                <div class="form-group"><label class="form-label">number</label><input class="form-control"
                        type="text" placeholder="Enter your number"></div><button class="form-btn"
                    type="submit">save contact info</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="address-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                    class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3>add new address</h3>
                </div>
                <div class="form-group"><label class="form-label">title</label><select class="form-select">
                        <option selected>choose title</option>
                        <option value="home">home</option>
                        <option value="office">office</option>
                        <option value="Bussiness">Bussiness</option>
                        <option value="academy">academy</option>
                        <option value="others">others</option>
                    </select></div>
                <div class="form-group"><label class="form-label">address</label><textarea class="form-control"
                        placeholder="Enter your address"></textarea></div><button class="form-btn"
                    type="submit">save address info</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="payment-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                    class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3>add new payment</h3>
                </div>
                <div class="form-group"><label class="form-label">card number</label><input class="form-control"
                        type="text" placeholder="Enter your card number"></div><button class="form-btn"
                    type="submit">save card info</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="contact-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                    class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3>edit contact info</h3>
                </div>
                <div class="form-group"><label class="form-label">title</label><select class="form-select">
                        <option value="primary" selected>primary</option>
                        <option value="secondary">secondary</option>
                    </select></div>
                <div class="form-group"><label class="form-label">number</label><input class="form-control"
                        type="text" value="+8801838288389"></div><button class="form-btn" type="submit">save contact
                    info</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="address-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                    class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3>edit address info</h3>
                </div>
                <div class="form-group"><label class="form-label">title</label><select class="form-select">
                        <option value="home" selected>home</option>
                        <option value="office">office</option>
                        <option value="Bussiness">Bussiness</option>
                        <option value="academy">academy</option>
                        <option value="others">others</option>
                    </select></div>
                <div class="form-group"><label class="form-label">address</label><textarea class="form-control"
                        placeholder="jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A"></textarea>
                </div><button class="form-btn" type="submit">save address info</button>
            </form>
        </div>
    </div>
</div>

@endsection
