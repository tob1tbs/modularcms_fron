@extends('layout.layout')

@section('css')

@endsection

@section('content')
@dd($product_data)
<main class="main">
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="demo31.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
            </ol>
        </nav>
        <div class="product-single-container product-single-default">
            <div class="cart-message d-none">
                <strong class="single-cart-notice text-white text-uppercase">{{ $product_data->{"name_".app()->getLocale()} }}</strong>
                <span class="text-white">{{ trans('site.has_been_added') }}</span>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6 product-single-gallery">
                    <div class="product-slider-container">
                        <div class="label-group">
                            @if(!empty($product_data->discount_percent))
                            <div class="product-label label-sale">{{ $product_data->discount_percent }} %</div>
                            @endif
                        </div>
                        <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                            <div class="product-item">
                                @foreach($product_data->getProductGallery as $gallery_item)
                                <img class="product-single-image" src="{{ $gallery_item->path }}" data-zoom-image="{{ $gallery_item->path }}" width="468" height="468" alt="product" />
                                @endforeach
                            </div>
                        </div>
                        <span class="prod-full-screen">
                            <i class="icon-plus"></i>
                        </span>
                    </div>

                    <div class="prod-thumbnail owl-dots">
                        @foreach($product_data->getProductGallery as $gallery_item)
                        <div class="owl-dot">
                            <img src="{{ $gallery_item->path }}" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 product-single-details">
                    <h1 class="product-title">{{ $product_data->{"name_".app()->getLocale()} }}</h1>
                    <hr class="short-divider">
                    <div class="price-box product-filtered-price">
                        @if(!empty($product_data->discount_price))
                        <del class="old-price"><span>{{ $product_data->getProductPrice->price / 100 }} ₾</span></del>
                        <span class="product-price">{{ $product_data->discount_price / 100 }} ₾</span>
                        @else 
                        <span class="product-price">{{ $product_data->getProductPrice->price / 100 }} ₾</span>
                        @endif
                    </div>
                    <div class="product-desc">
                        <p>
                            {{ json_decode($product_data->description)->{app()->getLocale()} }}
                        </p>
                    </div>
                    <ul class="single-info-list font-neue">
                        <li>
                            {{ trans('site.category') }} : <strong>
                             <a href="{{ route('actionProductsIndex', $product_data->category_id) }}" class="product-category">{{ json_decode($product_data->getCategoryData->name)->{app()->getLocale()} }}</a></strong>
                        </li>
                    </ul>
                    <div class="product-action">
                        <div class="product-single-qty">
                            <input class="horizontal-quantity form-control" type="text">
                        </div>
                        <a href="javascript:;" class="btn btn-dark add-cart mr-2" title="{{ trans('site.add_to_cart') }}">{{ trans('site.add_to_cart') }}</a>
                        <a href="{{ route('actionCartIndex') }}" class="btn btn-primary text-white view-cart d-none">{{ trans('site.cart') }}:</a>
                    </div>
                    <hr class="divider mb-0 mt-0">
                    <div class="product-single-share mb-2">
                        <label class="sr-only">{{ trans('site.share') }}::</label>
                        <div class="social-icons mr-2">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-single-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">{{ trans('site.parameters') }}:</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                    <table class="table table-striped mt-2">
                        <tbody>
                            <tr>
                                <th>Game Type</th>
                                <td>Offline, Online</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- <div class="products-section pt-0">
            <h2 class="section-title">{{ trans('site.related_products') }}:</h2>
            <div class="products-slider owl-carousel owl-theme dots-top dots-small 5col" data-owl-options="{'dots': true}">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo31-product.html">
                            <img src="assets/images/demoes/demo31/products/product-12.jpg" width="220" height="308" alt="Product" />
                        </a>

                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="demo31-shop.html" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="demo31-product.html">Gun Machine 6</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <hr class="mt-0 m-b-5" />
    </div>
</main>
@endsection

@section('js')

@endsection