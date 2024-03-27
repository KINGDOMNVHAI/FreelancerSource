@extends('auth.master-auth')
@section('content')

<div class="background-login" style="background-image: url(auth-hanatour/img/bg.jpg)">
    <div class="main-wrap-slider" id="main-wrap-slider">
        <p class="slide01 main-slider"><span class="slider-txt">Biei, Hokkaido</span></p>
        <p class="slide02 main-slider"><span class="slider-txt">Kashiwajima, Kochi</span></p>
        <p class="slide03 main-slider"><span class="slider-txt">Tottori Sand Dunes, Tottori</span></p>
    </div>
    <div class="middle">
        <div class="inner">
            <div class="wrap-content-login">
                <div class="row reset">
                    <div class="col-md-7 wrap-content-input">
                        <form action="{{ route('register-insert') }}" method="POST" id="form-validation" name="form-validation">
                            {{ csrf_field() }}
                            <div class="header-login ml-10 fs-30 font-bold color-363636 fm-header">Sign Up</div>
                            <div class="fs-16 font-bold color-363636 fm-title">Firstname *</div>
                            <input name="firstname" type="text" id="validation-firstname" class="form-control custom-input color-373737 fs-16" placeholder="Firstname" />

                            <div class="fs-16 font-bold color-363636 fm-title">Lastname *</div>
                            <input name="lastname" type="text" id="validation-lastname" class="form-control custom-input color-373737 fs-16" placeholder="Lastname" />

                            <div class="fs-16 font-bold color-363636 fm-title">Email *</div>
                            <input name="Email" type="text" id="validation-email" class="form-control custom-input color-373737 fs-16" placeholder="Email" />

                            <div class="fs-16 font-bold color-363636 fm-title">Username *</div>
                            <input name="username" type="text" class="form-control custom-input color-373737 fs-16" placeholder="Username" />

                            <div class="fs-16 font-bold color-363636 fm-title">Password *</div>
                            <input name="password" type="password" id="validation-password" class="form-control custom-input color-373737 fs-16" placeholder="Enter your password" />


                            <div id="wrap-error" class="wrap-error"></div>
                            <div class="wrap-action-login text-center">
                                <button type="button" id="sbRegister" class="btn btn-custom fs-24 mt-10">Sign Up</button>
                            </div>
                            <div class="row" style="margin-top:15px;">
                                <div class="col-sm-9"><a href="{{ route('forgot-password') }}">{{ __('auth.forgot_password') }}</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 wrap-content-link text-center">
                        <div class="logo-login">
                            <img src="{{asset('auth-hanatour/img/logo-soshiki.png')}}"/>
                        </div>
                        <div class="color-fff fs-24 pd-6 fm">SOSHIKI</div>
                        <div class="color-fff fs-24 pd-6 fm">We provide <br class="login_br" />all about JAPAN</div>
                        {{-- <button id="btn_inqur" class="btn btn-custom fs-24 mt-30 mb-30 bg-color-c8990b" data-toggle="modal" data-target="#modalInquiry">Inquiry</button> --}}
                        <button id="btn_register" class="btn btn-custom fs-24 mb-30 bg-color-c8990b" onclick="windowOpen('/')">Log In</button>
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

<script type="text/javascript" src="{{asset('auth-hanatour/js/register.js')}}"></script>

@endsection
