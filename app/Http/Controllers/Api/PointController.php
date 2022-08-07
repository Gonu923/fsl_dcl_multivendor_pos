<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\Point;
use Orion\Concerns\DisableAuthorization;

class PointController extends Controller
{
    use DisableAuthorization;
    protected $model = Point::class;
}
