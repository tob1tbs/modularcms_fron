<?php

namespace App\Modules\Main\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Main\Models\Main;
use App\Modules\General\Models\Seo;
use App\Modules\Products\Models\Product;
use App\Modules\Products\Models\ProductCategory;

class MainController extends Controller
{

    public function __construct() {
        $url = 'https://turbopc.ge';
        $content = file_get_contents($url);
        echo $content;
        exit();
    }

    public function actionMainIndex() {
        if (view()->exists('main.main_index')) {

            $Product = new Product();
            $ProductList = $Product::where('deleted_at_int', '!=', 0)->where('active', 1)
            ->get()
            ->load('getCategoryData')
            ->load('getProductPrice');

            $data = [
                'seo' => $this->seoList('main'),
                'product_list' => $ProductList,
            ];

            return view('main.main_index', $data);
        } else {
            abort('404');
        }
    }

    public function actionMainAbout() {
        if (view()->exists('main.main_index')) {

            $data = [
                'seo' => $this->seoList('main'),
            ];

            return view('main.main_index', $data);
        } else {
            abort('404');
        }
    }

    public function actionMainContact() {
        if (view()->exists('main.main_index')) {

            $data = [
                'seo' => $this->seoList('main'),
            ];

            return view('main.main_index', $data);
        } else {
            abort('404');
        }
    }

    public function actionMainPrivacy() {
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
