@extends('layouts.admin')

@section('title', 'Add Vendor')
@section('content-header', 'Add Vendor')

@section('css')
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
        href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css"') }}>
<!-- BS Stepper -->
<link rel="stylesheet"
        href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{ asset('plugins/dropzone/min/dropzone.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('content')

    <div class="card">
        <div class="card-body">

            <form action="{{ route('vendors.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Vendor Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Vendor Name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">Vendor Address</label>
                                <input type="text" name="address"
                                    class="form-control @error('address') is-invalid @enderror" id="address"
                                    placeholder="Vendor Address" value="{{ old('address') }}">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="vendor_picture">Vendor Photo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="vendor_picture"
                                        id="vendor_picture">
                                    <label class="custom-file-label" for="vendor_picture">Choose file</label>
                                </div>
                                @error('vendor_picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nid">Vendor NID Number</label>
                                <input type="text" name="nid" class="form-control @error('nid') is-invalid @enderror"
                                    id="nid" placeholder="Vendor NID" value="{{ old('nid') }}">
                                @error('nid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="trade_license">Trade License</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="trade_license" id="trade_license">
                                    <label class="custom-file-label" for="trade_license">Choose file</label>
                                </div>
                                @error('trade_license')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="category_id">Choose Category</label>
                                <select class="custom-select rounded-0" id="exampleSelectRounded0" name="category_id">
                                    <option>Choose Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="contact_no">Contact No</label>
                                <input type="text" name="contact_no"
                                    class="form-control @error('contact_no') is-invalid @enderror" id="contact_no"
                                    placeholder="Contact number" value="{{ old('contact_no') }}">
                                @error('contact_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="bkash">Bkash Account Number</label>
                                <input type="text" name="bkash"
                                    class="form-control @error('bkash') is-invalid @enderror" id="bkash"
                                    placeholder="Bkash Account Number" value="{{ old('bkash') }}">
                                @error('bkash')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nagad">Nagad Account Number</label>
                                <input type="text" name="nagad"
                                    class="form-control @error('nagad') is-invalid @enderror" id="nagad"
                                    placeholder="Nagad Account Number" value="{{ old('nagad') }}">
                                @error('nagad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="commission">Commission Amount</label>
                                <input type="text" name="commission"
                                    class="form-control @error('commission') is-invalid @enderror" id="commission"
                                    placeholder="Commission Amount" value="{{ old('commission') }}">
                                @error('commission')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Save Vendor</button>
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
