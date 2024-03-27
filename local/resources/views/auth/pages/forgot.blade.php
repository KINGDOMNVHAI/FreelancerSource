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
                    <div class="col-md-7 wrap-content-input">
                        <form id="form-validation" name="form-validation" method="POST" authentication-success-handler-ref="autoAuthenticationSucess" action="{{ route('forgot-password-sendcode') }}">
                            {{ csrf_field() }}
                            <div class="header-login ml-10 fs-30 font-bold color-363636 fm-header">Forgot password?</div>
                            <div class="fs-16 font-bold color-363636 fm-title">Email or Username</div>
                            <input name="email" type="text" id="validation-email" class="form-control custom-input color-373737 fs-16" placeholder="Email or Username" />

                            <div class="wrap-error">
                                <div class="icon-error"></div>
                                <div class="fs-14">Please fill in your email address</div>
                            </div>
                            <div id="wrap-error" class="wrap-error"></div>
                            <div class="wrap-action-login text-center">
                                <button type="button" id="sbLogin" class="btn btn-custom fs-24 mt-10">Send Email</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 wrap-content-link text-center">
                        <div class="logo-login">
                            <img src="{{asset('auth-hanatour/img/logo-soshiki.png')}}"/>
                        </div>
                        <div class="color-fff fs-24 pd-6 fm">SOSHIKI</div>
                        <div class="color-fff fs-24 pd-6 fm">We provide <br class="login_br" />all about JAPAN</div>
                        <button id="btn_register" class="btn btn-custom fs-24 mb-30 bg-color-c8990b" onclick="windowOpen('/register')">Sign Up</button>
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
