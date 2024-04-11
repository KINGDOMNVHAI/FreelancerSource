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
                        <p>{{ __('auth.thank_you_for_your_registration') }}</p>
                    </div>
                    <div class="form-group">

                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">

                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->

@endsection
