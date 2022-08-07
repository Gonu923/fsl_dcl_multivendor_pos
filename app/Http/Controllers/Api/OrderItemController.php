<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\OrderItem;
use Orion\Concerns\DisableAuthorization;

class OrderItemController extends Controller
{
    use DisableAuthorization;
    protected $model = OrderItem::class;
}
