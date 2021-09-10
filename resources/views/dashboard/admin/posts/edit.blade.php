@extends('master.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Post</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Edit</h1>
            </div>
            <section class="form-admin">
                <form method="post" action="{{url('admin/posts/'.$post->id)}}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="mb-4 col-lg-6">
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan Judul" name="title" value="{{ $post->title }}" autofocus autocomplete="off">
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4 col-lg-6">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" id="slug" class="form-control @error('slug') is-invalid @enderror bg-white" placeholder="Slug terisi otomatis" name="slug" value="{{ $post->slug }}" readonly>
                                @error('slug')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4 col-12">
                                <label for="body" class="form-label" class="@error('body') is-invalid @enderror">Konten</label>
                                <input id="body" type="hidden" name="body" value="{{ $post->body }}">
                                <trix-editor input="body" class="bg-white"></trix-editor>
                                @error('body')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4 col-lg-8">
                                <label for="photo" class="form-label mt-3">Photo</label>
                                <input type="file" id="photo" class="form-control @error('photo') is-invalid @enderror" placeholder="Pilih Gambar" name="photo" value="{{ $post->photo }}">
                                @error('photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="mb-4 col-lg-4">
                                        <label for="category_id" class="form-label">Sub Page</label>
                                        <select class="form-select w-100 bg-white" name="category_id" id="category_id" style="height: 38px;">
                                        @foreach($categories as $category)
                                            @if($post->category_id == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                        </select>
                                        @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4 col-lg-4">
                                        <label for="user_id" class="form-label">Author</label>
                                        <select class="form-select w-100 bg-white" name="user_id" id="user_id" style="height: 38px;">
                                            <option selected value="{{ $post->user_id }}">{{$post->author->name}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 col-12">
                                <button type="submit" class="btn btn-primary" name="submit">Ubah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/admin/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection