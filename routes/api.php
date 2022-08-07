<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['as' => 'api'], function() {
    //customers api 
    Orion::resource('customers', Api\CustomerController::class);

    //vendors api
    Orion::resource('vendors', Api\VendorController::class);

    //agents api
    Orion::resource('agents', Api\AgentController::class);

    //orders api customer id, vendor id and product id(product id can be nullable)
    Orion::resource('orders', Api\OrderController::class);

    //orders item price, quantity, order id, product id(nullable)
    Orion::resource('order-items', Api\OrderItemController::class);

    //payments amount, order id
    Orion::resource('payments', Api\PaymentController::class);

    //employee api
    Orion::resource('employees', Api\EmployeeController::class);
    Orion::resource('points', Api\PointController::class);

    //categories api
    Orion::resource('categories', Api\CategoryController::class);

    //individual product api
    Orion::resource('products', Api\ProductController::class);

    //task api
    Orion::resource('tasks', Api\TaskController::class);
});



