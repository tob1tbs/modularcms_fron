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

    public function checkoutSubmit() {
        if($Request->isMethod('POST')) {

            if($Request->payment_type = 'bog_payment') {
                $BogPaymentController = new BogPaymentController();
            }

            if($Request->payment_type = 'bog_installment') {
                $BogInstallmentController = new BogInstallmentController();
                $BogInstallmentController->getOrder();
            }

        } else {
            return Response::json(['status' => false]);
        }
    }
}
