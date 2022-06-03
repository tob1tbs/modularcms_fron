@extends('layout.layout')

@section('css')

@endsection

@section('content')
<main class="main">
    <div class="container">
        <div class="product-single-container product-single-default mt-5">
            <div class="cart-message d-none">
                <strong class="single-cart-notice text-white text-uppercase">{{ $product_data->{"name_".app()->getLocale()} }}</strong>
                <span class="text-white">{{ trans('site.has_been_added') }}</span>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6 product-single-gallery">
                    <div class="product-slider-container">
                        <div class="label-group">
                            @if($product_data->used == 1)
                            <div class="product-label label-hot">{{ trans('site.used') }}</div>
                            @endif
                            @if(!empty($product_data->discount_percent))
                            <div class="product-label label-sale">{{ $product_data->discount_percent }} %</div>
                            @endif
                        </div>
                        <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                            <div class="product-item">
                                <img class="product-single-image" src="{{ $product_data->photo }}" data-zoom-image="{{ $product_data->photo }}" width="468" height="468" alt="product" />
                            </div>
                            @foreach($product_data->getProductGallery as $gallery_item)
                            <div class="product-item">
                                <img class="product-single-image" src="{{ $gallery_item->path }}" data-zoom-image="{{ $gallery_item->path }}" width="468" height="468" alt="product" />
                            </div>
                            @endforeach
                        </div>
                        <span class="prod-full-screen">
                            <i class="icon-plus"></i>
                        </span>
                    </div>
                    <div class="prod-thumbnail owl-dots">
                        <div class="owl-dot">
                            <img src="{{ $product_data->photo }}" width="110" height="110" alt="product-thumbnail" />
                        </div>
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
                        <del class="old-price"><span>{{ $product_data->getProductPrice['0']->price / 100 }} ₾</span></del>
                        <span class="product-price">{{ $product_data->discount_price / 100 }} ₾</span>
                        @else 
                        <span class="product-price">{{ $product_data->getProductPrice['0']->price / 100 }} ₾</span>
                        @endif
                    </div>
                    <div class="product-desc">
                        <p>
                            {!! json_decode($product_data->description)->{app()->getLocale()} !!}
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
                        <a href="javascript:;" class="btn btn-dark add-cart mr-2 font-neue" title="{{ trans('site.add_to_cart') }}">{{ trans('site.add_to_cart') }}</a>
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
                    <a class="nav-link active font-neue" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">{{ trans('site.parameters') }}:</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                    <table class="table table-striped mt-2">
                        <tbody>
                            @foreach($option_array as $option_item)
                            <tr>
                                <th style="color: #ffffff;" class="font-helvetica-regular">{{ json_decode($option_item['name'])->{app()->getLocale()} }}</th>
                                <td style="color: #ffffff;" class="font-helvetica-regular">{{ $option_item['value']->{app()->getLocale()} }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <section class="product-panel appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
                <div class="section-title">
                    <h2 class="mr-5 ls-0 mb-0 font-neue mt-2">{{ trans('site.related_products') }}</h2>
                </div>
                <div class="row grid">
                    @foreach($related_product->take(4) as $product_item)
                    <div class="grid-item col-6 col-sm-3 col-lg-3 height-xl">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{ route('actionProductsView', $product_item->id) }}" style="height: 230px;">
                                    <img src="{{ $product_item->photo }}" style="width: 100%; height: 100%;" alt="Product">
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
        <hr class="mt-0 m-b-5" />
    </div>
</main>
@endsection

@section('js')

@endsection