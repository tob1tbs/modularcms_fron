@extends('layout.layout')

@section('css')
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme-elements.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme-shop.default') }}"> -->
@endsection

@section('content')
<div role="main" class="main shop py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <aside class="sidebar">
                    <form action="" method="get">
                        <div class="input-group mb-3 pb-1">
                            <input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
                            </span>
                        </div>
                    </form>
                    <h5 class="font-weight-bold pt-3 font-neue">{{ trans('site.categories') }}</h5>
                    <ul class="nav nav-list flex-column">
                        @foreach($productCategoryList as $category_item)
                        <li class="nav-item font-helvetica-regular">
                            <a class="nav-link" href="{{ route('actionProductsIndex', 'category_id='.$category_item->id.'') }}">{{ json_decode($category_item->name)->{app()->getLocale()} }}</a>
                        </li>
                        @endforeach
                    </ul>
                </aside>
            </div>
            <div class="col-lg-9">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul class="pagination float-right">
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection