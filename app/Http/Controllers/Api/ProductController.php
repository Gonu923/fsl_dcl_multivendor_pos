<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\Product;
use Orion\Concerns\DisableAuthorization;

class ProductController extends Controller
{
    use DisableAuthorization;
    protected $model = Product::class;
}
