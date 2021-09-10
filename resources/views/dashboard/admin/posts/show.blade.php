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
              <li class="breadcrumb-item active">Preview</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Preview</h1>
            </div>
            <section class="container">
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <h1 class=" my-3">{{$post->title}}</h1>
                        <div class="card-artikels d-flex justify-content-center flex-column  gap-5">
                            <img class="img-fluid" src="{{ asset('images/'.$post->photo) }}"  alt="gambar">
                            <p>{!!$post->body!!}</p>
                        </div>
                    </div>            
                </div>
            </section>
        </div>
    </div>
</div>
@endsection