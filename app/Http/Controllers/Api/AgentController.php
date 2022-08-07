<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\Agent;
use Orion\Concerns\DisableAuthorization;

class AgentController extends Controller
{
    use DisableAuthorization;
    protected $model = Agent::class;

    
}
