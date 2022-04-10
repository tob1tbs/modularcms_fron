<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
                <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                    @if(app()->getLocale() == 'ge') 
                    <a href="javascript:;"><i class="flag-ge flag"></i>GE</a>
                    @else
                    <a href="javascript:;"><i class="flag-us flag"></i>EN</a>
                    @endif
                    <div class="header-menu">
                        <ul>
                            <li><a href="{{ LaravelLocalization::getLocalizedURL('ge') }}"><i class="flag-ge flag mr-2"></i>GE</a></li>
                            <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}"><i class="flag-us flag mr-2"></i>EN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="{{ route('actionMainIndex') }}" class="logo">
                    <img src="{{ asset('assets/images/logo-white.png') }}" alt="turbo pc" title="{{ $seo['title'] }}">
                </a>
            </div>
            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu font-neue">
                        <li class="active">
                            <a href="{{ route('actionProductsIndex') }}"><i class="icon-bars mr-3"></i>{{ trans('site.categories') }}</a>
                            <div class="megamenu megamenu-fixed-width">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">{{ trans('site.categories') }}</a>
                                        <ul class="submenu">
                                            @foreach($productCategoryList->take(10) as $category_item)
                                            <li><a href="{{ route('actionProductsIndex', 'category_id='.$category_item->id.'') }}">{{ json_decode($category_item->name)->{app()->getLocale()} }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-deal"><a href="{{ route('actionConstructorIndex') }}"><i class="icon-wrench icons mr-3"></i></i>{{ trans('site.build_your_pc') }}</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <a href="{{ route('actionUsersLogin') }}" class="header-icon header-icon-user mb-0" title="Login"><i class="icon-user-2"></i></a>
                <div class="header-icon header-search header-search-popup header-search-category d-none d-sm-block mb-0">
                    <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                    <form action="{{ route('actionProductsIndex') }}" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="search_query" id="search_query" placeholder="{{ trans('site.search_text') }}">
                            <button class="btn icon-search-3" type="submit"></button>
                        </div>
                    </form>
                </div>
                <div class="dropdown cart-dropdown">
                    <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="minicart-icon"></i>
                        <span class="cart-count badge-circle">{{ Cart::getTotalQuantity() }}</span>
                    </a>
                    <div class="cart-overlay"></div>
                    <div class="dropdown-menu mobile-cart">
                        <a href="#" class="btn-close">×</a>
                        <div class="dropdownmenu-wrapper custom-scrollbar">
                            <div class="dropdown-cart-header">{{ trans('site.my_cart') }}</div>
                            @if(count(Cart::getContent()) > 0)
                                @foreach(Cart::getContent() as $cart_item)
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="demo31-product.html">Ultimate 3D Bluetooth Speaker</a>
                                            </h4>
                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span> × $99.00
                                            </span>
                                        </div>
                                        <figure class="product-image-container">
                                            <a href="demo31-product.html" class="product-image">
                                                <img src="assets/images/demoes/demo31/products/small/product-1.jpg" alt="product" width="80" height="80">
                                            </a>
                                            <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                        </figure>
                                    </div>
                                </div>
                                @endforeach
                            @else
                            {{ trans('site.your_cart_is_empty') }}
                            @endif
                            <div class="dropdown-cart-total">
                                <span>{{ trans('site.cart_total') }}:</span>
                                <span class="cart-total-price float-right">$134.00</span>
                            </div>
                            <div class="dropdown-cart-action">
                                <a href="{{ route('actionCartIndex') }}" class="btn btn-gray btn-block view-cart">{{ trans('site.view_cart') }}</a>
                                <a href="{{ route('actionCheckoutIndex') }}" class="btn btn-dark btn-block">{{ trans('site.checkout') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>