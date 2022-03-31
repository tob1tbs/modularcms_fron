<?php

namespace App\Modules\Payments\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentCategory extends Model
{
    use HasFactory;

    protected $table = "new_payment_category";
}
