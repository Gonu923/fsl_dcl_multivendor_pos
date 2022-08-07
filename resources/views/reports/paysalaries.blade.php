@extends('layouts.admin')

@section('title', 'Salary Sheet')
@section('content-header', 'Salary Sheet')
@section('content-actions')

@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee Name</th>
                    <th>Employee UID</th>
                    <th>Salary</th>
                    <th>Paid At</th>
                    <th>Status</th>
                    <th>Pay</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->employee_name}}</td>
                        <td>{{$employee->employee_uid}}</td>
                        <td>{{$employee->employee_salary}}</td>
                        <td>{{$employee->updated_at}}</td>
                        <td>

                            @if (($employee->salary_status == 1) && (date('m', strtotime($employee->updated_at)) == Date('m')))
                                <p class="badge badge-success">Paid</p>
                            @else
                                <p class="badge badge-danger">Unpaid</p>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('employees.edit', $employee) }}" class="btn btn-primary"><i
                                    class="fas fa-credit-card"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $employees->render() }}
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.btn-delete', function() {
                $this = $(this);
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "Do you really want to delete this Employee?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        $.post($this.data('url'), {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        }, function(res) {
                            $this.closest('tr').fadeOut(500, function() {
                                $(this).remove();
                            })
                        })
                    }
                })
            })
        })
    </script>
@endsection
