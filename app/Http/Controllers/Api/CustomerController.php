<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\Customer;
use Orion\Concerns\DisableAuthorization;

class CustomerController extends Controller
{
    use DisableAuthorization;
    protected $model = Customer::class; 
}
