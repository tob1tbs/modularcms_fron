<?php

namespace App\Modules\Payments\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Payments\Models\Payment;

class BogInstallmentController extends Controller
{

    public function __construct() {
        $this->token_url = "https://installment.bog.ge/v1/oauth2/token";
        $this->checkout_url = "https://installment.bog.ge/v1/installment/checkout";
        $this->discount_url = "https://installment.bog.ge/v1/services/installment/calculate";
    }

    public function getDiscountTypes() {
        
    }

    public function getToken() {
        
    }

    public function getOrder() {
        
    }
}
