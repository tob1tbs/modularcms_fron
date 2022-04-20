@extends('layout.layout')

@section('css')

@endsection

@section('content')
<main class="main">
    <div class="page-header" style="background-color: #424548;">
        <div class="container d-flex flex-column align-items-center">
            <h1 style="color: #ffffff;" class="font-neue">{{ trans('site.register') }}</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="featured-boxes mt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabs mb-5">
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active font-neue" id="tab-popular4" data-toggle="tab" href="#popular-content4" role="tab" aria-controls="popular-content4" aria-selected="true" style="background-color: #383c40; border-left: none; border-right: none; color: #ffffff;">{{ trans('site.physical') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-neue" id="recent-tab4" data-toggle="tab" href="#recent-content4" role="tab" aria-controls="recent-content4" aria-selected="true" style="background-color: #383c40; color: #ffffff; border-left: none; border-right: none;">{{ trans('site.legal') }}</a>
                                    </li>
                                </ul>
                                <div class="tab-content" style="border: 1px solid #383c40;">
                                    <div class="tab-pane fade show active" id="popular-content4" role="tabpanel" aria-labelledby="tab-popular4">
                                        <div class="featured-box featured-box-primary text-left mt-2">
                                            <div class="box-content">
                                                <form action="/" id="frmSignIn" method="post" class="row">
                                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                                        <label class="font-weight-bold text-2 float-left font-neue" style="color: #ffffff;">{{ trans('site.name') }}</label>
                                                        <input type="text" value="" class="form-control form-control-lg">
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                                        <label class="font-weight-bold text-2 float-left font-neue" style="color: #ffffff;">{{ trans('site.lastname') }}</label>
                                                        <input type="text" value="" class="form-control form-control-lg">
                                                    </div>
                                                    <div class="form-row">
                                                        <input type="submit" value="{{ trans('site.login') }}" class="font-neue btn btn-primary float-right" data-loading-text="Loading...">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="recent-content4" role="tabpanel" aria-labelledby="recent-tab4">
                                        <p>Recent</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitat.</p>
                                    </div>
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