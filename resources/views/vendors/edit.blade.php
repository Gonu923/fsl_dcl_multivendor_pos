@extends('layouts.admin')

@section('title', 'Update vendor')
@section('content-header', 'Update vendor')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('vendors.update', $vendor) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Vendor Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                       id="name"
                                       placeholder="First Name" value="{{ old('name', $vendor->name) }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">Vendor Address</label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                                       id="address"
                                       placeholder="Last Name" value="{{ old('address', $vendor->address) }}">
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
                                <label for="nid">Vendor NID</label>
                                <input type="text" name="nid" class="form-control @error('nid') is-invalid @enderror"
                                       id="nid"
                                       placeholder="Last Name" value="{{ old('nid', $vendor->nid) }}">
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
                                <select name="status" class="form-control @error('status') is-invalid @enderror"
                                    id="status">
                                    <option value="1"
                                        {{ old('status', $vendor->status) === 1 ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="0"
                                        {{ old('status', $vendor->status) === 0 ? 'selected' : '' }}>Inactive
                                    </option>
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
                                    @foreach ($categories as $category)
                                        @if ($vendor->category_id == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
                                        @endif
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="contact_no">Contact no</label>
                                <input type="text" name="contact_no" class="form-control @error('contact_no') is-invalid @enderror"
                                       id="contact_no"
                                       placeholder="contact_no" value="{{ old('contact_no', $vendor->contact_no) }}">
                                @error('contact_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="bkash">Bkash Account Number</label>
                                <input type="text" name="bkash" class="form-control @error('bkash') is-invalid @enderror"
                                       id="bkash"
                                       placeholder="bkash" value="{{ old('bkash', $vendor->bkash) }}">
                                @error('bkash')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nagad">Nagad Account Number</label>
                                <input type="text" name="nagad" class="form-control @error('nagad') is-invalid @enderror"
                                       id="nagad"
                                       placeholder="nagad" value="{{ old('nagad', $vendor->nagad) }}">
                                @error('nagad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="commission">Commission</label>
                                <input type="text" name="commission" class="form-control @error('commission') is-invalid @enderror"
                                       id="commission"
                                       placeholder="commission" value="{{ old('commission', $vendor->commission) }}">
                                @error('commission')
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
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
