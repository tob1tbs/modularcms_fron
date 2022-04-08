<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Modules\Products\Models\ProductCategory;
use App\Modules\General\Models\ParameterPlugin;
use App\Modules\General\Models\ParameterSocial;
use App\Modules\General\Models\ParameterInfo;
use App\Modules\General\Models\Parameter;


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
            $ProductCategoryList = $ProductCategory::where('parent_id', 0)->where('deleted_at_int', '!=', 0)->where('id', '!=', 1)->where('active', 1)->get();
            $view->with('productCategoryList', $ProductCategoryList);

            $Parameter = new Parameter();
            $ParameterData = $Parameter::where('deleted_at_int', '!=', 0)->where('active', 1)->get();

            $ParameterArray = [];

            foreach($ParameterData as $ParameterItem) {
                $ParameterArray[$ParameterItem->key] = $ParameterItem->value;
            }

            $ParameterInfo = new ParameterInfo();
            $ParameterInfoData = $ParameterInfo::where('deleted_at_int', '!=', 0)->where('active', 1)->get();

            foreach($ParameterInfoData as $ParameterInfoItem) {
                $ParameterArray[$ParameterInfoItem->key] = $ParameterInfoItem->value;
            }

            $ParameterPlugin = new ParameterPlugin();
            $ParameterPluginData = $ParameterPlugin::where('deleted_at_int', '!=', 0)->where('active', 1)->get();

            foreach($ParameterPluginData as $ParameterPluginItem) {
                $ParameterArray[$ParameterPluginItem->key] = $ParameterPluginItem->value;
            }

            $ParameterSocial = new ParameterSocial();
            $ParameterSocialData = $ParameterSocial::where('deleted_at_int', '!=', 0)->where('active', 1)->get();

            foreach($ParameterSocialData as $ParameterSocialItem) {
                $ParameterArray[$ParameterSocialItem->key] = $ParameterSocialItem->value;
            }

            $view->with('parametersArray', $ParameterArray);
        });
    }
}
