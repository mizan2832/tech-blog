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
                      <h4 class="modal-title text-center">Add Post</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="/action_page.php">
                            <div class="form-group">
                              <label for="title">Title:</label>
                              <input type="text" class="form-control" id="title">
                            </div>
                            <div class="form-group">
                              <label for="sub-title">Sub Title:</label>
                              <input type="text" class="form-control" id="sub_title">
                            </div>
                            <div class="form-group">
                              <label for="sub-title">Meta Description:</label>
                              <input type="textarea" class="form-control" id="meta_description">
                            </div>
                            <div class="form-group">
                              <label for="sub-title">Meta Keywords:</label>
                              <input type="text" class="form-control" id="meta_keywords">
                            </div>
                            <div class="form-group">
                              <label for="slug">Slug:</label>
                              <input type="text" class="form-control" id="slug">
                            </div>
                            <div class="form-group">
                              <label for="category">Category:</label>
                              <select name="category" class="form-control"  id="category">
                                <option value="" disabled>Select Category</option>
                                <option value="1">Computer</option>
                                <option value="1">Laptop</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="tag">Tag:</label>
                              <select name="category" class="form-control" id="category">
                                <option value="" disabled>Select Tag</option>
                                <option value="1">Computer</option>
                                <option value="1">Laptop</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="description">Description:</label>
                              <textarea class="editor form-control" name="wysiwyg-editor"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                          </form>
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
@push('js')
<script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
<script>
class MyUploadAdapter {
    constructor( loader ) {
        this.loader = loader;
    }

    upload() {
        return this.loader.file
            .then( file => new Promise( ( resolve, reject ) => {
                this._initRequest();
                this._initListeners( resolve, reject, file );
                this._sendRequest( file );
            } ) );
    }

    abort() {
        if ( this.xhr ) {
            this.xhr.abort();
        }
    }

    _initRequest() {
        const xhr = this.xhr = new XMLHttpRequest();

        xhr.open( 'POST', "{{route('admin.post.create', ['_token' => csrf_token() ])}}", true );
        xhr.responseType = 'json';
    }

    _initListeners( resolve, reject, file ) {
        const xhr = this.xhr;
        const loader = this.loader;
        const genericErrorText = `Couldn't upload file: ${ file.name }.`;

        xhr.addEventListener( 'error', () => reject( genericErrorText ) );
        xhr.addEventListener( 'abort', () => reject() );
        xhr.addEventListener( 'load', () => {
            const response = xhr.response;

            if ( !response || response.error ) {
                return reject( response && response.error ? response.error.message : genericErrorText );
            }

            resolve( response );
        } );

        if ( xhr.upload ) {
            xhr.upload.addEventListener( 'progress', evt => {
                if ( evt.lengthComputable ) {
                    loader.uploadTotal = evt.total;
                    loader.uploaded = evt.loaded;
                }
            } );
        }
    }

    _sendRequest( file ) {
        const data = new FormData();

        data.append( 'upload', file );

        this.xhr.send( data );
    }
}

function MyCustomUploadAdapterPlugin( editor ) {
    editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
        return new MyUploadAdapter( loader );
    };
}

ClassicEditor
    .create( document.querySelector( '.editor' ), {
        extraPlugins: [ MyCustomUploadAdapterPlugin ],
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
@endpush


