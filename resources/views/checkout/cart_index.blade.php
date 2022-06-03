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
                        <th class="price-col">რაოდენობა</th>
                        <th class="status-col">მარაგი</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count(Cart::getContent()) > 0)
                        @foreach(Cart::getContent() as $cart_item)
                        <tr class="product-row">
                            <td>
                                <figure class="product-image-container">
                                    <a href="{{ route('actionProductsView', $cart_item->id) }}" class="product-image">
                                        <img src="{{ $cart_item->attributes->photo }}" alt="product" style="width: 120px; height: 120px;">
                                    </a>
                                    <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                </figure>
                            </td>
                            <td>
                                <h5 class="product-title">
                                    <a href="{{ route('actionProductsView', $cart_item->id) }}">{{ $cart_item->name }}</a>
                                </h5>
                            </td>
                            <td class="price-box">{{ number_format($cart_item->price, 2) }}</td>
                            <td class="price-box">{{ $cart_item->quantity }}</td>
                            <td><span class="stock-status">In stock</span></td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection

@section('js')

@endsection