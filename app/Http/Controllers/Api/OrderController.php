<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\Order;
use Orion\Concerns\DisableAuthorization;

class OrderController extends Controller
{
    use DisableAuthorization;
    protected $model = Order::class;

    public function resolveUser()
    {
        return Auth::guard('sanctum')->user();
    }
}
