@extends('main.master-main')

@section('content-head')
@endsection

@section('content')

@include('main.block.navbar')

<!-- Checkout Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 justify-content-center">
        <div class="col-lg-4">
            <div class="card border-secondary mb-5">
                <form id="form-validation" name="form-validation" method="POST" authentication-success-handler-ref="autoAuthenticationSucess" action="{{ route('forgot-password-sendcode') }}">
                {{ csrf_field() }}
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Đăng ký</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <p>Nhập email để nhận mật khẩu mới</p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <input type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" value="Gửi email">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->

@endsection
