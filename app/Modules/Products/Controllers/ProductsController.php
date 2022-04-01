<?php

namespace App\Modules\Products\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Products\Models\Product;
use App\Modules\Products\Models\ProductCategory;

class ProductsController extends Controller
{

    public function __construct() {
        //
    }

    public function actionProductsIndex(Request $Request) {
        if (view()->exists('products.products_index')) {

            $Product = new Product();
            $ProductList = $Product::where('deleted_at_int', '!=', 0)->where('active', 1)

            if($Request->isMethod('GET')) {

                if($Request->has('category') && $Request->category > 1) {
                    
                    $ProductList->where('category_id', $Request->category);
                    
                    $ProductCategory = new ProductCategory();
                    $ChildCategoryList = $ProductCategory::where('category_id', $Request->category)->where('deleted_at_int', !=, 0)->where('active', 1)->get(); 
                } else {
                    $ChildProductCategoryList = [];
                }

                if($Request->has('child_category') && $Request->child_category > 0) {
                    $ProductList->where('child_category_id', $Request->child_category);
                }
            }

            $ProductList = $ProductList->orderBy('id', 'DESC')->get();

            $data = [
                'product_list' => $ProductList,
                'child_category_list' => $ChildCategoryList,
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
