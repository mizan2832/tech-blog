@extends('backend.master')
@section('title','Post List')
@push('css')
    @include('backend.includes.style')
@endpush
@section('content')
<div class="container mt-3">
    <div class=" d-flex justify-content-between">
        <div>
            <h2>Post List</h2>
        </div>
        <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                Add New Post
              </button>

              <div class="modal" id="myModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Modal Heading</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                      Modal body..
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>
        </div>
        <div>
            <input type="text" placeholder="Search">
        </div>
    </div>



    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Sub-Title</th>
          <th>Meta Description</th>
          <th>Keywords</th>
          <th>Slug</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John</td>
          <td>Doe</td>
          <td>john@example.com</td>
          <td>john@example.com</td>
          <td>john@example.com</td>
          <td><i class="fa-solid fa-pen-to-square fa-lg"></i> <i class="fa-solid fa-eye fa-lg"></i> <i class="fa-solid fa-trash fa-lg"></i></td>
        </tr>

      </tbody>
    </table>
  </div>
@endsection


