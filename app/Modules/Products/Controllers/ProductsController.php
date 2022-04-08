<?php

namespace App\Modules\Products\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Products\Models\Product;
use App\Modules\Products\Models\ProductCategory;
use App\Modules\Products\Models\ProductOption;
use App\Modules\Products\Models\ProductOptionValue;

class ProductsController extends Controller
{

    public function __construct() {
        //
    }

    public function actionProductsIndex(Request $Request) {
        if (view()->exists('products.products_index')) {
            $Product = new Product();
            $ProductList = $Product::where('deleted_at_int', '!=', 0)->where('active', 1);

            if($Request->isMethod('GET')) {
                if($Request->has('category_id') && $Request->category_id > 1) {
                    // PRODUCT
                    $ProductList = $ProductList->where('category_id', $Request->category_id);
                    
                    // CHILD CATEGORY
                    $ProductCategory = new ProductCategory();
                    $ChildCategoryList = $ProductCategory::where('parent_id', $Request->category_id)->where('deleted_at_int', '!=', 0)->where('active', 1)->get(); 

                    // PRODUCT OPTIONS
                    $ProductOption = new ProductOption();
                    $ProductOptionList = $ProductOption::where('deleted_at_int', '!=', 0)->where('category_id', $Request->category_id)->get();

                    $ProductOptionValue = new ProductOptionValue();
                    $ProductOptionValueList = $ProductOptionValue::where('deleted_at_int', '!=', 0)->where('active', 1)->get();
                } else {
                    $ChildCategoryList = [];
                    $ProductOptionList = [];
                    $ProductOptionValueList = [];
                }

                if($Request->has('child_category') && $Request->child_category > 0) {
                    $ProductList->where('child_category_id', $Request->child_category);
                }
            }

            $ProductList = $ProductList->orderBy('id', 'DESC')->get();

            $data = [
                'product_list' => $ProductList,
                'child_category_list' => $ChildCategoryList,
                'option_list' => $ProductOptionList,
                'option_value_list' => $ProductOptionValueList,
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
