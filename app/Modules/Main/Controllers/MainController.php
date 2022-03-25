<?php

namespace App\Modules\Main\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Main\Models\Main;
use App\Modules\General\Models\Seo;

class MainController extends Controller
{

    public function __construct() {
        //

    }

    public function actionMainIndex() {
        $url = 'https://portotheme.com/html/porto_ecommerce/demo31-product.html';
        $content = file_get_contents($url);
        echo $content;
        exit();
        if (view()->exists('main.main_index')) {

            $data = [
                'seo' => $this->seoList('main'),
            ];

            return view('main.main_index', $data);
        } else {
            abort('404');
        }
    }
}
