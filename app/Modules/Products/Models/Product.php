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
}
