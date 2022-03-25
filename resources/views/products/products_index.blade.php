@extends('layout.layout')

@section('css')

@endsection

@section('content')
<div role="main" class="main shop py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <aside class="sidebar">
                    <form action="page-search-results.html" method="get">
                        <div class="input-group mb-3 pb-1">
                            <input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
                            </span>
                        </div>
                    </form>
                    <h5 class="font-weight-bold pt-3">Categories</h5>
                    <ul class="nav nav-list flex-column">
                        <li class="nav-item"><a class="nav-link" href="#">Arts &amp; Crafts</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Automotive</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Baby</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Books</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Eletronics</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Women's Fashion</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Men's Fashion</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Health &amp; Household</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Home &amp; Kitchen</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Military Accessories</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Movies &amp; Television</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sports &amp; Outdoors</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Tools &amp; Home Improvement</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Toys &amp; Games</a></li>
                    </ul>
                    <h5 class="font-weight-bold pt-5">Tags</h5>
                    <div class="mb-3 pb-1">
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">Nike</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">Travel</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">Sport</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">TV</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">Books</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">Tech</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">Adidas</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">Promo</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">Reading</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">Social</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">Books</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">Tech</span></a>
                        <a href="#"><span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">New</span></a>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <h5 class="font-weight-bold pt-5">Top Rated Products</h5>
                            <ul class="simple-post-list">
                                <li>
                                    <div class="post-image">
                                        <div class="d-block">
                                            <a href="shop-product-sidebar-left.html">
                                                <img alt="" width="60" height="60" class="img-fluid" src="img/products/product-grey-1.jpg">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <a href="shop-product-sidebar-left.html">Photo Camera</a>
                                        <div class="post-meta text-dark font-weight-semibold">
                                            $299
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-image">
                                        <div class="d-block">
                                            <a href="shop-product-sidebar-left.html">
                                                <img alt="" width="60" height="60" class="img-fluid" src="img/products/product-grey-4.jpg">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <a href="shop-product-sidebar-left.html">Luxury bag</a>
                                        <div class="post-meta text-dark font-weight-semibold">
                                            $199
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-image">
                                        <div class="d-block">
                                            <a href="shop-product-sidebar-left.html">
                                                <img alt="" width="60" height="60" class="img-fluid" src="img/products/product-grey-8.jpg">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <a href="shop-product-sidebar-left.html">Military Rucksack</a>
                                        <div class="post-meta text-dark font-weight-semibold">
                                            $49
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9">

                <div class="masonry-loader masonry-loader-loaded">
                    <div class="row products product-thumb-info-list" data-plugin-masonry="" data-plugin-options="{'layoutMode': 'fitRows'}" style="position: relative; height: 1087.36px;">
                        <div class="col-sm-6 col-lg-4 product" style="position: absolute; left: 0px; top: 0px;">
                            <a href="shop-product-sidebar-left.html">
                                <span class="onsale">Sale!</span>
                            </a>
                            <span class="product-thumb-info border-0">
                                <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                    <span class="text-uppercase text-1">Add to Cart</span>
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <span class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-1.jpg">
                                    </span>
                                </a>
                                <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                    <a href="shop-product-sidebar-left.html">
                                        <h4 class="text-4 text-primary">Photo Camera</h4>
                                        <span class="price">
                                            <del><span class="amount">$325</span></del>
                                            <ins><span class="amount text-dark font-weight-semibold">$299</span></ins>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </div>
                        <div class="col-sm-6 col-lg-4 product" style="position: absolute; left: 284.984px; top: 0px;">
                            <span class="product-thumb-info border-0">
                                <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                    <span class="text-uppercase text-1">Add to Cart</span>
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <span class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-2.jpg">
                                    </span>
                                </a>
                                <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                    <a href="shop-product-sidebar-left.html">
                                        <h4 class="text-4 text-primary">Golf Bag</h4>
                                        <span class="price">
                                            <span class="amount text-dark font-weight-semibold">$72</span>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </div>
                        <div class="col-sm-6 col-lg-4 product" style="position: absolute; left: 569.968px; top: 0px;">
                            <span class="product-thumb-info border-0">
                                <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                    <span class="text-uppercase text-1">Add to Cart</span>
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <span class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-3.jpg">
                                    </span>
                                </a>
                                <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                    <a href="shop-product-sidebar-left.html">
                                        <h4 class="text-4 text-primary">Workout</h4>
                                        <span class="price">
                                            <span class="amount text-dark font-weight-semibold">$60</span>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </div>
                        <div class="col-sm-6 col-lg-4 product" style="position: absolute; left: 0px; top: 362.453px;">
                            <span class="product-thumb-info border-0">
                                <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                    <span class="text-uppercase text-1">Add to Cart</span>
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <span class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-4.jpg">
                                    </span>
                                </a>
                                <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                    <a href="shop-product-sidebar-left.html">
                                        <h4 class="text-4 text-primary">Luxury bag</h4>
                                        <span class="price">
                                            <span class="amount text-dark font-weight-semibold">$199</span>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </div>
                        <div class="col-sm-6 col-lg-4 product" style="position: absolute; left: 284.984px; top: 362.453px;">
                            <span class="product-thumb-info border-0">
                                <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                    <span class="text-uppercase text-1">Add to Cart</span>
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <span class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-5.jpg">
                                    </span>
                                </a>
                                <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                    <a href="shop-product-sidebar-left.html">
                                        <h4 class="text-4 text-primary">Ladies' handbag</h4>
                                        <span class="price">
                                            <span class="amount text-dark font-weight-semibold">$189</span>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </div>
                        <div class="col-sm-6 col-lg-4 product" style="position: absolute; left: 569.968px; top: 362.453px;">
                            <a href="shop-product-sidebar-left.html">
                                <span class="onsale">Sale!</span>
                            </a>
                            <span class="product-thumb-info border-0">
                                <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                    <span class="text-uppercase text-1">Add to Cart</span>
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <span class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-6.jpg">
                                    </span>
                                </a>
                                <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                    <a href="shop-product-sidebar-left.html">
                                        <h4 class="text-4 text-primary">Baseball Cap</h4>
                                        <span class="price">
                                            <del><span class="amount">$25</span></del>
                                            <ins><span class="amount text-dark font-weight-semibold">$22</span></ins>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </div>
                        <div class="col-sm-6 col-lg-4 product" style="position: absolute; left: 0px; top: 724.906px;">
                            <span class="product-thumb-info border-0">
                                <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                    <span class="text-uppercase text-1">Add to Cart</span>
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <span class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-7.jpg">
                                    </span>
                                </a>
                                <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                    <a href="shop-product-sidebar-left.html">
                                        <h4 class="text-4 text-primary">Blue Ladies Handbag</h4>
                                        <span class="price">
                                            <span class="amount text-dark font-weight-semibold">$290</span>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </div>
                        <div class="col-sm-6 col-lg-4 product" style="position: absolute; left: 284.984px; top: 724.906px;">
                            <span class="product-thumb-info border-0">
                                <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                    <span class="text-uppercase text-1">Add to Cart</span>
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <span class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-8.jpg">
                                    </span>
                                </a>
                                <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                    <a href="shop-product-sidebar-left.html">
                                        <h4 class="text-4 text-primary">Military Rucksack</h4>
                                        <span class="price">
                                            <span class="amount text-dark font-weight-semibold">$49</span>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </div>
                        <div class="col-sm-6 col-lg-4 product" style="position: absolute; left: 569.968px; top: 724.906px;">
                            <a href="shop-product-sidebar-left.html">
                                <span class="onsale">Sale!</span>
                            </a>
                            <span class="product-thumb-info border-0">
                                <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                    <span class="text-uppercase text-1">Add to Cart</span>
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <span class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-9.jpg">
                                    </span>
                                </a>
                                <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                    <a href="shop-product-sidebar-left.html">
                                        <h4 class="text-4 text-primary">Baseball</h4>
                                        <span class="price">
                                            <del><span class="amount">$15</span></del>
                                            <ins><span class="amount text-dark font-weight-semibold">$12</span></ins>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </div>
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
                <div class="bounce-loader"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection