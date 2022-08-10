@extends('layouts.admin')

@section('title', 'Purchase Reports')
@section('content-header', 'Purchase Reports')
@section('content-actions')
    <a href="{{ route('cart.index') }}" class="btn btn-primary">Open POS</a>
    <button onclick="window.print()"><span class="fas fa-print"></span></button>

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>BDT {{ number_format($total, 2) }}</h4>
                        <p>Total Purchase</p>
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
                        <h4>{{ $avg_discount }}%</h4>
                        <p>Average Discount</p>
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
                        <p>Total Cashback</p>
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
                        <h4>{{ $customers_count }}</h4>
                        <p>Total Customer</p>
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
                        <h4>500</h4>
                        <p>Cashback Processing</p>
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
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Phone</th>
                        <th>Total Purchased</th>
                        <th>Total Due</th>
                        <th>Total Points/Cashback Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)

                    <?php $total_p = 0; ?>
                    
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->first_name. " ". $customer->last_name }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>

                            @foreach($orders as $order)
                            @if($customer->id == $order->customer_id)
                                @if(count($order_item)>0)
                                    
                                @foreach($order_item as $item)
                                @if($item->order_id == $order->id)
                                    <?php $total_p = $total_p + $item->price; ?>
                                @endif
                                @endforeach
                                  
                                @endif

                            @endif
                            @endforeach

                             BDT {{ number_format($total_p,2) }} 
                        </td>
                        <td></td>
                        <td>
                            @if(number_format(($total_p * 0.01),0) >= 100)
                            BDT {{ number_format(($total_p * 0.01),0)/10 }} 
                            @else
                            {{ number_format(($total_p * 0.01),0) }} Points
                            @endif

                        </td>
                        
                        <td>
                            @if(number_format($total_p * 0.01, 0) < 100)
                                <span>Need more coins</span>
                            @else

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $customer->id}}" title="Give Cashback">
                                <span class="fas fa-gift"></span>
                            </button>
                            @endif

                            <div class="modal fade" id="exampleModal{{ $customer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Send Cashback</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                        <form method="POST" action="">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Total Purchase</label>
                                                        <input type="text" name="total_purchase" value="{{ $total_p }}" class="form-control" readonly>
                                                    </div>

                                                    <input type="number" name="customer_id" value="{{ $customer->id }}" hidden>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Cashback Amount</label>
                                                        <input type="number" name="cashback_amount" value="{{ number_format(($total_p * 0.01),0)/10 }}" class="form-control" readonly>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <input type="submit" value="Send Reword" class="btn btn-success">
                                        </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </td>
                    </tr>
                 
                    @endforeach
                </tbody>
            </table>

    </div>
    </div>
@endsection
