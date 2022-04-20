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