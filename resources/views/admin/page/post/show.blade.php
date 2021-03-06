@extends('admin.layout.admin')

@section('title')
  Post | {{ $posts->title }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-9">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Bordered Table</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Title</th>
                  <th>Post</th>
                  <th>Thumbnail</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>{{ $posts->id }}</td>
                  <td>{{ $posts->title }}</td>
                  <td>{{ $posts->post }}</td>
                  <td>{{ $posts->post_image }}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
