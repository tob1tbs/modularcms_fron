<?php

namespace App\Modules\Main\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Main\Models\Main;
use App\Modules\Products\Models\Product;

use Cart;
use Response;

class MainAjaxController extends Controller
{

    public function __construct() {
        //
    }

    public function ajaxGeneralAddToCart(Request $Request) {
        if($Request->isMethod('POST')) {
            $Product = new Product();
            $ProductData = $Product::find($Request->product_id)->load('getProductPrice');
            Cart::add([
                'id' => $ProductData->id,
                'name' => $ProductData->name_ge,
                'price' => $ProductData->getProductPrice[0]->price / 100,
                'quantity' => 1,
                'attributes' => [
                    'photo' => $ProductData->photo,
                ],
            ]);

            return Response::json([
                'status' => true, 
                'CartData' => Cart::getContent(),
                'CartQuantity' => count(Cart::getContent()),
                'CartTotal' => Cart::getSubTotal(),
            ]);
        } else {
            return Response::json(['status' => false, 'message' => 'დაფიქსირდა შეცდომა გთხოვთ სცადოთ თავიდან !!!'], 200);
        }
    }
}
