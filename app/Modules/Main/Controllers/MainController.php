<?php

namespace App\Modules\Main\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Main\Models\Main;
use App\Modules\General\Models\Seo;
use App\Modules\General\Models\Slider;
use App\Modules\Products\Models\Product;
use App\Modules\Products\Models\ProductCategory;

class MainController extends Controller
{

    public function __construct() {
        
    }

    public function actionMainIndex() {
        if (view()->exists('main.main_index')) {

            $Product = new Product();
            $ProductList = $Product::where('deleted_at_int', '!=', 0)->where('active', 1)
            ->orderBy('id', 'DESC')
            ->get()
            ->load('getCategoryData')
            ->load('getProductPrice');

            $Slider = new Slider();
            $SliderList = $Slider::where('deleted_at_int', '!=', 0)->whereNull('is_banner')->where('active', 1)->orderBy('id', 'DESC')->get();

            $BannerList = $Slider::where('deleted_at_int', '!=', 0)->where('is_banner', 1)->where('active', 1)->orderBy('id', 'DESC')->limit(2)->get();

            $data = [
                'seo' => $this->seoList('main'),
                'product_list' => $ProductList,
                'slider_list' => $SliderList,
                'banner_list' => $BannerList,
            ];

            return view('main.main_index', $data);
        } else {
            abort('404');
        }
    }

    public function actionMainAbout() {
        if (view()->exists('main.main_about')) {

            $data = [
                'seo' => $this->seoList('main'),
            ];

            return view('main.main_about', $data);
        } else {
            abort('404');
        }
    }

    public function actionMainContact() {
        if (view()->exists('main.main_contact')) {

            $data = [
                'seo' => $this->seoList('main'),
            ];

            return view('main.main_contact', $data);
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
