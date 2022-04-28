<?php

namespace App\Modules\Checkout\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Checkout\Models\Checkout;
use App\Modules\Payments\Models\PaymentCategory;
use App\Modules\Payments\Models\Payment;

use Auth;

class CheckoutController extends Controller
{

    public function __construct() {
        //
    }

    public function actionCheckoutIndex() {
        if(!Auth::check()) {
            return redirect()->route('actionUsersLogin');
        } else {
            if (view()->exists('checkout.checkout_index')) {

                $Payment = new Payment();
                $PaymentList = $Payment::select('id', 'key', 'name_ge', 'name_en', 'photo')->where('deleted_at_int', '!=', 0)->where('active', 1)->orderBy('category_id', 'DESC')->get();

                $data = [
                    'seo' => $this->seoList('checkout'),
                    'payment_list' => $PaymentList,
                ];
                return view('checkout.checkout_index', $data);
            } else {
                abort('404');
            }
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
