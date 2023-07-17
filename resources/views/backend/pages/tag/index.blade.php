@extends('backend.master')
@section('title','Tag')
@push('css')
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>

</style>

@endpush
@section('content')
<div class="container mt-3">
        <div class="row ">
            <div class="col-sm-6">
                 <div class="card">
                    <h2 class="text-center">Tags</h2>
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
                    <tr>
                            <td>1</td>
                            <td>Laptop</td>
                            <td>laptop</td>
                            <td><i class="fa-solid fa-pen-to-square"></i> <i class="fa-solid fa-trash-can "></i> </td>
                    </tr>
                    </tbody>
                    </table>
                 </div>
            </div>
            <div class="col-sm-4">
                <div class="card p-3">
                    <h2 class="text-center">Add Tag</h2>
                    <form action="/action_page.php">
                            <div class="mb-3 mt-3">
                              <input type="name" class="form-control" id="name" placeholder="Enter Category Name" name="name">
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
