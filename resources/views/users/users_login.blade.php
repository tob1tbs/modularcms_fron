@extends('layout.layout')

@section('css')

@endsection

@section('content')
<main class="main">
    <div class="page-header" style="background-color: #424548;">
        <div class="container d-flex flex-column align-items-center">
            <h1 style="color: #ffffff;" class="font-neue">{{ trans('site.login') }}</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="featured-boxes mt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="featured-box featured-box-primary text-left mt-2">
                                <div class="box-content">
                                    <form action="/" id="user_login">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="font-weight-bold text-2 float-left font-neue" style="color: #ffffff;">{{ trans('site.user_email') }}</label>
                                                <a class="float-right font-helvetica-regular" style="color: #ffffff; float: right;" href="{{ route('actionUsersRegistration') }}">{{ trans('site.register') }}</a>
                                                <input type="text" class="form-control form-control-lg" autocomplete="off" name="user_email">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="font-weight-bold text-2 float-left font-neue" style="color: #ffffff;">{{ trans('site.password') }}</label>
                                                <a class="float-right font-helvetica-regular" style="color: #ffffff; float: right;" href="{{ route('actionUsersRestore') }}">{{ trans('site.forget_password') }}</a>
                                                <input type="password" class="form-control form-control-lg" autocomplete="off" name="user_password">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <input type="button" value="{{ trans('site.login') }}" class="font-neue btn btn-primary float-right" onclick="UserLogin()">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('js')
<script src="{{ asset('assets/js/scripts/users_scripts.js') }}"></script>
@endsection