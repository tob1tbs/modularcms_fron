<?php

namespace App\Modules\Checkout\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Checkout\Models\Checkout;
use App\Modules\Orders\Models\Order;

use App\Modules\Payments\Controllers\BogPaymentController;
use App\Modules\Payments\Controllers\BogInstallmentController;

class CheckoutAjaxController extends Controller
{

    public function __construct() {
        //
    }

    public function ajaxCheckoutSubmit(Request $Request) {
        if($Request->isMethod('POST')) {

            
        } else {
            return Response::json(['status' => false]);
        }
    }
}
