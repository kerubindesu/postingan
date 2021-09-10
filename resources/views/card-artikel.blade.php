@extends('master.master')

@section("title","Detail-Card")


@section('content')
<div class="container mb-5">
    <div class="col-md-8 m-auto">
        <h1 class="text-center my-3">{{$title}}</h1>
        @foreach($posts as $post)
        @if($post->category_id == $category->id)
        <div class="block mt-5">
            <span class="col-md-4">
                {{ date('d M Y', strtotime($post->created_at)) }}<h5>{{$post->title}}</h5>
            </span>
            <span class="col-md-4">
                <p>{!! Str::words($post->body, 20, ' ...') !!} <a href="/c/{{$kelas->slug}}/{{$category->slug}}/{{$post->slug}}">read more</a></p>
            </span>
            <div class="col-md-4">
                <img src="{{ asset('images/'.$post->photo) }}" width="200px" alt="gambar">
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection