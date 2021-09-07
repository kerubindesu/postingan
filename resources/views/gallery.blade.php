@extends('master.master')

@section("title", "Gallery")

@section('content')
    <section class="custom-banner mb-3">
        <img src="https://static.wixstatic.com/media/686de7a7a0bd4bdd94029a8eafaa004d.jpg/v1/fill/w_1899,h_411,al_c,q_85,usm_0.66_1.00_0.01/686de7a7a0bd4bdd94029a8eafaa004d.webp" alt="" class="custom-banner-img">
        <div class="custom-banner-caption col-10">
            <a href="" class="custom-banner-text">GALLERY</a>
        </div>
    </section>
    <div class="container">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
            <div class="col img-item">
                <img src="{{ asset('img/1.jpg') }}" class="gallery-item" alt="gambar">
            </div>    
            <div class="col img-item">
                <img src="{{ asset('img/2.jpg') }}" class="gallery-item" alt="gambar">
            </div>   
            <div class="col img-item">
                <img src="{{ asset('img/3.jpg') }}" class="gallery-item" alt="gambar">
            </div>   
            <div class="col img-item">
                <img src="{{ asset('img/4.jpg') }}" class="gallery-item" alt="gambar">
            </div>   
            <div class="col img-item">
                <img src="{{ asset('img/5.jpg') }}" class="gallery-item" alt="gambar">
            </div>   
            <div class="col img-item">
                <img src="{{ asset('img/6.jpg') }}" class="gallery-item" alt="gambar">
            </div>   
        </div>    
        <!-- Button trigger modal -->
  
        <!-- Modal -->
        <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <img src="{{ asset('img/1.jpg') }}" class="modal-img" alt="gambar">
                </div>
            </div>
            </div>
        </div>
    </div>   
@endsection