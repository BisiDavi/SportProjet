@extends('admin.layout.admin')

@section('title')
  Viewpost
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-9">
        <div class="row row mr-5 mt-3">
          <a href="/post/create">
            <button class="createpost bg-primary float-right p-2 text-white mb-5 d-flex">
              <i class="fas fa-plus mt-1 mr-2"></i>
              Create New Post
            </button>
          </a>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-center text-danger font-weight-bold">Admin Post</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right w-50"
                      placeholder="Search for post">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Post Title</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                      <tr>
                        <td>{{ $post->id }}</td>
                        <td>Admin</td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                          <a href="/post/{{ $post->id }}">
                            <span class="tag tag-success">
                              {{ $post->title }}
                            </span>
                          </a>
                        </td>
                        <td>
                          <a href="/post/{{ $post->id }}/edit">
                            <button class="btn btn-primary">
                              Edit
                            </button>
                          </a>
                        </td>
                        <td>
                          <form class="form" method="POST" action="/post/{{ $post->id }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                              Delete
                            </button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
