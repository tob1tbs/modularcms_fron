<?php

namespace App\Modules\Products\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Products\Models\Product;
use App\Modules\Products\Models\ProductCategory;
use App\Modules\Products\Models\ProductOption;
use App\Modules\Products\Models\ProductOptionValue;
use App\Modules\Products\Models\ProductOptionItem;
use App\Modules\Products\Models\ProductMeta;
use App\Modules\Products\Models\ProductBrand;

class ProductsController extends Controller
{

    public function __construct() {
        //
    }

    public function actionProductsIndex(Request $Request) {
        if (view()->exists('products.products_index')) {
            
            $ProductCategory = new ProductCategory();
            $ProductCategoryList = $ProductCategory::where('deleted_at_int', '!=', 0)->where('parent_id', 0)->where('id', '>', 1)->where('active', 1)->get();

            $ProductBrand = new ProductBrand();
            $ProductBrandList = $ProductBrand::where('deleted_at_int', '!=', 0)->where('id', '>', 1)->where('active', 1);

            if($Request->has('category_id') && !empty($Request->category_id)) {
                $ProductBrandList = $ProductBrandList->where('category_id', $Request->category_id);
            }

            if($Request->has('child_category_id') && !empty($Request->child_category_id)) {
                $ProductBrandList = $ProductBrandList->where('child_category_id', $Request->child_category_id);
            }

            $ProductBrandList = $ProductBrandList->get()->toArray();

            $CategoryArray = [];
            $OptionArray = [];

            foreach($ProductCategoryList->toArray() as $ProductCategoryItem) {
                $CategoryArray[$ProductCategoryItem['id']] = [
                    'id' => $ProductCategoryItem['id'],
                    'name' => json_decode($ProductCategoryItem['name']),
                    'child' => [],
                ];

                $ProductCategoryChild = $ProductCategory::where('parent_id', $ProductCategoryItem['id'])->where('deleted_at_int', '!=', 0)->where('active', 1)->get();

                foreach($ProductCategoryChild->toArray() as $ProductCategoryChildItem) {
                    if($ProductCategoryChildItem['parent_id'] == $ProductCategoryItem['id']) {
                        $CategoryArray[$ProductCategoryItem['id']]['child'][] = [
                            'id' => $ProductCategoryChildItem['id'],
                            'name' => json_decode($ProductCategoryChildItem['name']),
                        ];
                    }
                }
            }

            $ProductOption = new ProductOption();
            $ProductOptionList = $ProductOption::where('deleted_at_int', '!=', 0)->where('active', 1);

            if($Request->has('category_id') && !empty($Request->category_id)) {
                $ProductOptionList = $ProductOptionList->where('category_id', $Request->category_id);
            }

            if($Request->has('child_category_id') && !empty($Request->child_category_id)) {
                $ProductOptionList = $ProductOptionList->where('child_category_id', $Request->child_category_id);
            }

            $ProductOptionList = $ProductOptionList->get();

            foreach($ProductOptionList->toArray() as $ProductOptionItem) {
                $OptionArray[$ProductOptionItem['id']] = [
                    'id' => $ProductOptionItem['id'],
                    'name' => json_decode($ProductOptionItem['name']),
                    'category_id' => $Request->category_id,
                    'values' => [], 
                ];

                $ProductOptionValue = new ProductOptionValue();
                $ProductOptionValueList = $ProductOptionValue::where('option_id', $ProductOptionItem['id'])->where('deleted_at_int', '!=', 0)->where('active', 1)->get();

                foreach($ProductOptionValueList->toArray() as $ProductOptionValueItem) {
                    if($ProductOptionValueItem['option_id'] == $ProductOptionItem['id']) {
                        $OptionArray[$ProductOptionItem['id']]['values'][] = [
                            'id' => $ProductOptionValueItem['id'],
                            'name' => json_decode($ProductOptionValueItem['name']),
                        ];
                    }
                }
            }

            $Product = new Product();
            $ProductList = $Product::where('deleted_at_int', '!=', 0)->where('active', 1);

            if($Request->has('search_query') && !empty($Request->search_query)) {
                $ProductList = $ProductList->where('name_ge', 'like',  '%'.$Request->search_query.'%')->where('name_en', 'like',  '%'.$Request->search_query.'%');
            }

            if($Request->has('category_id') && !empty($Request->category_id)) {
                $ProductList = $ProductList->where('category_id', $Request->category_id);
            }

            if($Request->has('child_category_id') && !empty($Request->child_category_id)) {
                $ProductList = $ProductList->where('child_category_id', $Request->child_category_id);
            }

            if($Request->has('brand_id') && !empty($Request->brand_id)) {
                $ProductBrandList = $ProductBrandList->where('brand_id', $Request->brand_id);
            }

            if($Request->has('option_id') && !empty($Request->option_id)) {
                $ProductBrandList = $ProductBrandList->whereRelation('optionValue', 'value', $Request->option_id);
            }

            $ProductList = $ProductList->orderBy('id', 'DESC')->paginate(12)->appends(request()->query());

            $data = [
                'option_list' => $OptionArray,
                'category_list' => $CategoryArray,
                'brand_list' => $ProductBrandList,
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

            $ProductOption = new ProductOption();
            $ProductOptionList = $ProductOption::where('category_id', $ProductData->category_id)->where('deleted_at_int', '!=', 0)->where('active', 1)->get();

            $OptionArray = [];

            foreach($ProductOptionList as $OptionItem) {
                $OptionArray[$OptionItem->id] = [
                    'name' => $OptionItem->name,
                    'value' => [],
                ];

                $ProductOptionItem = new ProductOptionItem();
                $ProductOptionItemData = $ProductOptionItem::where('key', $OptionItem->key)->where('product_id', $ProductData->id)->where('deleted_at_int', '!=', 0)->first();

                $OptionArray[$OptionItem->id]['value'] = json_decode($ProductOptionItemData->getOptionValue->name);
            }

            $RelatedProduct = $Product::where('category_id', $ProductData->category_id)->where('deleted_at_int', '!=', 0)->where('active', 1)->get();

            $ProductMeta = new ProductMeta();
            $ProductMetaData = $ProductMeta::where('product_id', $ProductData->id)->first();

            $SeoItem = [
                'title' => $ProductData->toArray()['name_'.app()->getLocale()],
                'description' => json_decode($ProductMetaData->toArray()['description'])->{app()->getLocale()},
                'keywords' => json_decode($ProductMetaData->toArray()['keywords'])->{app()->getLocale()},
            ];

            $data = [
                'product_data' => $ProductData,
                'option_array' => $OptionArray,
                'related_product' => $RelatedProduct,
                'seo' => $SeoItem,
            ];

            return view('products.products_view', $data);
        } else {
            abort('404');
        }
    }
}
