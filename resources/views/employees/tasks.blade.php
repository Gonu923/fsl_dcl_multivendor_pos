@extends('layouts.admin')

@section('title', 'Task List')
@section('content-header', 'Task List')
@section('content-actions')
    <a href="{{ route('cart.index') }}" class="btn btn-primary">Open POS</a>
    <button onclick="window.print()"><span class="fas fa-print"></span></button>
    
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4>BDT {{ $total_task_amount }}</h4>
                        <p>Total Amount</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>BDT {{ $collected_amount }}</h4>
                        <p>Total Collected</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4>BDT {{ $total_task_amount - $collected_amount }}</h4>
                        <p>Collection Processing</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>{{ $tasks_count - $task_incomplete }}</h4>
                        <p>Task Completed</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4>{{ $task_incomplete }}</h4>
                        <p>Missed Date Task</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-cross"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="card">
        <table class="table">
                <thead>
                    <tr>
                        <th>Vendor Name</th>
                        <th>Vendor Address</th>
                        <th>Vendor Contact</th>
                        <th>Assigned Employee</th>
                        <th>Employee ID</th>
                        <th>Collection Date</th>
                        <th>Collection Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $vendor_name = "";
                        $vendor_address = "";
                        $contact_no = "";
                        $employee_name = "";
                        $employee_uid = "";
                    ?>
                	@foreach($tasks as $task)
                    <tr>
                        <td>
                            @foreach($vendors as $vendor)
                                @if($task->vendor_id == $vendor->id)
                                    <?php $vendor_name = $vendor->name; ?>
                                @endif
                            @endforeach
                            {{ $vendor_name }}
                        </td>
                        <td>
                            @foreach($vendors as $vendor)
                                @if($task->vendor_id == $vendor->id)
                                    <?php $vendor_address = $vendor->address; ?>
                                @endif
                            @endforeach
                            {{ $vendor_address }}
                        </td>
                        <td>
                            @foreach($vendors as $vendor)
                                @if($task->vendor_id == $vendor->id)
                                    <?php $contact_no = $vendor->contact_no; ?>
                                @endif
                            @endforeach
                            {{ $contact_no }}
                        </td>
                        <td>
                            @foreach($employees as $employee)
                                @if($task->assigned_employee_id == $employee->id)
                                    <?php $employee_name = $employee->employee_name; ?>
                                @endif
                            @endforeach
                            {{ $employee_name }}
                        </td>
                        <td>
                            @foreach($employees as $employee)
                                @if($task->assigned_employee_id == $employee->id)
                                    <?php $employee_uid = $employee->employee_uid; ?>
                                @endif
                            @endforeach
                            {{ $employee_uid }}
                        </td>
                        <td>
                            @if($task->collection_date < Date('y-m-d') && $task->received_amount == 0)
                                <a href="" class="badge badge-danger">{{ $task->collection_date }}</a>
                            @elseif($task->received_amount > 0)
                                <span class="fas fa-check"></span> {{ $task->collection_date }}
                            @endif
                        </td>
                        <td>
                          @if($task->received_amount == 0)
                          	<span class="badge badge-danger">Not Collected BDT {{ $task->total_amount }}</span>
                          @else
                          	<span class="badge badge-success">Collected BDT {{ $task->received_amount }}</span>
                          @endif
                        </td>
                        <td><a href="" class="btn btn-primary"><span class="fas fa-trash"></span></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

    </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')


@endsection
