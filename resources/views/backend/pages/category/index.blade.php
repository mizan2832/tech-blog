@extends('backend.master')
@section('title','Category')
@push('css')
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>

</style>

@endpush
@section('content')
<div class="container mt-3">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="row ">
            <div class="col-sm-6">
                 <div class="card">
                    <h2 class="text-center">Categories</h2>
                    <table class="table table-striped">
                    <thead>
                    <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td></td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td><i class="fa-solid fa-pen-to-square"></i> <i class="fa-solid fa-trash-can "></i> </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                 </div>
            </div>
            <div class="col-sm-4">
                <div class="card p-3">
                    <h2 class="text-center">Add Category</h2>
                    <form action="{{ route('admin.category.create') }}" method="POST">
                        {{ csrf_field() }}
                            <div class="mb-3 mt-3">
                              <label for="Cateogry" class="">Cateogry:</label>
                              <input type="name" class="form-control" id="name" placeholder="Enter Category Name" name="name">
                            </div>
                            <div class="mb-3 mt-3">
                              <label for="slug" class="">Slug:</label>
                              <input type="slug" class="form-control" id="slug" placeholder="Enter Category slug" name="slug">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary btn-sub">Submit</button>
                            </div>
                          </form>
                </div>

            </div>

        </div>
</div>
@endsection
