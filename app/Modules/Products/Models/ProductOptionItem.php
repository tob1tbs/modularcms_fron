<?php

namespace App\Modules\Products\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOptionItem extends Model
{
    use HasFactory;

    protected $table = "new_product_option_item";

    public function getOptionValue() {
        return $this->hasOne('App\Modules\Products\Models\ProductOptionValue', 'option_key', 'key');
    }

}
