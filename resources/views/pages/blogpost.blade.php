@extends('layouts.layout')

@section('title', '{{ $posts->title }}')


@section('content')
<div class="container-fluid">
  <img src="{{ asset('assets/img/banner.png') }}" class="top-banner" alt="banner" style="width:100%">

      <h3 class="text-center text-white">{{ $posts->title }}</h3>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-3">
      <img src="images/{{ Session::get('post_image') }}" style="width:100%">
    </div>
    <div class="blogpost col-lg-8 col-md-8 col-sm-9">
      <h3 class="text-center m-2">
        {{ $posts->title }}
      </h3>
      <p>{{ $posts->post }}</p>
    </div>
  </div>
</div>
@endsection
