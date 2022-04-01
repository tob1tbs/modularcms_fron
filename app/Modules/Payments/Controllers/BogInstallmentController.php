<?php

namespace App\Modules\Payments\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Payments\Models\Payment;

use Cart;

class BogInstallmentController extends Controller
{

    public function __construct() {
        $this->token_url = "https://installment.bog.ge/v1/oauth2/token";
        $this->checkout_url = "https://installment.bog.ge/v1/installment/checkout";
        $this->discount_url = "https://installment.bog.ge/v1/services/installment/calculate";
    }

    public function getDiscountTypes() {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->discount_url."?amount=500&client_id=".$this->client_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;
    }

    public function getToken() {
        $encode = base64_encode($this->client_id.":".$this->secret_key);
        $curl = curl_init(); 
        curl_setopt_array($curl, array(
        CURLOPT_URL => $this->token_url, 
        CURLOPT_RETURNTRANSFER => true, 
        CURLOPT_ENCODING => '', 
        CURLOPT_MAXREDIRS => 10, 
        CURLOPT_TIMEOUT => 0, 
        CURLOPT_FOLLOWLOCATION => true, 
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
        CURLOPT_CUSTOMREQUEST => 'POST', 
        CURLOPT_POSTFIELDS => 'grant_type=client_credentials', 
        CURLOPT_HTTPHEADER => array(
         'Content-Type: application/x-www-form-urlencoded', 
         'Authorization: Basic '.$encode,
            ), 
        ));
        $response = curl_exec($curl);
        $response = json_decode($response, true);
        $_SESSION['LOAN_AUTH_TOKEN'] = $response['access_token'];
        return $response['access_token'];
    }

    public function getOrder($order_id) {
        $Cart = Cart::getContent();
        $CartArray = [];

        for($i=0; $i < count ($Cart); $i++){
            $CartArray[$i] = [
                "total_item_amount" => $Cart[$i]['price'] * $Cart[$i]['amount'], 
                "item_description" => $Cart[$i]['product'], 
                "item_vendor_code" => $Cart[$i]['product_id'],
                "total_item_qty" => $Cart[$i]['amount'],
                "product_image_url" => "https://example.com/image/123456.jpg",
                "item_site_detail_url" => "https://example.com/prod/123456"
            ];
        };

        if(isset($_SESSION['ORDER_ARRAY']['shipping']) && $_SESSION['ORDER_ARRAY']['shipping'] > 0) {
            $DeliveryArray = [
                "total_item_amount" => $_SESSION['ORDER_ARRAY']['shipping'] * 1.00, 
                "item_description" => 'მიწოდება', 
                "item_vendor_code" => '99999999999999999',
                "total_item_qty" => '1',
                "product_image_url" => "https://example.com/image/123456.jpg",
                "item_site_detail_url" => "https://example.com/prod/123456"
            ];
            array_push($CartArray, $DeliveryArray);
        }

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => $this->checkout_url, 
        CURLOPT_RETURNTRANSFER => true, 
        CURLOPT_ENCODING => '', 
        CURLOPT_MAXREDIRS => 10, 
        CURLOPT_TIMEOUT => 0, 
        CURLOPT_FOLLOWLOCATION => true, 
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
        CURLOPT_CUSTOMREQUEST => 'POST', 
        CURLOPT_POSTFIELDS => '{
                  "intent": "LOAN",
                  "installment_month": "'.$_POST['bog_loan_month'].'",
                  "installment_type":"'.$_POST['bog_loan_discount_code'].'",
                  "shop_order_id" : "'.$order_id.'",
                  "success_redirect_url": "https://primestore.ge/index.php?dispatch=bog_status.bog_loan_status",
                  "fail_redirect_url": "https://primestore.ge/index.php?dispatch=bog_status.bog_loan_status",
                  "reject_redirect_url": "https://primestore.ge/index.php?dispatch=bog_status.bog_loan_status",
                  "locale" : "ka",
                  "purchase_units": [
                    {
                      "amount": {
                        "currency_code": "GEL",
                        "value": "'.$_SESSION['ORDER_ARRAY']['total_price'].'"
                      },
                      "industry_type" : "ECOMMERCE"
                    }
                  ],
                  "cart_items": '.json_encode($product_array_temp, JSON_UNESCAPED_UNICODE).'
            }',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.self::getToken(), 
                'Content-Type: application/json',
            ),
        ));
        $order_response = curl_exec($curl);
        $order_response = json_decode($order_response, true);
        if($order_response['links'][1]['rel'] == 'target') {
            $_SESSION['BOG_INSTALLMENT_ORDER_ID'] = $order_response['order_id'];
            return header('Location: '.$order_response['links'][1]['href']);
        } 

        print_r($order_response);
        exit();
    }
}
