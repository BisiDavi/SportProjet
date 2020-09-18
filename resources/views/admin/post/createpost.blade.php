@extends('admin.adminlayout')

@section('title')
  Create a Post
@endsection

@section('link')
  <script src="https://cdn.tiny.cloud/1/wpqzkbazuc34ol05yl28445rmujahdm2f2c1gb72qzlm3ctw/tinymce/5/tinymce.min.js"
    referrerpolicy="origin">
  </script>
  <script>
    tinymce.init({
      selector: '#mytextarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });

  </script>
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
              <textarea id="mytextarea" name="mytextarea" name="post" class="form-control w-75" id="content" cols="30"
                rows="10">
                                    </textarea>
              <p class="text-danger">{{ $errors->first('post') }}</p>
            </div>
            <div class="form-group d-flex flex-column ">
              <label for="exampleInputFile">Post Image</label>
              <input type="file" class="py-2" name="post_image">
              <p class="text-danger">{{ $errors->first('post_image') }}</p>
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
