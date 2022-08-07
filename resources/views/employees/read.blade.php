@extends('layouts.admin')

@section('title', 'Employee Details')
@section('content-header', 'Employee Details')

@section('content')

    <div class="card">
        <div class="card-body">

            <form action="{{ route('employees.show') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="employee_name">Employee Name</label>
                    <input type="text" name="employee_name" class="form-control @error('employee_name') is-invalid @enderror"
                           id="employee_name"
                           placeholder="Employee Name" value="{{ old('employee_name') }}">
                    @error('employee_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="employee_uid">Employee UID</label>
                    <input type="text" name="employee_uid" class="form-control @error('employee_uid') is-invalid @enderror"
                           id="employee_uid"
                           placeholder="Employee UID" value="{{ old('employee_uid') }}">
                    @error('employee_uid')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="employee_photo">Employee Photo</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="employee_photo" id="employee_photo">
                        <label class="custom-file-label" for="employee_photo">Choose file</label>
                    </div>
                    @error('employee_photo')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="employee_salary">Employee Salary</label>
                    <input type="text" name="employee_salary" class="form-control @error('employee_salary') is-invalid @enderror" id="employee_salary"
                           placeholder="Employee Salary" value="{{ old('employee_salary') }}">
                    @error('employee_salary')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="employee_working_area">Employee Working Area</label>
                    <input type="text" name="employee_working_area" class="form-control @error('employee_working_area') is-invalid @enderror" id="employee_working_area"
                           placeholder="employee_working_area" value="{{ old('employee_working_area') }}">
                    @error('employee_working_area')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="employee_live_location">Employee Live Location</label>
                    <input type="text" name="employee_live_location" class="form-control @error('employee_live_location') is-invalid @enderror"
                           id="employee_live_location"
                           placeholder="employee_live_location" value="{{ old('employee_live_location') }}">
                    @error('employee_live_location')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
