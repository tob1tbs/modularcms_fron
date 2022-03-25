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
                            <!---->
                            <div class="product-label label-sale">
                                -16%
                            </div>
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
                <!-- End .product-single-gallery -->

                <div class="col-lg-7 col-md-6 product-single-details">
                    <h1 class="product-title">Call of War 2</h1>

                    <div class="product-nav">
                        <div class="product-prev">
                            <a href="#">
                                <span class="product-link"></span>

                                <span class="product-popup">
                                    <span class="box-content">
                                        <img alt="product" width="150" height="150"
                                            src="assets/images/demoes/demo31/products/product-3.jpg"
                                            style="padding-top: 0px;">

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
                                        <img alt="product" width="150" height="150"
                                            src="assets/images/demoes/demo31/products/product-4.jpg"
                                            style="padding-top: 0px;">

                                        <span>PEL 2019</span>
                                </span>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:60%"></span>
                            <!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <!-- End .product-ratings -->

                        <a href="#" class="rating-link">( 6 Reviews )</a>
                    </div>
                    <!-- End .ratings-container -->

                    <hr class="short-divider">

                    <div class="price-box">
                        <span class="product-price">$15.00 &ndash; </span>
                        <span class="product-price"> $35.00</span>
                    </div>
                    <!-- End .price-box -->

                    <div class="product-desc">
                        <p>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                            placerat eleifend leo.
                        </p>
                    </div>
                    <!-- End .product-desc -->

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
                        <!---->
                        <li>
                            SKU:
                            <strong>R0001</strong>
                        </li>

                        <li>
                            CATEGORIES:
                            <strong>
                                <a href="#" class="product-category">HORROR</a>
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
                        <!---->
                    </div>

                    <div class="product-action">
                        <div class="price-box product-filtered-price">
                            <del class="old-price"><span>$286.00</span></del>
                            <span class="product-price">$245.00</span>
                        </div>

                        <div class="product-single-qty">
                            <input class="horizontal-quantity form-control" type="text">
                        </div>
                        <!-- End .product-single-qty -->

                        <a href="javascript:;" class="btn btn-dark add-cart mr-2" title="Add to Cart">Add to
                            Cart</a>

                        <a href="cart.html" class="btn btn-primary text-white view-cart d-none">View cart</a>
                    </div>
                    <!-- End .product-action -->

                    <hr class="divider mb-0 mt-0">

                    <div class="product-single-share mb-2">
                        <label class="sr-only">Share:</label>

                        <div class="social-icons mr-2">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                            <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                            <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
                            <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                        </div>
                        <!-- End .social-icons -->

                        <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i
                                class="icon-wishlist-2"></i><span>Add to
                                Wishlist</span></a>
                    </div>
                    <!-- End .product single-share -->
                </div>
                <!-- End .product-single-details -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .product-single-container -->

        <div class="product-single-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Additional
                        Information</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews (1)</a>
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
                    <!-- End .product-desc-content -->
                </div>
                <!-- End .tab-pane -->

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
                <!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                    <div class="product-reviews-content">
                        <h3 class="reviews-title">1 review for Men Black Sports Shoes</h3>

                        <div class="comment-list">
                            <div class="comments">
                                <figure class="img-thumbnail">
                                    <img src="assets/images/blog/author.jpg" alt="author" width="80" height="80">
                                </figure>

                                <div class="comment-block">
                                    <div class="comment-header">
                                        <div class="comment-arrow"></div>

                                        <div class="ratings-container float-sm-right">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:60%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>

                                        <span class="comment-by">
                                            <strong>Joe Doe</strong> – April 12, 2018
                                        </span>
                                    </div>

                                    <div class="comment-content">
                                        <p>Excellent.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="add-product-review">
                            <h3 class="review-title">Add a review</h3>

                            <form action="#" class="comment-form m-0">
                                <div class="rating-form">
                                    <label for="rating">Your rating <span class="required">*</span></label>
                                    <span class="rating-stars">
                                        <a class="star-1" href="#">1</a>
                                        <a class="star-2" href="#">2</a>
                                        <a class="star-3" href="#">3</a>
                                        <a class="star-4" href="#">4</a>
                                        <a class="star-5" href="#">5</a>
                                    </span>

                                    <select name="rating" id="rating" required="" style="display: none;">
                                        <option value="">Rate…</option>
                                        <option value="5">Perfect</option>
                                        <option value="4">Good</option>
                                        <option value="3">Average</option>
                                        <option value="2">Not that bad</option>
                                        <option value="1">Very poor</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Your review <span class="required">*</span></label>
                                    <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                </div>
                                <!-- End .form-group -->


                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                        <!-- End .form-group -->
                                    </div>

                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                        <!-- End .form-group -->
                                    </div>

                                    <div class="col-md-12">
                                        <div class=" custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="save-name" />
                                            <label class="custom-control-label mb-0" for="save-name">Save my
                                                name, email, and website in this browser for the next time I
                                                comment.</label>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Submit">
                            </form>
                        </div>
                        <!-- End .add-product-review -->
                    </div>
                    <!-- End .product-reviews-content -->
                </div>
                <!-- End .tab-pane -->
            </div>
            <!-- End .tab-content -->
        </div>
        <!-- End .product-single-tabs -->

        <div class="products-section pt-0">
            <h2 class="section-title">Related Products</h2>

            <div class="products-slider owl-carousel owl-theme dots-top dots-small 5col" data-owl-options="{
                'dots': true
            }">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo31-product.html">
                            <img src="assets/images/demoes/demo31/products/product-12.jpg" width="220" height="308" alt="Product" />
                        </a>

                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/demo31-product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
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
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>

                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo31-product.html">
                            <img src="assets/images/demoes/demo31/products/product-13.jpg" width="220" height="308" alt="Product" />
                        </a>

                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/demo31-product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
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
                            <a href="demo31-product.html">Epic Future 2</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>

                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo31-product.html">
                            <img src="assets/images/demoes/demo31/products/product-14.jpg" width="220" height="308" alt="Product" />
                        </a>

                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/demo31-product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
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
                            <a href="demo31-product.html">Need For Race</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>

                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo31-product.html">
                            <img src="assets/images/demoes/demo31/products/product-15.jpg" width="220" height="308" alt="Product" />
                        </a>

                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/demo31-product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
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
                            <a href="demo31-product.html">Old Wars 2</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>

                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo31-product.html">
                            <img src="assets/images/demoes/demo31/products/product-16.jpg" width="220" height="308" alt="Product" />
                        </a>

                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/demo31-product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
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
                            <a href="demo31-product.html">Mistik World 3</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>

                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo31-product.html">
                            <img src="assets/images/demoes/demo31/products/product-3.jpg" width="220" height="308" alt="Product" />
                        </a>

                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/demo31-product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
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
                            <a href="demo31-product.html">Eouc Future 3</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <!-- End .products-slider -->
        </div>
        <!-- End .products-section -->

        <hr class="mt-0 m-b-5" />

        <div class="product-widgets-container row pb-2">
            <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                <h4 class="section-sub-title">Featured Products</h4>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/demoes/demo31/products/small/product-1.jpg" width="74" height="74" alt="product">
                        </a>
                    </figure>

                    <div class="product-details">
                        <h3 class="product-title"> <a href="product.html">War 2</a> </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->

                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>

                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/demoes/demo31/products/small/product-2.jpg" width="74" height="74" alt="product">
                        </a>
                    </figure>

                    <div class="product-details">
                        <h3 class="product-title"> <a href="product.html">Porto Speed</a> </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->

                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>

                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/demoes/demo31/products/small/product-3.jpg" width="74" height="74" alt="product">
                        </a>
                    </figure>

                    <div class="product-details">
                        <h3 class="product-title"> <a href="product.html">Epic Future 3</a> </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->

                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                <h4 class="section-sub-title">Best Selling Products</h4>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/demoes/demo31/products/small/product-4.jpg" width="74" height="74" alt="product">
                        </a>
                    </figure>

                    <div class="product-details">
                        <h3 class="product-title"> <a href="product.html">Gas Station 5</a> </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->

                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>

                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/demoes/demo31/products/small/product-5.jpg" width="74" height="74" alt="product">
                        </a>
                    </figure>

                    <div class="product-details">
                        <h3 class="product-title"> <a href="product.html">Destruction 3</a> </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->

                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>

                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/demoes/demo31/products/small/product-6.jpg" width="74" height="74" alt="product">
                        </a>
                    </figure>

                    <div class="product-details">
                        <h3 class="product-title"> <a href="product.html">Gods 2 - Porto Games</a> </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                        </div>

                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                <h4 class="section-sub-title">Latest Products</h4>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/demoes/demo31/products/small/product-7.jpg" width="74" height="74" alt="product">
                        </a>
                    </figure>

                    <div class="product-details">
                        <h3 class="product-title"> <a href="product.html">Call of War 3</a> </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>

                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/demoes/demo31/products/small/product-8.jpg" width="74" height="74" alt="product">
                        </a>
                    </figure>

                    <div class="product-details">
                        <h3 class="product-title"> <a href="product.html">Epic Future 2</a> </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>

                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/demoes/demo31/products/small/product-9.jpg" width="74" height="74" alt="product">
                        </a>
                    </figure>

                    <div class="product-details">
                        <h3 class="product-title"> <a href="product.html">Need For Race</a> </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                <h4 class="section-sub-title">Top Rated Products</h4>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/demoes/demo31/products/small/product-4.jpg" width="74" height="74" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <h3 class="product-title"> <a href="product.html">Gas Station 5</a> </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                        </div>
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>

                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/demoes/demo31/products/small/product-5.jpg" width="74" height="74" alt="product">
                        </a>
                    </figure>

                    <div class="product-details">
                        <h3 class="product-title"> <a href="product.html">Destruction 3</a> </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/demoes/demo31/products/small/product-6.jpg" width="74" height="74" alt="product">
                        </a>
                    </figure>

                    <div class="product-details">
                        <h3 class="product-title"> <a href="product.html">Gods 2 - Porto Games</a> </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                        </div>
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('js')

@endsection