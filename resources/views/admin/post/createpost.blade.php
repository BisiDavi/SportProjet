@extends('admin.adminlayout')

@section('title')
  Create a Post
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-9">
        <div class="card-header">
          <h3 class="card-title">Create Post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        @if (session()->has('message'))
          <div class="alert alert-success" role="alert">
            <strong>Success</strong>
            <i class="fa fa-check" aria-hidden="true"></i>
            {{ session()->get('message') }}
          </div>
        @endif

        <form action="create-post" method="POST" role="form" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" name="title" class="form-control w-75" id="exampleInputEmail1" placeholder="Post Title">
              <p class="text-danger">{{ $errors->first('title') }}</p>
            </div>
            <div class="form-group">
              <label for="content">Post</label>
              <textarea name="post" class="form-control w-75" id="content" cols="30" rows="10">
                  </textarea>
              <p class="text-danger">{{ $errors->first('post') }}</p>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Post Image</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="post_image" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
                <p class="text-danger">{{ $errors->first('post_image') }}</p>
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Post</button>
          </div>
          @csrf
        </form>
      </div>
    </div>
  </div>
@endsection
