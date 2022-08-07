@extends('layouts.admin')

@section('title', 'Create Category')
@section('content-header', 'Create Category')

@section('content')

    <div class="card">
        <div class="card-body">

            <form action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
	                            <label for="name">Sub Category Name</label>
	                            <input type="text" name="name" class="form-control @error('category_name') is-invalid @enderror"
	                                   id="category_name"
	                                   placeholder="Sub Category Name" value="{{ old('name') }}">
	                            @error('category_name')
	                            <span class="invalid-feedback" role="alert">
	                                <strong>{{ $message }}</strong>
	                            </span>
	                            @enderror
	                        </div>
	                        <div class="form-group">
	                            <label for="name">Select Category Name</label>
	                            <select>
	                            	<option>Choose Multiple Sub Category</option>
	                            </select>
	                            @error('category_name')
	                            <span class="invalid-feedback" role="alert">
	                                <strong>{{ $message }}</strong>
	                            </span>
	                            @enderror
	                        </div>
                        </div>
                        <div class="col-md-6">
                             <div class="form-group">
                                <label for="image">Sub Category Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                                @error('category_image')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Create</button>
                </div>
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
