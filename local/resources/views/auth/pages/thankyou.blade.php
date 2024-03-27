@extends('auth.master-auth')
@section('content')

<div class="background-login" style="background-image: url(auth-hanatour/img/bg.jpg)">
    <div class="main-wrap-slider" id="main-wrap-slider">
        <p class="slide01 main-slider"><span class="slider-txt">Biei, Hokkaido</span></p>
        <p class="slide02 main-slider"><span class="slider-txt">Ha Long Bay, Quang Ninh</span></p>
        <p class="slide03 main-slider"><span class="slider-txt">Tottori Sand Dunes, Tottori</span></p>
        <p class="slide04 main-slider"><span class="slider-txt">Akihabara, Tokyo</span></p>
    </div>
    <div class="middle">
        <div class="inner">
            <div class="wrap-content-login">
                <div class="row reset">
                    <div class="col-md-12 wrap-content-link text-center">
                        <div class="logo-login">
                            <img src="{{asset('auth-hanatour/img/logo-soshiki.png')}}"/>
                        </div>
                        <div class="color-fff fs-24 pd-6 fm">SOSHIKI</div>
                        <div class="color-fff fs-24 pd-6 fm">{{ __('auth.thank_you_for_your_registration') }}</div>
                        <div class="color-fff fs-24 pd-6 fm">
                            <p>Tên đăng nhập và mật khẩu của bạn là tên email (bỏ @ tên miền)</p>
                            <p>Hãy chỉnh sửa tên đăng nhập và mật khẩu của bạn ngay.</p>
                        </div>
                        <button class="btn btn-custom fs-24 mb-30 bg-color-c8990b" onclick="windowOpen('/')">Log In</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function windowOpen(url) {
        window.open(url);
    }
</script>

@endsection

@section('content-footer')

{{-- <script type="text/javascript" src="{{asset('auth-hanatour/js/login.js')}}"></script> --}}

@endsection
