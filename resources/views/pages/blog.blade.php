@extends('layouts.layout')

@section('title')
  Blog
@endsection

@section('link')
  <link rel="stylesheet" href="assets/css/blog.css">
@endsection

@section('content')

  <div class="container-fluid">
    <div class="row top-banner">
      <img src="{{ asset('assets/img/banner.png') }}" class="top-banner" alt="banner" style="width:100%">

      <h3 class="text-center text-white">Blog</h3>

      <div class="post container mt-5 mb-5">
        <div class="row">
          @foreach ($posts as $post)
            <div class="col-md-3">
              {{-- <a href="/post/{{ $post->slug }}"> --}}
                <img src="images/{{ Session::get('post_image') }}" class="img-thumbnail" style="width:100%">

                <span>
                  <strong>
                    <a href="/blog/{{ $post->title }}"></a>
                    {{ $post->title }}
                  </strong>
                </span>
                {{-- </a> --}}
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
@endsection


