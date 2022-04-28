<?php

class CityPayController {

    public function __construct() {
        //
    }

    public function generateOrder() {
        $date = new DateTime();

        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://v2-listener.citypay.io/api/generateOrder',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
              'customer_id' => '1488',
              'access_token' => '9d3efff210e08587a0e5ea008e5f2d40',
              'order_id' => '111',
              'order_token' => $date->getTimestamp().'-'.'111',
              'amount' => '100',
            ),
        ));
        $response = curl_exec($curl);
        $response = json_decode($response);
        curl_close($curl);
        return header("Location:". $response->data->payment_url);
        exit();
    }

    public function getOrderInformation() {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://v2-order-api.citypay.io/order/1650528389-111',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = curl_exec($curl);
        $response = json_decode($response);
        print_r($response->data->status->code);


    }
}

$CityPayController = new CityPayController();
$CityPayController->getOrderInformation();