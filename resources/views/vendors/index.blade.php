@extends('layouts.admin')

@section('title', 'Vendor List')
@section('content-header', 'Vendor List')
@section('content-actions')
    <a href="{{ route('vendors.create') }}" class="btn btn-primary">Add Vendor</a>
    <button onclick="window.print()"><span class="fas fa-print"></span></button>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>BDT {{ number_format($total_sale, 2) }}</h4>
                        <p>Total Sale</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-info">
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
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4>Jia Electronics</h4>
                        <p>Best Seller</p>
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
                        <h4>{{ $active_count }}</h4>
                        <p>Active Vendor</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4>{{ $inactive_count }}</h4>
                        <p>Inactive Vendor</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Vendor Name</th>
                    <th>Address</th>
                    <th>Category</th>
                    <th>Contact No</th>
                    <th>Vendor + DCL Discount</th>
                    <th>Commission</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($vendors as $vendor)
                    <tr>
                        <td width="8%">
                            <img width="50" src="{{$vendor->getAvatarUrl()}}" alt="{{$vendor->name}}">
                        </td>
                        <td width="11.11%">{{$vendor->name}}</td>
                        <td width="14.22%">{{$vendor->address}}</td>
                        <td width="11.11%">
                            @foreach ($categories as $category)
                                @if ($vendor->category_id == $category->id)
                                    {{ $category->category_name }}
                                @endif
                            @endforeach

                        </td>
                        <td width="11.11%">{{$vendor->contact_no}}</td>
                        <td width="14.22%"></td>
                        <td width="11.11%">{{$vendor->commission}}%</td>
                        <td width="8%">
                            @if($vendor->status == 1)
                            <span class="right badge badge-success">Active</span>
                            @else
                            <span class="right badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td width="11.11%">
                            <a href="{{ route('vendors.edit', $vendor) }}" class="btn btn-primary"><i
                                    class="fas fa-edit"></i></a>
                            <button class="btn btn-danger btn-delete" data-url="{{route('vendors.destroy', $vendor)}}"><i
                                    class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $vendors->render() }}
        </div>
    </div>
@endsection
