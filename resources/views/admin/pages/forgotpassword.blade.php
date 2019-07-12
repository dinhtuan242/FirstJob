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
                            <label>{{ trans('mylang.pages.email') }}</label>
                            <input type="email" class="form-control" placeholder="{{ trans('mylang.pages.email') }}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-15">{{ trans('mylang.pages.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection