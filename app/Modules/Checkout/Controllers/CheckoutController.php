<?php

namespace App\Modules\Checkout\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Checkout\Models\Checkout;

class CheckoutController extends Controller
{

    public function __construct() {
        //
    }

    public function actionCheckoutIndex() {
        if (view()->exists('checkout.checkout_index')) {
            $data = [
                'seo' => $this->seoList('checkout'),
            ];
            return view('checkout.checkout_index', $data);
        } else {
            abort('404');
        }
    }

    public function actionCartIndex() {
        if (view()->exists('checkout.cart_index')) {
            $data = [
                'seo' => $this->seoList('cart'),
            ];
            return view('checkout.cart_index', $data);
        } else {
            abort('404');
        }
    }
}
