@extends('layout.layout')

@section('css')

@endsection

@section('content')
<main class="main">
    <div class="page-header" style="background-color: #424548;">
        <div class="container d-flex flex-column align-items-center">
            <h1 style="color: #ffffff;">{{ trans('site.login') }}</h1>
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
                                    <form action="/" id="frmSignIn" method="post">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <a class="float-right" href="#">{{ trans('site.register') }}</a>
                                                <label class="font-weight-bold text-dark text-2">{{ trans('site.email') }}</label>
                                                <input type="text" value="" class="form-control form-control-lg">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <a class="float-right" href="#">{{ trans('site.forget_password') }}</a>
                                                <label class="font-weight-bold text-dark text-2">{{ trans('site.password') }}</label>
                                                <input type="password" value="" class="form-control form-control-lg">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                           <div class="form-group col-lg-6">
                                                <input type="submit" value="Login" class="btn btn-primary float-right" data-loading-text="Loading...">
                                            </div>
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

@endsection