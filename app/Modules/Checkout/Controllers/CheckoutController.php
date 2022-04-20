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

                $PaymentCategory = new PaymentCategory();
                $PaymentCategoryList = $PaymentCategory::where('deleted_at_int', '!=', 0)->where('active', 1)->get();

                $PaymentArray = [];

                foreach($PaymentCategoryList as $PaymentCategoryKey => $PaymentCategoryItem) {
                    $Payment = new Payment();
                    $PaymentList = $Payment::where('category_id', $PaymentCategoryItem->id)->where('deleted_at_int', '!=', 0)->where('active', 1)->get();

                    foreach($PaymentList as $PaymentItem) {
                        if($PaymentCategoryItem->id == $PaymentItem->category_id) {
                            $PaymentArray[$PaymentCategoryItem->id] = [
                                'id' => $PaymentCategoryItem->id,
                                'name' => $PaymentCategoryItem->name_ge,
                                'items' => $PaymentItem, 
                            ]; 
                        }
                    }
                }

                $data = [
                    'seo' => $this->seoList('checkout'),
                    'payment_category' => $PaymentCategoryList,
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
