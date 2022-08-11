<?php

namespace App\Http\Controllers\Landings;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\Employee;
use App\Models\Task;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('landing.about');
    }
    public function services()
    {
        return view('landing.our_services');
    }
    
    public function message()
    {
        return view('landing.message');
    }
    public function partner()
    {
        return view('landing.partner');
    }
    public function enterprise()
    {
        return view('landing.enterprise');
    }
    public function media()
    {
        return view('landing.media');
    }
    public function contact()
    {
        return view('landing.contact');
    }
   
}
