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
                        <form id="form-validation" name="form-validation" method="POST" authentication-success-handler-ref="autoAuthenticationSucess" action="{{ route('check-login') }}">
                            {{ csrf_field() }}
                            <div class="header-login ml-10 fs-30 font-bold color-363636 fm-header">Log In</div>
                            <div class="fs-16 font-bold color-363636 fm-title">ID</div>
                            <input name="username" type="text" id="validation-email" class="form-control custom-input color-373737 fs-16" placeholder="Email or User name" />
                            <div class="mt-10 fs-16 font-bold color-363636 fm-title">Password</div>
                            <input name="password" type="password" id="validation-password" class="form-control custom-input color-373737 fs-16" placeholder="{{ __('auth.password') }}" />
                            <label class="checkbox-custom fs-14 color-909090 mt-10">
                                <input type="checkbox" name="remember-me" />
                            </label>
                            <div class="wrap-error" id="errMsgCover" style="display:none;">
                                <div class="icon-error"></div>
                                <span>Please enter a valid ID and password</span>
                            </div>
                            <div id="wrap-error" class="wrap-error"></div>
                            <div class="wrap-action-login text-center">
                                <button type="button" id="sbLogin" class="btn btn-custom fs-24 mt-10">Log In</button>
                            </div>
                            <div class="row" style="margin-top:15px;">
                                <div class="col-sm-9"><a href="{{ route('forgot-password') }}">{{ __('auth.forgot_password') }}</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 wrap-content-link text-center">
                        <div class="logo-login">

                        </div>
                        <div class="color-fff fs-24 pd-6 fm">ADMIN</div>

                        <!-- <div class="logo-login">
                            <img src="asset('auth-hanatour/img/logo-soshiki.png')}}"/>
                        </div>
                        <div class="color-fff fs-24 pd-6 fm">GOGOGREEN</div>
                        <div class="color-fff fs-24 pd-6 fm">We provide <br class="login_br" />all about JAPAN</div> -->

                        {{-- <button id="btn_inqur" class="btn btn-custom fs-24 mt-30 mb-30 bg-color-c8990b" data-toggle="modal" data-target="#modalInquiry">Inquiry</button> --}}
                        <button id="btn_register" class="btn btn-custom fs-24 mb-30 bg-color-c8990b" onclick="windowOpen('/register')">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="custom-modal modal fade mt-200" id="modalForgotPass" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div>
                <p class="fs-24 font-bold color-373737">Forgot password?</p>
                <div class="icon-modal-close" data-dismiss="modal"></div>
                <p class="fs-14 color-373737">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="text-left">
                    <span class="color-c4161c">*</span>
                    <span class="fs16 font-bold color-363636">E-mail</span>
                </div>
                <div class="mt-10 mb-10">
                    <input type="email" class="input-required form-control custom-input color-373737 fs-16" placeholder="enter your Email" />
                </div>
                <div class="wrap-error">
                    <div class="icon-error"></div>
                    <div class="fs-14">Please fill in your email address</div>
                </div>
                <div>
                    <button class="btn btn-custom fs-24 mt-10">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="custom-modal modal fade modal-js-fix" id="modalInquiry" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content text-center" id="inquiryContent">
            <div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span style="float: right;" aria-hidden="true">&times;</span>
            </button>
            <div class="info-inquiryContent">
                <p class="fs-24 font-bold color-373737">Inquiry</p>
                <p class="fs-14 color-373737">- Welcome to Gorilla - <br />Gorilla offer all travel services in Japan.If you want to be our partner, please fill required fields and contact us.
                    <br />We will send back a message  soon to you.
                    <br />Thank you
                </p>
                <div class="text-left">
                    <span class="color-c4161c" style="margin-right: -2px;">*</span>
                    <span class="fs14 font-bold color-363636">Name</span>
                </div>
                <div class="mb-10">
                    <input id="name" name="name" type="text" class="form-control custom-input color-373737 fs-16" placeholder="Enter your name" />
                </div>
                <div class="wrap-error" id="warningName" style="display: none;">
                    <div class="icon-error"></div>
                    <div class="fs-16">Please fill in your name</div>
                </div>
                <div class="text-left">
                    <span class="color-c4161c" style="margin-right: -2px;">*</span>
                    <span class="fs16 font-bold color-363636">E-mail</span>
                </div>
                <div class="mb-10">
                    <input id="email" name="email" type="email" class="form-control custom-input color-373737 fs-16" placeholder="Enter your email" />
                </div>
                <div class="wrap-error" id="warningEmail" style="display: none;">
                    <div class="icon-error"></div>
                    <div class="fs-14">Please fill in your email address</div>
                </div>
                <div class="wrap-error" id="warningCheckAgainEmail" style="display: none;">
                    <div class="icon-error"></div>
                    <div class="fs-14">Please check again your email address</div>
                </div>
                <div class="text-left">
                    <span class="color-c4161c" style="margin-right:-2px;">*</span>
                    <span class="fs16 font-bold color-363636">Title</span>
                </div>
                <div class="mb-10">
                    <input id="title" name="title" type="email" class="form-control custom-input color-373737 fs-16" placeholder="Enter title" />
                </div>
                <div class="wrap-error" id="warningTitle" style="display: none;">
                    <div class="icon-error"></div>
                    <div class="fs-14">Please fill in title</div>
                </div>
                <div class="text-left">
                    <span class="color-c4161c" style="margin-right: -2px;">*</span>
                    <span class="fs16 font-bold color-363636">Contents</span>
                </div>
                <textarea id="contents" class="input-content" name="contents" rows="5" placeholder="&nbsp;&nbsp;&nbsp;Enter contents"></textarea>
                <div class="wrap-error" id="warningContents" style="display: none;">
                    <div class="icon-error"></div>
                    <div class="fs-14">Please fill in contents</div>
                </div>
                <div class="text-center inquiry_notice_policy">
                    <p class="inquiry_notice--top">【Personal Information Handling Notice】</p>
                    <p class="inquiry_notice--bottom">Please send it only if you agree to <a href="https://agency-staging.gorillajapan.com/pdf/Handling-Of-Personal-Information.pdf" target="_blank">this notice</a>.</p>
                </div>
                <div>
                    <button id="btnSend" class="btn btn-custom fs-24 mt-10" onclick="sendInquiry()">Send</button>
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

<script type="text/javascript" src="{{asset('auth-hanatour/js/login.js')}}"></script>

@endsection
