@extends('master.master')

@section("title", "Lokasi")

@section('content')
    <div class="row">
        <div class="col-md-12 my-3">
            <h1 class="text-center">Lokasi Kami</h1>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-md-12 lokasi">
            lokasi otw
        </div>
    </div> --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               <div class="wrapper">
                <h3>Hubungi Kami</h3>
                <p>Dengan Mengisi Formulir Ini</p>
                <div class="contact-form">
                  <div class="input-fields">
                    <input type="text" class="input" placeholder="Nama">
                    <input type="email" class="input" placeholder="Email">
                    <input type="text" class="input" placeholder="No HP">
                    <div class="msg">
                        <textarea placeholder="Pesan"></textarea>        
                    </div>
                    <button class="btn btn-primary">Kirim</button>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 section-detail-kontak">
                <h3>Detail Kontak</h3>
                <p class="title">Alamat :</p>
                <p class="isi">Jl. Salemba Raya No.28, RT.5/RW.6, Kenari, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10430, Indonesia</p>
                <p class="title">Telepon :</p>
                <p class="isi">021-3100470</p>
                <p class="title">Seluler :</p>
                <p class="isi">021-3100470</p>
                <p class="title">Telepon :</p>
                <p class="isi">021-3100470</p>
                <p class="title">Telepon :</p>
                <p class="isi">021-3100470</p>
                <p class="title">Waktu Kerja :</p>
                <p class="isi">Senin - Jumat, 07:30 - 16:00</p>
            </div>
        </div>
    </div>
   
@endsection