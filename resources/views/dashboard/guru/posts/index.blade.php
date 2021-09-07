@extends('master.dashboard-guru')

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
              <li class="breadcrumb-item active">Post</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Post Berita</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="{{url('guru/guruPosts/create')}}" class="btn btn-primary me-2 mb-3 mr-3">
                        <span><i class="far fa-plus-square"></i></span>
                        Posting Berita Baru
                    </a>
                    <div class="btn-group">
                        <div class="pt-2">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Alert -->
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Nomor</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Artikel</th>
                            <th scope="col" colspan="3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $posts as $post )
                        <tr class="text-center">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><img src="{{ asset('images/'.$post->photo) }}" class="img-fluid rounded" width="180px" alt="{{$post->photo}}"></td>
                            <td><p>{{ $post->title }}</p></td>
                            <td>{!! substr($post->body,0,96) !!}..</td>
                            <td><a href="{{ url('guruPosts/'.$post->slug)}}" class="btn btn-primary"><i class="far fa-eye"></i></a></td>
                            <td><a href="{{ url('guru/guruPosts/'.$post->slug.'/edit')}}" class="btn btn-warning"><i class="far fa-edit"></i></a></td>
                            <td>
                                <form action="{{ url('guru/guruPosts/'.$post->id)}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-dark" name="delete" onclick="return confirm('Apakah anda yakin ingin menghapus Data ini?'); "><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>
@endsection