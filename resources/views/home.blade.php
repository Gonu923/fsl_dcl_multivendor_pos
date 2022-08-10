@extends('layouts.admin')

@section('content-header', 'Dashboard')
@section('content')
    <div class="container-fluid">
        {{-- <div class="row">
            <div class="col-lg col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>{{ $orders_count }}</h4>
                        <p>Orders Count</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('orders.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>{{ $orders_count }}</h4>
                        <p>Orders Count</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('orders.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>{{ config('settings.currency_symbol') }} {{ number_format($income, 2) }}</h4>
                        <p>Income</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('orders.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4>{{ config('settings.currency_symbol') }} {{ number_format($income_today, 2) }}</h4>

                        <p>Income Today</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ route('orders.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4>{{ $customers_count }}</h4>

                        <p>Customers Count</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('customers.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div> --}}
        <div class="row">
            <div class="col-lg col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>{{ $customers_count }}</h4>
                        <p>Total User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="{{ route('customers.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>{{ $vendors_count }}</h4>
                        <p>Total Retailer</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="{{ route('vendors.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>{{ $suppliers_count }}</h4>
                        <p>Total Supplier</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="{{ route('orders.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4>{{ $products_count }}</h4>

                        <p>Total Product</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('products.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4>{{ $employees_count }}</h4>

                        <p>Total Employee</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('employees.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card-footer">
                    <div class="row">
                    <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                    <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 
                        {{ number_format((($dcl_discount + $vendor_discount) / $products_count), 0) }}%
                    </span>
                    <h5 class="description-header">BDT {{ number_format((($total_sale +  ( $total_sale * ((($dcl_discount + $vendor_discount) / $products_count)/100))) - $total_sale),2) }}</h5>
                    <span class="description-text">Total Discount</span>
                    </div>

                    </div>

                    <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                    <span class="description-percentage text-success"><i class="fas fa-caret-left"></i> 
                        {{ number_format(($commissions / $vendors_count),  0) }}% <span>- 4% = {{ number_format(($commissions / $vendors_count) - 4,  0) }}%</span>
                    </span>
                    <h5 class="description-header">BDT {{ number_format($all_commissions, 2) }}</h5>
                    <span class="description-text">Total Commission</span>
                    </div>

                    </div>

                    <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                    <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">BDT {{ number_format($total_commissions, 2) }}</h5>
                    <span class="description-text">Total Collection</span>
                    </div>

                    </div>

                    <div class="col-sm-3 col-6">
                    <div class="description-block">
                    <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">BDT {{ number_format($due_collections, 2) }}</h5>
                    <span class="description-text">Due Collection</span>
                    </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sales Report</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="myChart" style="width:100%; max-width:600px; height:300px;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Commission and Target</h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                            <a href="#" class="nav-link">
                            Average Discount
                            <span class="float-right text-success">
                            <i class="fas fa-arrow-down text-sm"></i>
                            12%</span>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a href="#" class="nav-link">
                            Average Commission
                            <span class="float-right text-success">
                            <i class="fas fa-arrow-up text-sm"></i> 4%
                            </span>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a href="#" class="nav-link">
                            China
                            <span class="float-right text-warning">
                            <i class="fas fa-arrow-left text-sm"></i> 0%
                            </span>
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">At a glance</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">
                                <div class="product-img">
                                    <img src="{{ asset('images/dis.png') }}" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">Total Purchase
                                        <span class="badge badge-success float-right">
                                            BDT {{ number_format($income, 2) }}
                                        </span>
                                    </a>
                                    <span class="product-description">
                                        {{ Date('d/m/y') }}
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="{{ asset('images/dis.png') }}" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">Total Discount Amount
                                        <span class="badge badge-success float-right">BDT {{ number_format((($total_sale +  ( $total_sale * ((($dcl_discount + $vendor_discount) / $products_count)/100))) - $total_sale),2) }}</span></a>
                                    <span class="product-description">
                                        {{ Date('d/m/y') }}
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="{{ asset('images/dis.png') }}" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">
                                        Total Payment Collection <span class="badge badge-success float-right">
                                            BDT {{ number_format($total_commissions, 2) }}
                                        </span>
                                    </a>
                                    <span class="product-description">
                                        {{ Date('d/m/y') }}
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="{{ asset('images/dis.png') }}" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">Total Dues
                                        <span class="badge badge-success float-right">BDT {{ number_format($due_collections, 2) }}</span></a>
                                    <span class="product-description">
                                        {{ Date('d/m/y') }}
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                        </ul>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <a href="{{ route('products.index') }}" class="uppercase">View All Products</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script>
        var xValues = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var yValues = [3000, 6000, 9000, 12000, 15000, 18000, 21000, 24000, 27000, 30000, 33000, 36000];
        var barColors = ["red", "green", "blue", "orange", "brown", "red", "green", "blue", "orange", "brown", "red",
            "green"
        ];
        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                }
            }
        });
    </script>
@endsection
