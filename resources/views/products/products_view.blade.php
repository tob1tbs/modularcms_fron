@extends('layout.layout')

@section('css')

@endsection

@section('content')
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
                <strong class="single-cart-notice text-white text-uppercase">“Men Black Sports Shoes”</strong>
                <span class="text-white">has been added to your cart.</span>
            </div>

            <div class="row">
                <div class="col-lg-5 col-md-6 product-single-gallery">
                    <div class="product-slider-container">
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">-16%</div>
                        </div>
                        <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                            <div class="product-item">
                                <img class="product-single-image" src="assets/images/demoes/demo31/products/zoom/product-1-big.jpg" data-zoom-image="assets/images/demoes/demo31/products/zoom/product-1-big.jpg" width="468" height="468" alt="product" />
                            </div>
                            <div class="product-item">
                                <img class="product-single-image" src="assets/images/demoes/demo31/products/zoom/product-2-big.jpg" data-zoom-image="assets/images/demoes/demo31/products/zoom/product-2-big.jpg" width="468" height="468" alt="product" />
                            </div>
                            <div class="product-item">
                                <img class="product-single-image" src="assets/images/demoes/demo31/products/zoom/product-3-big.jpg" data-zoom-image="assets/images/demoes/demo31/products/zoom/product-3-big.jpg" width="468" height="468" alt="product" />
                            </div>
                            <div class="product-item">
                                <img class="product-single-image" src="assets/images/demoes/demo31/products/zoom/product-4-big.jpg" data-zoom-image="assets/images/demoes/demo31/products/zoom/product-4-big.jpg" width="468" height="468" alt="product" />
                            </div>
                            <div class="product-item">
                                <img class="product-single-image" src="assets/images/demoes/demo31/products/zoom/product-5-big.jpg" data-zoom-image="assets/images/demoes/demo31/products/zoom/product-5-big.jpg" width="468" height="468" alt="product" />
                            </div>
                        </div>
                        <!-- End .product-single-carousel -->
                        <span class="prod-full-screen">
                            <i class="icon-plus"></i>
                        </span>
                    </div>

                    <div class="prod-thumbnail owl-dots">
                        <div class="owl-dot">
                            <img src="assets/images/demoes/demo31/products/zoom/product-1.jpg" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        <div class="owl-dot">
                            <img src="assets/images/demoes/demo31/products/zoom/product-2.jpg" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        <div class="owl-dot">
                            <img src="assets/images/demoes/demo31/products/zoom/product-3.jpg" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        <div class="owl-dot">
                            <img src="assets/images/demoes/demo31/products/zoom/product-4.jpg" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        <div class="owl-dot">
                            <img src="assets/images/demoes/demo31/products/zoom/product-5.jpg" width="110" height="110" alt="product-thumbnail" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 product-single-details">
                    <h1 class="product-title">{{ $product_data->{"name_".app()->getLocale()} }}</h1>
                    <div class="product-nav">
                        <div class="product-prev">
                            <a href="#">
                                <span class="product-link"></span>
                                <span class="product-popup">
                                    <span class="box-content">
                                        <img alt="product" width="150" height="150" src="assets/images/demoes/demo31/products/product-3.jpg" style="padding-top: 0px;">
                                        <span>Epic Future 3</span>
                                </span>
                                </span>
                            </a>
                        </div>
                        <div class="product-next">
                            <a href="#">
                                <span class="product-link"></span>
                                <span class="product-popup">
                                    <span class="box-content">
                                        <img alt="product" width="150" height="150" src="assets/images/demoes/demo31/products/product-4.jpg" style="padding-top: 0px;">
                                        <span>PEL 2019</span>
                                </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <hr class="short-divider">
                    <div class="price-box">
                        <span class="product-price">$15.00 &ndash; </span>
                        <span class="product-price"> $35.00</span>
                    </div>
                    <div class="product-desc">
                        <p>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                            placerat eleifend leo.
                        </p>
                    </div>
                    <div class="product-info-box">
                        <div class="product-info-date">
                            <span class="product-info-name">Release date:</span>
                            <span class="product-info">2018-05-15</span>
                        </div>
                        <div class="product-info-developer">
                            <span class="product-info-name">Developer:</span>
                            <span class="product-info">Porto Software</span>
                        </div>
                        <div class="product-info-publisher">
                            <span class="product-info-name">Publisher:</span>
                            <span class="product-info">Porto Games</span>
                        </div>
                        <div class="product-info-gamemode">
                            <span class="product-info-name">Game Mode:</span>
                            <span class="product-info">Coop,</span>
                            <span class="product-info">Multiplayer,</span>
                            <span class="product-info">Single-player</span>
                        </div>
                        <div class="product-info-rate">
                            <span class="product-info-name">Rated:</span>
                            <span class="product-info-ratenum">18</span>
                            <span class="product-info">not recommended for people under 18</span>
                        </div>
                    </div>
                    <ul class="single-info-list">
                        <li>
                            {{ trans('site.category') }}:
                            <strong>
                                <a href="{{ route('actionProductsIndex', $product_data->category_id) }}" class="product-category">{{ json_decode($product_data->getCategoryData->name)->{app()->getLocale()} }}</a>
                            </strong>
                        </li>
                    </ul>
                    <div class="product-filters-container">
                        <div class="product-single-filter filter-with-img">
                            <label class="font2">Game Type:</label>
                            <ul class="config-size-list">
                                <li>
                                    <a href="javascript:;" class="d-flex align-items-center justify-content-center p-0">
                                        <img src="assets/images/demoes/demo31/products/zoom/product-1.jpg" width="30" height="30" alt="filter-img" />
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="d-flex align-items-center justify-content-center p-0">
                                        <img src="assets/images/demoes/demo31/products/zoom/product-2.jpg" width="30" height="30" alt="filter-img" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-single-filter">
                            <label></label>
                            <a class="font2 text-uppercase clear-btn" href="#">Clear</a>
                        </div>
                    </div>
                    <div class="product-action">
                        <div class="price-box product-filtered-price">
                            @if(!empty($product_data->discount_price))
                            <del class="old-price"><span>{{ $product_data->getProductPrice->price / 100 }} ₾</span></del>
                            <span class="product-price">{{ $product_data->discount_price / 100 }} ₾</span>
                            @else 
                            <span class="product-price">{{ $product_data->getProductPrice->price / 100 }} ₾</span>
                            @endif
                        </div>
                        <div class="product-single-qty">
                            <input class="horizontal-quantity form-control" type="text">
                        </div>
                        <a href="javascript:;" class="btn btn-dark add-cart mr-2" title="Add to Cart">Add to Cart</a>
                        <a href="cart.html" class="btn btn-primary text-white view-cart d-none">{{ trans('site.cart') }}:</a>
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
                    <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">{{ trans('site.description') }}:</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Additional
                        Information</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                    <div class="product-desc-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud ipsum consectetur sed do, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                        <ul>
                            <li>Any Product types that You want - Simple, Configurable
                            </li>
                            <li>Downloadable/Digital Products, Virtual Products
                            </li>
                            <li>Inventory Management with Backordered items
                            </li>
                        </ul>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
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

        <div class="products-section pt-0">
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
        </div>
        <hr class="mt-0 m-b-5" />
    </div>
</main>
@endsection

@section('js')

@endsection