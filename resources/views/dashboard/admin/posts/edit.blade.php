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
                <form method="post" action="{{url('posts/'. $post->id)}}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="mb-3">
                                <label for="title" class="form-label" for="formControlDefault">Judul</label>
                                <input type="text" id="formControlDefault" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan Judul" name="title" value="{{ $post->title}}" autofocus autocomplete="off">
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label" for="formControlDefault">Judul</label>
                                <input type="text" id="formControlDefault" class="form-control @error('slug') is-invalid @enderror" placeholder="Masukan Judul" name="slug" value="{{ $post->slug}}" autofocus autocomplete="off">
                                @error('slug')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">Desktipsi Artikel</label>
                                <textarea id="body" class="ckeditor form-control @error('body') is-invalid @enderror" name="body">{{ $post->body}}</textarea>
                                @error('body')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="form-label mt-3">Photo</label>
                                <input type="file" id="photo" class="form-control @error('photo') is-invalid @enderror" placeholder="Pilih Gambar" name="photo" value="{{ $post->photo}}">
                                @error('photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Sub Kelas</label>
                                <input type="text" id="category_id" class="form-control @error('category_id') is-invalid @enderror" placeholder="Masukan category_id" name="category_id" value="{{ $post->category_id}}" autocomplete="off">
                                @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="user_id" class="form-label">Author</label>
                                <input type="text" id="user_id" class="form-control @error('user_id') is-invalid @enderror" placeholder="Masukan user_id" name="user_id" value="{{ $post->user_id}}" autocomplete="off">
                                @error('user_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="w-12">
                                <button type="submit" class="btn btn-primary" name="">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
@endsection