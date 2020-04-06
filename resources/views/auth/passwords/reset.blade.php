<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>إهداءات</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset("public/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{asset("public/vendor/metisMenu/metisMenu.min.css")}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset("public/dist/css/sb-admin-2.css")}}" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="{{asset("public/vendor/morrisjs/morris.css")}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset("public/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-lg-4 mx-md-auto">
            <h3 class="mt-5 mb-5 text-center">نظام الإهداءات</h3>
            <div class="login-panel card mt-0">
                <div class="card-header">
                    <h3 class="card-title text-center">تغيير كلمة المرور</h3>
                </div>
                <div class="card-body">

                    <form role="form" action="{{ route('password.update') }}" method="post">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control @error('email') is-invalid @enderror" placeholder="البريد الإلكتروني" name="email" value="{{ old('email') }}" type="email" autocomplete="off">
                                @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control @error('password') is-invalid @enderror" placeholder="كلمة المرور" name="password" type="password" value="" required autocomplete="off">
                                @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="form-check mb-4">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="mr-4">تذكرني</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block mb-3">تسجيل الدخول</button>
                        </fieldset>
                    </form>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">نسيت كلمة المرور ؟</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{asset("public/vendor/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset("public/vendor/popper/popper.min.js")}}"></script>
<script src="{{asset("public/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset("public/vendor/metisMenu/metisMenu.min.js")}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset("public/dist/js/sb-admin-2.js")}}"></script>

</body>

</html>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
