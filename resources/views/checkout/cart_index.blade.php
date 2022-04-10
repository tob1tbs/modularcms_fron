@extends('layout.layout')

@section('css')

@endsection

@section('content')
<main class="main">
    <div class="container">
        <div class="wishlist-title">
            <h2 class="p-2 font-neue mt-3 text-center">{{ trans('site.my_cart') }}</h2>
        </div>
        <div class="wishlist-table-container">
            <table class="table table-wishlist mb-0">
                <thead>
                    <tr style="color: #ffffff;" class="font-neue">
                        <th class="thumbnail-col"></th>
                        <th class="product-col">პროდუქტი</th>
                        <th class="price-col">ღირებულება</th>
                        <th class="status-col">მარაგი</th>
                        <th class="action-col">მოქმედება</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="product-row">
                        <td>
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="assets/images/products/product-4.jpg" alt="product">
                                </a>
                                <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                            </figure>
                        </td>
                        <td>
                            <h5 class="product-title">
                                <a href="product.html">Men Watch</a>
                            </h5>
                        </td>
                        <td class="price-box">$17.90</td>
                        <td><span class="stock-status">In stock</span></td>
                        <td class="action">
                            <a href="ajax/product-quick-view.html" class="btn btn-quickview mt-1 mt-md-0" title="Quick View">Quick View</a>
                            <button class="btn btn-dark btn-add-cart product-type-simple btn-shop"> ADD TO CART </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection

@section('js')

@endsection