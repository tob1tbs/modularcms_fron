<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Modules\Products\Models\ProductCategory;


class ComposerViewProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('*', function($view) {
            $ProductCategory = new ProductCategory();
            $ProductCategoryList = $ProductCategory::where('parent_id', 0)->where('deleted_at_int', '!=', 0)->where('active', 1)->get();
            $view->with('productCategoryList', $ProductCategoryList);
        });
    }
}
