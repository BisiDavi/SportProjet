@extends('admin.layout.admin')

@section('title', 'Edit Post', ". {{ $posts->title }} .")


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
          <h3 class="card-title">Edit Post {{ $posts->title }}</h3>
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

        <form action="/post/{{ $posts->id }}" method="POST" role="form" enctype="multipart/form-data">
          @method('PATCH')
          @include('admin.page.post.form')

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
