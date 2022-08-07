@extends('layouts.admin')

@section('title', 'Update Category')
@section('content-header', 'Update Category')

@section('content')

    <div class="card">
        <div class="card-body">

            <form action="{{ route('categories.update', $category) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror"
                           id="category_name"
                           placeholder="Category Name" value="{{ old('category_name', $category->category_name) }}">
                    @error('category_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="avatar">Category Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="category_image" id="category_image">
                        <label class="custom-file-label" for="category_image">Choose file</label>
                    </div>
                    @error('category_image')
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
