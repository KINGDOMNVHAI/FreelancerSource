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
                <form action="{{ route('register-insert') }}" method="POST" id="form-validation" name="form-validation">
                {{ csrf_field() }}
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Đăng ký</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>*Họ</label>
                        <input class="form-control" type="text" name="lastname" placeholder="Last name">
                        @error('lastname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>*Tên</label>
                        <input class="form-control" type="text" name="firstname" placeholder="First name">
                        @error('firstname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>*Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>*Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Tên đăng nhập">
                        @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>*Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" type="text" placeholder="123 456 789">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" type="text" placeholder="123 Street">
                    </div>
                    <div class="form-group">
                        <a href="{{route('forgot-password')}}">Quên mật khẩu</a>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <input type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" value="Đăng ký">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->

@endsection
