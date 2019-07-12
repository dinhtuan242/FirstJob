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
                            <label>{{ trans('mylang.pages.email') }}</label>
                            <input type="email" class="form-control" placeholder="{{ trans('mylang.pages.email') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('mylang.pages.password') }}</label>
                            <input type="password" class="form-control" placeholder="{{ trans('mylang.pages.password') }}">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> {{ trans('mylang.pages.aggree') }}
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">{{ trans('mylang.pages.register') }}</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>{{ trans('mylang.pages.register_fb') }}</button>
                                <button type="button" class="btn social google btn-flat btn-addon mt-2"><i class="ti-google"></i>{{ trans('mylang.pages.register_gg') }}</button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>{{ trans('mylang.pages.has_account') }}<a href="{{ route('login') }}"> {{ trans('mylang.pages.signin') }}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
