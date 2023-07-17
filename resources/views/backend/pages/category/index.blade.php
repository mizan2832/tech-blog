@extends('backend.master')
@section('title','Category')
@push('css')
    <link rel="stylesheet" href=" {{ asset('backend/css/fontawesome/all.min.css') }}">
@endpush
@section('content')
<div class="container mt-3">
        <div class="row">
            <div class="col">
                <h2>Categories</h2>
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
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td><span> <a href="">
                                <i class="fas fa-edit"></i>
                              </a>  </td>
                </tr>
                <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                </tr>
                <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                </tr>
                </tbody>
                </table>
            </div>
            <div class="col">
                <form action="/action_page.php">
                        <div class="mb-3 mt-3">
                          <label for="email" class="form-label">Email:</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="form-label">Password:</label>
                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="form-check mb-3">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                          </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
            </div>
           
        </div>
</div>
@endsection
