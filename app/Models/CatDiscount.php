<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatDiscount extends Model
{
    protected $fillable = [
        'vendor_id',
        'category_id',
        'dcl_discount',
        'vendor_discount',
    ];
}
