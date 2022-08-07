<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\Product;
use Orion\Concerns\DisableAuthorization;

class DiscountProductController extends Controller
{
    use DisableAuthorization;
    protected $model = Product::class;
}
