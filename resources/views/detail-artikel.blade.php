@extends('master.master')

@section("title","Detail-Card")

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <h1 class=" my-3">{{$post->title}}</h1>
                    <div class="card-artikels d-flex justify-content-center flex-column gap-2">
                        <img class="img-fluid" src="{{ asset('images/'.$post->photo) }}"  alt="gambar">
                        <p>{!!$post->body!!}</p>
                    </div>
                </div>
            </div>            
        </div>
@endsection