@extends('layout.layout')

@section('css')

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
                    <h5 class="font-weight-bold pt-3">{{ trans('site.categories') }}</h5>
                    <ul class="nav nav-list flex-column">
                        @foreach($productCategoryList->take(15) as $category_item)
                        <li class="nav-item"><a class="nav-link" href="{{ route('actionProductsIndex', 'category_id='.$category_item->id.'') }}">{{ json_decode($category_item->name)->{app()->getLocale()} }}</a></li>
                        @endforeach
                    </ul>
                </aside>
            </div>
            <div class="col-lg-9">
                <div class="masonry-loader masonry-loader-loaded">
                    <div class="row products product-thumb-info-list" data-plugin-masonry="" data-plugin-options="{'layoutMode': 'fitRows'}" style="position: relative; height: 1087.36px;">
                        @foreach($product_list as $product_item)
                        <div class="col-sm-6 col-lg-4 product" style="position: absolute; left: 0px; top: 0px;">
                            <a href="shop-product-sidebar-left.html">
                                <span class="onsale">Sale!</span>
                            </a>
                            <span class="product-thumb-info border-0">
                                <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                    <span class="text-uppercase text-1">{{ trans('site.add_to_cart') }}</span>
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <span class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-1.jpg">
                                    </span>
                                </a>
                                <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                    <a href="s{{ route('actionProductsView', $product_item->id) }}">
                                        <h4 class="text-4 text-primary">{{ $product_item->{"name_".app()->getLocale()} }}</h4>
                                        <span class="price">
                                            @if(!empty($product_item->discount_price))
                                            <del><span class="amount">{{ $product_item->getProductPrice->price / 100 }} ₾</span></del>
                                            <ins><span class="amount text-dark font-weight-semibold">{{ $product_item->discount_price / 100 }} ₾</span></ins>
                                            @else
                                            <del><span class="amount">{{ $product_item->getProductPrice->price / 100 }} ₾</span></del>
                                            @endif
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </div>
                        @endforeach
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