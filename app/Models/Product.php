<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'barcode',
        'image',
        'category_id',
        'vendor_id',
        'price',
        'quantity',
        'dcl_discount',
        'vendor_discount',
        'vat',
        'disount',
        'status'
    ];
}
