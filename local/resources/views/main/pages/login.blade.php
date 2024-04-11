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
                <form action="{{ route('check-login') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Đăng nhập</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên đăng nhập hoặc email</label>
                            <input type="text" name="username" class="form-control" placeholder="username or email">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                        <div class="form-group">
                            <a href="{{route('forgot-password')}}">Quên mật khẩu</a>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <input type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" value="Đăng nhập">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->

@endsection
