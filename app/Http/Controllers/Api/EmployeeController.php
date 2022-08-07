<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\Employee;
use Orion\Concerns\DisableAuthorization;

class EmployeeController extends Controller
{
    use DisableAuthorization;
    protected $model = Employee::class;
}
