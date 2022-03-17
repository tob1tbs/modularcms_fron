<?php

namespace App\Modules\Ajax\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{

    public function __construct() {
        //
    }

    public function ajaxAddToCart(Request $Request) {
        if($Request->isMethod('POST')) {

        } else {
            return Response::json(['status' => true]);
        }
    }
}
