<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\Task;
use Orion\Concerns\DisableAuthorization;

class TaskController extends Controller
{
    use DisableAuthorization;
    protected $model = Task::class;
}
