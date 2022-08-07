<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\Vendor;
use Orion\Concerns\DisableAuthorization;

class VendorController extends Controller
{
    use DisableAuthorization;
    protected $model = Vendor::class;
}
