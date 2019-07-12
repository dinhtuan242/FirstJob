@extends('admin.pages.master')
@section('content')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="{{ route('index') }}">
                        <img class="align-content" src="{{ asset('bower_components/bower-firstjob/images/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>{{ trans('mylang.pages.user_name') }}</label>
                            <input type="email" class="form-control" placeholder="{{ trans('mylang.pages.user_name') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('mylang.pages.user_name') }}</label>
                            <input type="password" class="form-control" placeholder="{{ trans('mylang.pages.user_name') }}">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> {{ trans('mylang.pages.remember') }}
                            </label>
                            <label class="pull-right">
                                <a href="{{ route('forgot_password') }}">{{ trans('mylang.pages.forgot_password') }}</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">{{ trans('mylang.pages.signin') }}</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>{{ trans('mylang.pages.signin_fb') }}</button>
                                <button type="button" class="btn social google btn-flat btn-addon mt-2"><i class="ti-google"></i>{{ trans('mylang.pages.signin_gg') }}</button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>{{ trans('mylang.pages.hasnt_account') }} <a href="{{ route('register') }}"> {{ trans('mylang.pages.signup_here') }}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()
