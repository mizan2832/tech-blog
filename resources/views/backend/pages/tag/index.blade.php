@extends('backend.master')
@section('title','tag')
@push('css')
    @include('backend.includes.style')
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
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->slug }}</td>
                                <td> </td>
                                <td> <a href="{{ route('admin.tag.edit',$tag->id)}}"><i class="fa-solid fa-pen-to-square"></i></a> /

                                    <form id="delete-form-{{ $tag->id }}" method="post" action="{{ route('admin.tag.destroy',$tag->id)}}" style="display: none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="" onclick="
                                        if(confirm('Are you sure, You Want to delete this?'))
                                        {
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $tag->id }}').submit();
                                        }
                                        else{
                                        event.preventDefault();
                                        }" ><i class="fa-solid fa-trash-can "></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                 </div>
            </div>
            <div class="col-sm-4">
                <div class="card p-3">
                    <h2 class="text-center">Add tag</h2>
                    <form action="{{ route('admin.tag.create') }}" method="POST">
                        {{ csrf_field() }}
                            <div class="mb-3 mt-3">
                              <label for="tag" class="">Tag:</label>
                              <input type="name" class="form-control" id="name" placeholder="Enter tag Name" name="name">
                            </div>
                            <div class="mb-3 mt-3">
                              <label for="slug" class="">Slug:</label>
                              <input type="slug" class="form-control" id="slug" placeholder="Enter tag slug" name="slug">
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
