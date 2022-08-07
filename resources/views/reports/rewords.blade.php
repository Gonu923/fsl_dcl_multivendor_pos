@extends('layouts.admin')

@section('title', 'Rewords')
@section('content-header', 'Rewords')
@section('content-actions')
    <a href="{{ route('cart.index') }}" class="btn btn-primary">Open POS</a>
@endsection

@section('content')
    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Phone</th>
                    <th>Total Points</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($points as $point)
                    <tr>
                        <td>{{ $point->id }}</td>
                        <td>{{ $point->customer_id }}</td>
                        <td>{{ $point->points }}</td>
                        <td>500</td>
                        <td><a href="#" class="btn btn-primary">Send Reword</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
