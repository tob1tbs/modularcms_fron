<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Modules\General\Models\Seo;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function seoList($page_key) {
        $Seo = new Seo();
        $SeoData = $Seo::where('name', $page_key)->first();

        $SeoItem = [
            'title' => json_decode($SeoData->value)->title_ge,
            'description' => json_decode($SeoData->value)->description_ge,
            'keywords' => json_decode($SeoData->value)->keywords_ge,
        ];

        return $SeoItem;
    }
}
