@extends('layout.layout')

@section('css')

@endsection

@section('content')
<div role="main" class="main shop py-4">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-3">
                <aside class="sidebar">
                    <div>
                        <h5 class="font-weight-bold font-neue">{{ trans('site.categories') }}</h5>
                        <ul class="nav nav-list flex-column category-box">
                            @foreach($productCategoryList as $category_item)
                            <li class="nav-item font-helvetica-regular">
                                <a class="nav-link" href="{{ route('actionProductsIndex', 'category_id='.$category_item->id.'') }}">{{ json_decode($category_item->name)->{app()->getLocale()} }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mt-5">
                        <h5 class="font-weight-bold font-neue">{{ trans('site.filters') }}</h5>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label style="color: #fff" class="font-neue" for="price_from">ფასი: (დან)</label>
                                    <input type="number" name="price_from" id="price_from" class="form-control" style="border-radius: 5px; color: #ffffff;">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label style="color: #fff" class="font-neue" for="price_to">ფასი: (მდე)</label>
                                    <input type="number" name="price_to" id="price_to" class="form-control" style="border-radius: 5px; color: #ffffff;">
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    @foreach($product_list as $product_item)
                    <div class="col-6 col-sm-12 col-lg-3 height-xl">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{ route('actionProductsView', $product_item->id) }}">
                                    <img src="{{ $product_item->photo }}" width="180" height="252" alt="Product" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{ route('actionProductsIndex', $product_item->category_id) }}" class="product-category">{{ json_decode($product_item->getCategoryData->name)->{app()->getLocale()} }}</a>
                                    </div>
                                </div>
                                <h3 class="product-title"> <a href="{{ route('actionProductsView', $product_item->id) }}">{{ $product_item->{"name_".app()->getLocale()} }}</a></h3>
                                <div class="price-box">
                                    @if(!empty($product_item->discount_price))
                                    <span class="old-price">{{ $product_item->getProductPrice->price / 100 }} ₾</span>
                                    <span class="product-price">{{ $product_item->discount_price / 100 }} ₾</span>
                                    @else
                                    <span class="product-price">{{ $product_item->getProductPrice->price / 100 }} ₾</span>
                                    @endif
                                </div>
                            </div>
                        </div>
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
<style type="text/css">
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
</style>
@endsection

@section('js')

@endsection