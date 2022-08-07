@extends('layouts.admin')

@section('title', 'Update Employee')
@section('content-header', 'Update Employee')

@section('content')

    <div class="card">
        <div class="card-body">

            <form action="{{ route('employees.update', $employee) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="employee_name">Employee Name</label>
                                <input type="text" name="employee_name" class="form-control @error('employee_name') is-invalid @enderror"
                                       id="employee_name"
                                       placeholder="First Name" value="{{ old('employee_name', $employee->employee_name) }}">
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
                                       placeholder="Last Name" value="{{ old('employee_uid', $employee->employee_uid) }}">
                                @error('employee_uid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="employee_salary">Employee Salary</label>
                                <input type="text" name="employee_salary" class="form-control @error('employee_salary') is-invalid @enderror" id="employee_salary"
                                       placeholder="employee_salary" value="{{ old('employee_salary', $employee->employee_salary) }}">
                                @error('employee_salary')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="employee_designation">Employee Designation</label>
                                <input type="text" name="employee_designation" class="form-control @error('employee_designation') is-invalid @enderror" id="employee_designation"
                                       placeholder="Employee Designation" value="{{ old('employee_designation', $employee->employee_designation) }}">
                                @error('employee_designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                    <label for="employee_working_area">Employee Working Area</label>
                    <input type="text" name="employee_working_area" class="form-control @error('employee_working_area') is-invalid @enderror" id="employee_working_area"
                           placeholder="employee_working_area" value="{{ old('employee_working_area', $employee->employee_working_area) }}">
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
                           placeholder="employee_live_location" value="{{ old('employee_live_location', $employee->employee_live_location) }}">
                    @error('employee_live_location')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="employee_photo">employee_photo</label>
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
                    <label for="salary_status">Salary Status</label>
                    <select name="salary_status" class="form-control @error('salary_status') is-invalid @enderror" id="salary_status">
                        <option value="1" {{ old('salary_status', $employee->salary_status) === 1 ? 'selected' : '' }}> Active
                        </option>
                        <option value="0" {{ old('salary_status', $employee->salary_status) === 0 ? 'selected' : '' }}> Inactive
                        </option>
                    </select>
                    @error('salary_status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                            
                        </div>
                    </div>
                </div>

                

                


                <button class="btn btn-primary" type="submit">Update</button>
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
