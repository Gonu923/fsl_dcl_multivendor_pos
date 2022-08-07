<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\Category;
use Orion\Concerns\DisableAuthorization;

class CategoryController extends Controller
{
    use DisableAuthorization;
    protected $model = Category::class;
}
