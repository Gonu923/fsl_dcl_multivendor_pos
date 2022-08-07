<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Task;
use App\Models\Employee;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all();
        $tasks_count = Task::all()->count();
        $vendors = Vendor::all();
        $employees = Employee::all();
        $collected_amount = Task::all()->sum('received_amount');
        $total_task_amount = Task::all()->sum('total_amount');
        $task_incomplete = Task::where('received_amount', null)->count();
        return view('employees.tasks', compact('tasks', 'collected_amount', 'total_task_amount', 'vendors', 'employees', 'task_incomplete', 'tasks_count'));
    }

    public function storeTask(Request $request)
    {
        $tasks = Task::create([
            'vendor_id' => $request->vendor_id,
            'assigned_employee_id' => $request->assigned_employee_id,
            'collection_date' => $request->collection_date,
            'total_sale' => $request->total_sale,
            'total_amount' => $request->total_amount,
            'received_amount' => $request->received_amount,
            'due_amount' => $request->due_amount,
        ]);

        if (!$tasks) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while creating task.');
        }
        return redirect()->route('commissions.index')->with('success', 'Success, your task have been assigned.');
    }
}
