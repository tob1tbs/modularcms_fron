<?php

namespace App\Modules\Products\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Products\Models\Product;

class ProductsController extends Controller
{

    public function __construct() {
        //
    }

    public function actionProductsIndex(Request $Request) {
        if (view()->exists('products.products_index')) {
            $Product = new Product();
            $ProductList = $Product::where('deleted_at_int', '!=', 0);

            $ProductList = $ProductList->where('active', 1)->get();

            $data = [
                'product_list' => $ProductList,
                'seo' => $this->seoList('products'),
            ];

            return view('products.products_index', $data);
        } else {
            abort('404');
        }
    }

    public function actionProductsView(Request $Request) {
        if (view()->exists('products.products_view')) {

            $Product = new Product();
            $ProductData = $Product::where('id', $Request->id)->first();

            $data = [
                'product_data' => $ProductData,
                'seo' => $this->seoList('products'),
            ];

            return view('products.products_view', $data);
        } else {
            abort('404');
        }
    }
}
