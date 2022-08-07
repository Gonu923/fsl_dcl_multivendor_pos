<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\Payment;
use Orion\Concerns\DisableAuthorization;

class PaymentController extends Controller
{
    use DisableAuthorization;
    protected $model = Payment::class;
}
