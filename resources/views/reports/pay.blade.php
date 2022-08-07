@extends('layouts.admin')

@section('title', 'Pay Salary')
@section('content-header', 'Pay Salary')

@section('content')

    <div class="card">
        <div class="card-body">

            <form action="{{ route('salaries.update', $employee) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="salary_status">salary_Status</label>
                    <select name="salary_status" class="form-control @error('salary_status') is-invalid @enderror" id="salary_status">
                        <option value="1" {{ old('salary_status', $product->salary_status) === 1 ? 'selected' : '' }}>Active
                        </option>
                        <option value="0" {{ old('salary_status', $product->salary_status) === 0 ? 'selected' : '' }}>Inactive
                        </option>
                    </select>
                    @error('salary_status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
