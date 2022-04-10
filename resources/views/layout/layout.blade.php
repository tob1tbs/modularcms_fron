<!DOCTYPE html>
<html>
<head>
    <title>{{ $seo['title'] }}</title>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="keywords" content="{{ $seo['keywords'] }}">
    <meta name="description" content="{{ $seo['description'] }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/icons/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/demo31.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">

    <meta property="og:title" content="{{ $seo['title'] }}" />
    <meta property="og:description" content="{{ $seo['description'] }}" >
    <meta property="og:locale" content="{{ app()->getLocale() }}" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:image" content="{{ asset('assets/images/cover.png') }}" />

    @yield('css')
    
</head>
<body>
    <div class="page-wrapper">
        @include('include.header')
        @yield('content')
        @include('include.footer')
    </div>
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li>
                        <a href="demo31-shop.html"><i class="icon-joystick font-size-lg mr-2 pr-1"></i>Games</a>
                        <ul>
                            @foreach($productCategoryList->take(15) as $category_item)
                            <li><a href="{{ route('actionProductsIndex', 'category_id='.$category_item->id.'') }}">{{ json_decode($category_item->name)->{app()->getLocale()} }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="demo31-product.html"><i class="icon-bars mr-2 pr-1"></i>Products</a>
                        <ul>
                            <li>
                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                <ul>
                                    <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                    <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                    <li><a href="product.html">SALE PRODUCT</a></li>
                                    <li><a href="product.html">FEATURED & ON SALE</a></li>
                                    <li><a href="product-sticky-info.html">WIDTH CUSTOM TAB</a></li>
                                    <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                    <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                    <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                <ul>
                                    <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                    <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                    <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                    <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                    <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                    <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                                    <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-deal"><a href="#"><i class="icon-tag-percent mr-2 pr-1"></i>Deals</a></li>
                </ul>
            </nav>
            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>
            <div class="social-icons">
                <a href="{{ $parametersArray['facebook'] }}" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                <a href="{{ $parametersArray['instagram'] }}" class="social-icon social-instagram icon-instagram" target="_blank"></a>
            </div>
        </div>
    </div>
    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="{{ route('actionMainIndex') }}">
                <i class="icon-home"></i>{{ trans('site.box_text_3') }}
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{ route('actionProductsIndex') }}" class="">
                <i class="icon-bars"></i>{{ trans('site.categories') }}
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{ route('actionMainIndex') }}" class="">
                <i class="icon-wishlist-2"></i>{{ trans('site.wishlist') }}
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{ route('actionUsersLogin') }}" class="">
                <i class="icon-user-2"></i>{{ trans('site.profile') }}
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{ route('actionCartIndex') }}" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>{{ trans('site.cart') }}
            </a>
        </div>
    </div>
    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/optional/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/optional/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/625294ba7b967b117989c1af/1g0999uou';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    @yield('js')
</body>
</html>