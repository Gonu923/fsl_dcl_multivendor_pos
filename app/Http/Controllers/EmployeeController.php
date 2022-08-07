<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->wantsJson()) {
            return response(
                Employee::all()
            );
        }
        $employees = Employee::latest()->paginate(10);
        $employees_count = Employee::count();
        $active_count = Employee::where('login_status', 1)->count();
        $inactive_count = Employee::where('login_status', 0)->count();
        $manager_count = Employee::where('employee_designation', "Manager")->count();
        $salesman_count = Employee::where('employee_designation', "Salesman")->count();
        return view('employees.index', compact('employees_count','active_count', 'inactive_count', 'manager_count', 'salesman_count'))->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        // $uid = 600501;
        // for ($i=1; $i <= 200 ; $i++) {
        //     $array[] =[
        //         'employee_name' => 'Employee '.$i,
        //         'employee_uid' => $uid,
        //         'employee_salary' => '23000',
        //         'employee_working_area' => 'Dhaka',
        //         'employee_live_location' => 'Dhaka',
        //         'employee_photo' => 'dash.jpg',
        //     ] ;
        //     $uid++;
        // };
        // Employee::insert($array);

        $avatar_path = '';

        if ($request->hasFile('employee_photo')) {
            $avatar_path = $request->file('employee_photo')->store('employees', 'public');
        }

        $employee = Employee::create([
            'employee_name' => $request->employee_name,
            'employee_uid' => $request->employee_uid,
            'employee_salary' => $request->employee_salary,
            'employee_designation' => $request->employee_designation,
            'employee_working_area' => $request->employee_working_area,
            'employee_live_location' => $request->employee_live_location,
            'employee_photo' => $avatar_path,
        ]);

        if (!$employee) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while creating employee.');
        }
        return redirect()->route('employees.index')->with('success', 'Success, your employee have been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.read', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeRequest  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->employee_name = $request->employee_name;
        $employee->employee_uid = $request->employee_uid;
        $employee->employee_salary = $request->employee_salary;
        $employee->employee_working_area = $request->employee_working_area;
        $employee->employee_live_location = $request->employee_live_location;

        if ($request->hasFile('employee_photo')) {
            // Delete old avatar
            if ($employee->employee_photo) {
                Storage::delete($employee->employee_photo);
            }
            // Store avatar
            $avatar_path = $request->file('employee_photo')->store('employees', 'public');
            // Save to Database
            $employee->employee_photo = $avatar_path;
        }

        if (!$employee->save()) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while updating employee.');
        }
        return redirect()->route('employees.index')->with('success', 'Success, your employee have been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        if ($employee->avatar) {
            Storage::delete($employee->avatar);
        }

        $employee->delete();

       return response()->json([
           'success' => true
       ]);
    }
}
