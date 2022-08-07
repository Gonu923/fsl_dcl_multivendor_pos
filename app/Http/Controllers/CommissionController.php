<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Employee;
use App\Models\Task;

class CommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $vendors = Vendor::all();
        $vendors_count = Vendor::all()->count();

        $order_item = OrderItem::all();
        $tasks = Task::all();
        $tasks_ra = Task::all()->sum('received_amount');

        $collection_processing = Task::where('received_amount', null)->sum('total_amount');

            
        $orders = Order::orderBy('id', 'DESC')->get();
        $total = $orders->map(function($i) {
            return $i->total();
        })->sum();
        $employees = Employee::orderBy('employee_name', 'ASC')->get();
        return view('reports.commissions', compact('products','orders', 'vendors', 'order_item', 'employees', 'tasks', 'total', 'vendors_count', 'collection_processing'));
    }


    public function storeTask(Request $request)
    {

            

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
