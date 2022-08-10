<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\Employee;
use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::with(['items', 'payments'])->get();
        $customers_count = Customer::count();
        $vendors_count = Vendor::count();
        $total_sale = Payment::all()->sum('amount');
        $commissions = Vendor::all()->sum('commission');
        $products_count = Product::count();
        $dcl_discount = Product::all()->sum('dcl_discount');
        $vendor_discount = Product::all()->sum('vendor_discount');
        $employees_count = Employee::count();
        $total_commissions = Task::all()->sum('received_amount');
        $due_collections = Task::where('received_amount', null)->sum('total_amount');
        $suppliers_count = Vendor::where('type', 'Wholeseller')->count();
        $all_commissions = Task::all()->sum('total_amount');


        return view('home', [
            'orders_count' => $orders->count(),
            'income' => $orders->map(function($i) {
                if($i->receivedAmount() > $i->total()) {
                    return $i->total();
                }
                return $i->receivedAmount();
            })->sum(),
            'income_today' => $orders->where('created_at', '>=', date('Y-m-d').' 00:00:00')->map(function($i) {
                if($i->receivedAmount() > $i->total()) {
                    return $i->total();
                }
                return $i->receivedAmount();
            })->sum(),
            'customers_count' => $customers_count,
            'vendors_count' => $vendors_count,
            'products_count' => $products_count,
            'employees_count' => $employees_count,
            'dcl_discount' => $dcl_discount,
            'vendor_discount' => $vendor_discount,
            'commissions' => $commissions,
            'total_commissions' => $total_commissions,
            'due_collections' => $due_collections,
            'all_commissions' => $all_commissions,
            'total_sale' => $total_sale,
            'suppliers_count' => $suppliers_count,
        ]);
    }
}
