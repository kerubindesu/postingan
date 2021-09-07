@extends('master.master')

@section('title',  'Agrobisnis')

@section('content')
    <section class="custom-banner mb-3">
        <img src="https://static.wixstatic.com/media/686de7a7a0bd4bdd94029a8eafaa004d.jpg/v1/fill/w_1899,h_411,al_c,q_85,usm_0.66_1.00_0.01/686de7a7a0bd4bdd94029a8eafaa004d.webp" alt="" class="custom-banner-img">
        <div class="custom-banner-caption col-10">
            <a href="" class="custom-banner-text uppercase">{{$kelas->name}}</a>
        </div>
    </section>
    <section class="main-page-content mb-3">
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-8">
                    <iframe class="mb-3 px-3 px-lg-0" width="100%" height="420" src="https://www.youtube.com/embed/QGKVwWvqSl0" frameborder="0" allowfullscreen autoplay></iframe>
                    <article class="main-page-article px-3 px-lg-0">
                        <span><h3>{{$kelas->name}}</h3></span>
                        <span>{!!$kelas->body!!}</span>
                    </article>
                </div>
                <aside class="col-lg-4 main-page-aside">
                    @foreach($categories as $category)
                    @if($category->kelas_id == $kelas->id)
                    <div class="main-page-content-aside mb-1 px-3 px-lg-0">
                        <img src="{{ asset('img/'.$category->image) }}" alt="AAA" class="img-aside">
                        <div class="img-aside-caption">
                            <a href="{{url('/kelas/'.$category->slug)}}">
                                <span class="image-aside-title">{{$category->name}}</span>
                                <p>{{$category->slug}}</p>
                            </a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </aside>
            </div>
        </div>
    </section>

@endsection

