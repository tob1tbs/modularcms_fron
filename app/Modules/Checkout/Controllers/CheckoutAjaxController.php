<?php

namespace App\Modules\Checkout\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Checkout\Models\Checkout;
use App\Modules\Orders\Models\Order;

class CheckoutAjaxController extends Controller
{

    public function __construct() {
        //
    }

    public function checkoutSubmit() {
        if($Request->isMethod('POST')) {

        } else {
            return Response::json(['status' => false]);
        }
    }
}
