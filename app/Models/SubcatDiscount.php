<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcatDiscount extends Model
{
    protected $fillable = [
        'vendor_id',
        'subcategory_id',
        'dcl_discount',
        'vendor_discount',
    ];
}
