<?php

namespace App\Modules\Products\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "new_products";

    public function getCategoryData() {
        return $this->hasOne('App\Modules\Products\Models\ProductCategory', 'id', 'category_id');
    }

    public function getProductPrice() {
        return $this->hasMany('App\Modules\Products\Models\ProductPrice', 'product_id', 'id')->orderBy('id', 'DESC');
    }

    public function getProductGallery() {
        return $this->hasMany('App\Modules\Products\Models\ProductGallery', 'product_id', 'id');
    }

    public function optionValue() {
        return $this->hasOne('App\Modules\Products\Models\ProductOptionItem', 'product_id', 'id');
    }
}
