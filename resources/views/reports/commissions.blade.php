@extends('layouts.admin')

@section('title', 'Commission List')
@section('content-header', 'Commission List')
@section('content-actions')
    <a href="{{ route('cart.index') }}" class="btn btn-primary">Open POS</a>
    <button onclick="window.print()"><span class="fas fa-print"></span></button>
    
@endsection

@section('content')
    <?php $total_sale = 0; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>BDT {{ number_format($total * 0.02, 2) }}</h4>
                        <p>Total Commission</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-comment-dollar"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>2%</h4>
                        <p>Average Commission</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-percent"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4>BDT 200000</h4>
                        <p>Commission Target</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-donate"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4>{{ $vendors_count }}</h4>
                        <p>Total Vendor</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>BDT {{ $collection_processing }}</h4>
                        <p>Collection Processing</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice-dollar"></i>
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
                        <th>Contact No</th>
                        <th>Address</th>
                        <th>Total Sale</th>
                        <th>Commission Due</th>
                        <th>Assigned Employee Name/ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendors as $vendor)
                    <?php 
                    $total_s = 0; $total_c = 0; 
                    $flag_id = 0; $msg = ""; $e_uid = 0; $e_name = ""; $ra = 0; 
                    ?>
                    <tr>
                        <td>{{ $vendor->name }}</td>
                        <td>{{ $vendor->contact_no }}</td>
                        <td>{{ $vendor->address }}</td>
                        <td>
                            @foreach($products as $product)
                                @if($vendor->id == $product->vendor_id)
                                    @foreach($order_item as $item)
                                        @if($item->product_id == $product->id)
                                            <?php 
                                                $total_s = $total_s + $item->price; 
                                            ?>
                                        
                                        @endif
                                        @foreach($tasks as $task)
                                            @if($task->vendor_id == $vendor->id)
                                                <?php $sa = $task->total_sale; ?>
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endif
                            @endforeach

                            BDT {{ $total_s }} 
                        </td>
                       
                        <td>
                            @foreach($products as $product)
                                @if($vendor->id == $product->vendor_id)
                                    @foreach($order_item as $item)
                                        @if($item->product_id == $product->id)
                                            {{$product->commission}}
                                            <?php 
                                                $total_c = $total_s * 0.02;
                                            ?>
                                        @endif
                                        @foreach($tasks as $task)
                                            @if($task->vendor_id == $vendor->id)
                                                <?php $ra = $task->received_amount; ?>
                                            @endif
                                        @endforeach
                                        <?php $total_c = $total_c - $ra; ?>
                                    @endforeach
                                @endif
                            @endforeach
                            BDT {{ number_format(($total_c), 2) }}                            
                        </td>
                        <td>
                            @foreach($tasks as $task)
                                @if($task->vendor_id == $vendor->id && $task->received_amount == 0)
                                    <?php $flag_id = $task->assigned_employee_id; ?>
                                    @foreach($employees as $employee)
                                        @if($employee->id == $flag_id)
                                            <?php $e_name = $employee->employee_name; $e_uid = $employee->employee_uid;  ?>
                                        @endif
                                    @endforeach
                                @endif 
                            @endforeach
                            @if($flag_id >0)
                                Assigned to {{ $e_name }} / {{ $e_uid }} 
                            @else
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $vendor->id}}">
                                    Assign 
                            </button>
                            @endif

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $vendor->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Assign employee</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('commissions.taskstore') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Vendor Name</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="vendor_id">  
                                                        <option value="{{$vendor->id}}">{{ $vendor->name }}</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Employee Name</label>
                                                    <select class="form-control" name="assigned_employee_id">
                                                        @foreach($employees as $employee)
                                                            <option value="{{$employee->id}}">{{$employee->employee_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    
            
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Payable Amount</label>
                                                    <input type="text" class="form-control" name="total_amount" id="exampleFormControlInput1" readonly value="{{ number_format($total_c - $ra,2,'.','') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Task Date</label>
                                                    <input type="text" name="collection_date" class="form-control" id="exampleFormControlInput1" placeholder="y/m/d" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Total Sale</label>
                                                    <input type="text" class="form-control" name="total_sale" id="exampleFormControlInput1" readonly value="{{ number_format($total_s,2,'.','') }}">
                                                </div>

                                            </div>
                                        </div>

                                        <input type="submit" name="assign" value="Assign" class="btn btn-primary">
                                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal" aria-label="Close">
                                          Close
                                        </button>
                                    </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </td>
                        <td><a href="" class="btn btn-info snd-inv" title="Send Invoice"><span class="fas fa-hand-holding-usd"></span></a></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>BDT {{ number_format($total, 2) }}</th>
                        <th>BDT {{ number_format($total * 0.02, 2) }}</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>

    </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')


@endsection
