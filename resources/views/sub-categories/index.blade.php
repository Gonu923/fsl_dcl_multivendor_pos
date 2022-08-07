@extends('layouts.admin')

@section('title', 'Sub Category List')
@section('content-header', 'Sub Category List')
@section('content-actions')
    <a href="{{ route('subcategories.create') }}" class="btn btn-primary">Add Sub Category</a>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Sub Category Name</th>
                            <th>Sub Category Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($subcats as $subcat)
                            <tr>
                                <td>{{$subcat->id}}</td>
                                <td>{{$subcat->category_id}}</td>
                                <td>{{$subcat->name}}</td>
                                <td>{{ $subcat->image }}</td>
                                <td>
                                    <a href="{{ route('subcategories.edit', $subcat) }}" class="btn btn-primary"><i
                                            class="fas fa-edit"></i></a>
                                    <button class="btn btn-danger btn-delete" data-url="{{route('subcategories.destroy', $subcat)}}"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $subcats->render() }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h4 style="padding:10px;">
                    Add Sub Category
                </h4>
                <div class="card-body">
                    <form action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Sub Category Name</label>
                            <div>
                                <input type="text" name="name" placeholder="Sub Category Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Sub Image Name</label>
                            <div>
                                <input type="file" name="image" placeholder="Sub Category Image" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Choose Category</label>
                            <div>
                                <select name="category_id" class="form-control">
                                    <option>Choose</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" name="Submit" value="Add Sub Category" class="btn btn-primary">          
                    </form>
                </div>
            </div>
        </div>
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
                    text: "Do you really want to delete this Category?",
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
