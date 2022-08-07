@extends('layouts.admin')

@section('title', 'Edit Product')
@section('content-header', 'Edit Product')

@section('content')

    <div class="card">
        <div class="card-body">

            <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Name" value="{{ old('name', $product->name) }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="custom-select rounded-0" id="exampleSelectRounded0" name="category_id">
                                    @foreach ($categories as $category)
                                        @if ($product->category_id == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
                                        @endif
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach


                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                                    placeholder="description">{{ old('description', $product->description) }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price"
                                    class="form-control @error('price') is-invalid @enderror" id="price"
                                    placeholder="price" value="{{ old('price', $product->price) }}">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" name="quantity"
                                    class="form-control @error('quantity') is-invalid @enderror" id="quantity"
                                    placeholder="Quantity" value="{{ old('quantity', $product->quantity) }}">
                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="dcl_discount">Dhaka Choice Ltd Discount</label>
                                <input type="text" name="dcl_discount"
                                    class="form-control @error('dcl_discount') is-invalid @enderror" id="dcl_discount"
                                    placeholder="dcl_discount" value="{{ old('dcl_discount', $product->dcl_discount) }}">
                                @error('dcl_discount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="vendor_id">Vendor</label>
                                <select class="custom-select rounded-0" id="exampleSelectRounded0" name="vendor_id">
                                    @foreach ($vendors as $vendor)
                                        @if ($product->vendor_id == $vendor->id)
                                            <option value="{{ $vendor->id }}" selected>{{ $vendor->name }}</option>
                                        @endif
                                        <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="vendor_discount">Vendor Discount</label>
                                <input type="text" name="vendor_discount"
                                    class="form-control @error('vendor_discount') is-invalid @enderror" id="vendor_discount"
                                    placeholder="vendor_discount"
                                    value="{{ old('vendor_discount', $product->vendor_discount) }}">
                                @error('vendor_discount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="vat">Vat</label>
                                <input type="text" name="vat" class="form-control @error('vat') is-invalid @enderror"
                                    id="vat" placeholder="vat" value="{{ old('vat', $product->vat) }}">
                                @error('vat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror"
                                    id="status">
                                    <option value="1"
                                        {{ old('status', $product->status) === 1 ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="0"
                                        {{ old('status', $product->status) === 0 ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
