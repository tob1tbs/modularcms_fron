@extends('layout.layout')

@section('css')
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.css') }}">
@endsection

@section('content')
<main class="home main">
    <div class="container">
        <section>
            <div class="row grid">
                <div class="col-md-8 grid-item height-x1">
                    <div class="owl-carousel owl-theme">
                        @foreach($slider_list as $item)
                        <div class="home-banner">
                            <figure>
                                <img src="{{ $item->path }}" width="780" height="440" style="max-height: 440px;" alt="{{ json_decode($item->text)->{'small_text_'.app()->getLocale()} }}" title="{{ json_decode($item->text)->{'small_text_'.app()->getLocale()} }}" />
                            </figure>
                            <div class="banner-content content-right-bottom">
                                <span class="span-box span-primary appear-animate font-neue" data-animation-name="fadeInUpShorter" data-animation-delay="200">{{ json_decode($item->text)->{'small_text_'.app()->getLocale()} }}</span>
                                <h3 class=" appear-animate font-neue" data-animation-name="fadeInUpShorter" data-animation-delay="400">{{ json_decode($item->text)->{'big_text_'.app()->getLocale()} }}</h3>
                                <a href="{{ $item->url }}" class="btn appear-animate font-neue" data-animation-name="fadeInUpShorter" data-animation-delay="800">{{ trans('site.more') }}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @foreach($banner_list as $banner_item)
                <div class="col-sm-6 col-md-4 grid-item height-x2">
                    <div class="home-banner">
                        <figure>
                            <img src="{{ $banner_item->path }}" width="380" height="210" style="max-height: 210px;" alt="{{ json_decode($banner_item->text)->{'small_text_'.app()->getLocale()} }}" title="{{ json_decode($banner_item->text)->{'small_text_'.app()->getLocale()} }}">
                        </figure>
                        <div class="banner-content content-right-bottom">
                            <span class="font1 appear-animate font-neue" data-animation-name="fadeInUpShorter" data-animation-delay="1000">{{ json_decode($banner_item->text)->{'small_text_'.app()->getLocale()} }}</span>
                            <h3 class=" appear-animate font-neue" data-animation-name="fadeInUpShorter" data-animation-delay="1200">{{ json_decode($banner_item->text)->{'big_text_'.app()->getLocale()} }}</h3>
                            <a href="{{ $banner_item->url }}" class="btn appear-animate font-neue" data-animation-name="fadeInUpShorter" data-animation-delay="1400">{{ trans('site.more') }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-1 grid-col-sizer"></div>
            </div>
        </section>
        <section class="info-section mt-1 row row-joined appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="600">
            <div class="col-md-4">
                <div class="info-box info-box-icon-left text-white">
                    <i class="icon-shipping"></i>

                    <div class="info-box-content">
                        <h4 class="font-neue">{{ trans('site.box_title_1') }}</h4>
                        <p class="font2 font-helvetica-regular">{{ trans('site.box_text_1') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box info-box-icon-left text-white">
                    <i class="icon-phone"></i>
                    <div class="info-box-content">
                        <h4 class="font-neue">{{ trans('site.phone_number') }}</h4>
                        <p class="font2 font-helvetica-regular">{{ $parametersArray['phone'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box info-box-icon-left text-white">
                    <i class="icon-mail"></i>

                    <div class="info-box-content">
                        <h4 class="font-neue">{{ trans('site.email') }}</h4>
                        <p class="font2 font-helvetica-regular">{{ $parametersArray['email'] }}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="bg-parallax position-relative appear-animate" data-animation-name="fadeIn" data-animation-delay="100" style="padding: 5.9rem 0 2.1rem;">
        <p style="position: absolute; top: 9.5%; left: 3.3%; animation-delay: 1400ms;" data-appear-animation="zoomIn" data-appear-animation-delay="1400" class="appear-animation zoomIn appear-animation-visible"><img src="{{ asset('assets/images/icon1.png') }}" alt="thumbnail" width="82" height="92" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}">
        </p>

        <p style="position: absolute; top: 29%; left: 13%; animation-delay: 1100ms;" data-appear-animation="zoomIn" data-appear-animation-delay="1100" class="appear-animation zoomIn appear-animation-visible"><img src="{{ asset('assets/images/icon2.png') }}" alt="" width="82" height="92" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 2, 'transition': true, 'horizontal': true}">
        </p>

        <p style="position: absolute; top: 44%; left: 4%; animation-delay: 2000ms;" data-appear-animation="zoomIn" data-appear-animation-delay="2000" class="appear-animation zoomIn appear-animation-visible"><img src="{{ asset('assets/images/icon3.png') }}" alt="" width="102" height="102" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3.5, 'transition': true, 'horizontal': true}">
        </p>

        <p style="position: absolute; top: 64%; left: 11%; animation-delay: 800ms;" data-appear-animation="zoomIn" data-appear-animation-delay="800" class="appear-animation zoomIn appear-animation-visible"><img src="{{ asset('assets/images/icon4.png') }}" alt="" width="85" height="85" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 2.5, 'transition': true}">
        </p>

        <p style="position: absolute; top: 11%; left: 87%; animation-delay: 800ms;" data-appear-animation="zoomIn" data-appear-animation-delay="800" class="appear-animation zoomIn appear-animation-visible"><img src="{{ asset('assets/images/icon5.png') }}" alt="" width="98" height="97" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 2.5, 'transition': true}">
        </p>

        <p style="position: absolute; top: 32%; left: 95%; animation-delay: 2000ms;" data-appear-animation="zoomIn" data-appear-animation-delay="2000" class="appear-animation zoomIn appear-animation-visible"><img src="{{ asset('assets/images/icon6.png') }}" alt="" width="80" height="80" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3.5, 'transition': true, 'horizontal': true}">
        </p>

        <p style="position: absolute; top: 44%; left: 86%; animation-delay: 1100ms;" data-appear-animation="zoomIn" data-appear-animation-delay="1100" class="appear-animation zoomIn appear-animation-visible"><img src="{{ asset('assets/images/icon7.png') }}" alt="" width="80" height="80" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 2, 'transition': true, 'horizontal': true}">
        </p>

        <p style="position: absolute; top: 60%; left: 94%; animation-delay: 1400ms;" data-appear-animation="zoomIn" data-appear-animation-delay="1400" class="appear-animation zoomIn appear-animation-visible"><img src="{{ asset('assets/images/icon8.png') }}" alt="" width="80" height="80" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}">
        </p>

        <div class="container">
            <section class="product-panel">
                <div class="section-title">
                    <h2 class="mr-5 ls-0 mb-0 font-neue">{{ trans('site.future_products') }}</h2>
                    <a href="{{ route('actionProductsIndex') }}" class="font-helvetica-regular">{{ trans('site.all_products') }}<i class="icon-right"></i></a>
                </div>
                <div class="row">
                    @foreach($product_list->where('status', 2)->take(4) as $product_item)
                    <div class="col-6 col-md-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{ route('actionProductsView', $product_item->id) }}" style="height: 230px;">
                                    <img src="{{ $product_item->photo }}" style="width: 100%; height: auto;" alt="Product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="javascript:;" onclick="AddToCart({{ $product_item->id }})" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                </div>
                                <div class="label-group">
                                    @if($product_item->used == 1)
                                    <div class="product-label label-hot">{{ trans('site.used') }}</div>
                                    @endif
                                    @if(!empty($product_item->discount_percent))
                                    <div class="product-label label-sale">{{ $product_item->discount_percent }} %</div>
                                    @endif
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
                                    <span class="old-price">{{ $product_item->getProductPrice['0']->price / 100 }} ₾</span>
                                    <span class="product-price">{{ $product_item->discount_price / 100 }} ₾</span>
                                    @else
                                    <span class="product-price">{{ $product_item->getProductPrice['0']->price / 100 }} ₾</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>

    <div class="container">
        <section class="product-panel bar-bottom appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
            <div class="section-title">
                <h2 class="mr-5 ls-0 mb-0 font-neue mt-2">{{ trans('site.resently_added') }}</h2>
                <a href="{{ route('actionProductsIndex') }}">{{ trans('site.all_products') }}<i class="icon-right"></i></a>
            </div>
            <div class="row grid">
                @foreach($product_list->take(8) as $product_item)
                <div class="grid-item col-6 col-sm-3 col-lg-3 height-xl">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ route('actionProductsView', $product_item->id) }}" style="height: 230px;">
                                <img src="{{ $product_item->photo }}" style="width: 100%; height: auto;" alt="Product">
                            </a>
                            <div class="btn-icon-group">
                                <a href="javascript:;" onclick="AddToCart({{ $product_item->id }})" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                            </div>
                            <div class="label-group">
                                @if($product_item->used == 1)
                                <div class="product-label label-hot">{{ trans('site.used') }}</div>
                                @endif
                                @if(!empty($product_item->discount_percent))
                                <div class="product-label label-sale">{{ $product_item->discount_percent }} %</div>
                                @endif
                            </div>
                        </figure>
                        <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{ route('actionProductsIndex', $product_item->category_id) }}" class="product-category font-helvetica-regular">{{ json_decode($product_item->getCategoryData->name)->{app()->getLocale()} }}</a>
                                    </div>
                                </div>
                                <h3 class="product-title font-neue"> <a href="{{ route('actionProductsView', $product_item->id) }}">{{ $product_item->{"name_".app()->getLocale()} }}</a></h3>
                                <div class="price-box">
                                    @if(!empty($product_item->discount_price))
                                    <span class="old-price">{{ $product_item->getProductPrice['0']->price / 100 }} ₾</span>
                                    <span class="product-price">{{ $product_item->discount_price / 100 }} ₾</span>
                                    @else
                                    <span class="product-price">{{ $product_item->getProductPrice['0']->price / 100 }} ₾</span>
                                    @endif
                                </div>
                            </div>
                    </div>
                </div>
                @endforeach
                <div class="col-1 grid-col-sizer"></div>
            </div>
        </section>
    </div>
</main>
@endsection

@section('js')
<script src="{{ asset('assets/js/scripts/global.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>
@endsection