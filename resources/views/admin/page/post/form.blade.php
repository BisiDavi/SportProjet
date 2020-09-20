<div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" value="{{ old('title') ?? $posts->title }}" class="form-control w-75"
      id="exampleInputEmail1" placeholder="Post Title">
    <p class="text-danger">{{ $errors->first('title') }}</p>
  </div>
  <div class="form-group">
    <label for="content">Post</label>
    <textarea id="mytextarea" name="post" value="{{ old('post') ?? $posts->post }}" class="form-control w-75"
      id="content" cols="30" rows="10"></textarea>
    <p class="text-danger">{{ $errors->first('post') }}</p>
  </div>
  <div class="form-group d-flex flex-column ">
    <label for="exampleInputFile">Post Image</label>
    <input type="file" class="py-2" value="{{ old('post_image') ?? $posts->post_image }}" name="post_image">
    <p class="text-danger">{{ $errors->first('post_image') }}</p>
  </div>
</div>
@csrf
