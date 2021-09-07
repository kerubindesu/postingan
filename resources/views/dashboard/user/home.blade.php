{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3" style="margin-top: 45px">
             <h4>user Dashboard</h4><hr>
             <table class="table table-striped table-inverse table-responsive">
                 <thead class="thead-inverse">
                     <tr>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Action</th>
                     </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>{{ Auth::guard('web')->user()->name }}</td>
                             <td>{{ Auth::guard('web')->user()->email }}</td>
                             <td>
                                <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                            </td>
                         </tr>
                     </tbody>
             </table>
        </div>
    </div>
</div>
@endsection --}}


@extends('master.master')   

@section('content')
<div class="d-flex justify-content-center">
    <div class="col-md-10 my-3 container-home">
        <iframe src="https://www.youtube.com/embed/QGKVwWvqSl0" frameborder="0" allowfullscreen autoplay></iframe>
        <div class="row card-iklan-kelas my-4">
            <div class="col-md-6 d-flex justify-content-center m-auto">
                <img width="100%" height="300px" src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="gambar-penawaran" class="img-fluid">
            </div>
            <div class="col-md-6 mb-3">
                <div class="card-iklan-kelas-info">
                    <span class="option-one">DAPATKAN KELAS PEMBINAAN GRATIS</span>
                    <p class="">LANGSUNG DARI <br/> PARA EXPERT DI <br/> BIDANGNYA</p>
                    <button>GABUNG SEKARANG</button>
                    <span class="option-two">DENGAN BERGABUNG SEKARANG ANDA AKAN MENDAPATKAN <br/>  BENEFIT UNTUK ONLINE SHARING SESSION</span>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-6 card-to-page agro-img">
                <h1>Agrobisnis</h1>
                <p>View Project <i class="fas fa-angle-right"></i></p>
            </div>
            <div class="col-md-6 card-to-page barber-img">
                <h1>Barber Shop</h1>
                <p>View Project <i class="fas fa-angle-right"></i></p>
            </div>
            <div class="col-md-6 card-to-page beverage-img">
                <h1>Beverage</h1>
                <p>View Project <i class="fas fa-angle-right"></i></p>
            </div>
            <div class="col-md-6 card-to-page desain-kreatif-img">
                <h1>Desain Kreatif</h1>
                <p>View Project <i class="fas fa-angle-right"></i></p>
            </div>
            <div class="col-md-6 card-to-page computer-img ">
                <h1>Komputer Dasar</h1>
                <p>View Project <i class="fas fa-angle-right"></i></p>
            </div>
            <div class="col-md-6 card-to-page kuliner-img">
                <h1>Kuliner</h1>
                <p>View Project <i class="fas fa-angle-right"></i></p>
            </div>
            <div class="col-md-6 card-to-page mengemudi-img">
                <h1>Mengemudi</h1>
                <p>View Project <i class="fas fa-angle-right"></i></p>
            </div>
            <div class="col-md-6 card-to-page artikel-terkait-img">
                <h1>Artikel Terkait</h1>
                <p>View Project <i class="fas fa-angle-right"></i></p>
            </div>
        </div>
        <div class="row my-3 section-apa-kata-mereka">
            <div class="col-md-5 section-card-artikel d-flex flex-column">
                <div class="card-artikel">
                    <h1>Karang Taruna Citra Pemuda Olah Sampah Menjadi Rupiah</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, vel Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, ve Lorem ipsum dolor sit amet consectetur adipisicing elit. Istasasase, ve ....</p>
                </div>
                <div class="card-artikel">
                    <h1>Karang Taruna Citra Pemuda Olah Sampah Menjadi Rupiah</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, vel Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, ve Lorem ipsum dolor sit amet consectetur adipisicing elit. Istasasase, ve ....</p>
                </div>
                <div class="card-artikel">
                    <h1>Karang Taruna Citra Pemuda Olah Sampah Menjadi Rupiah</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, vel Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, ve Lorem ipsum dolor sit amet consectetur adipisicing elit. Istasasase, ve ....</p>
                </div>
            </div>
            <div class="col-md-7 section-testimoni d-flex flex-column align-items-center mt-2">
                <h1>APA KATA MEREKA?</h1>
                <div class="card-testimoni d-flex align-items-center justify-content-center">
                    <img height="150px" width="150px" class="rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" alt="avatar">
                    <div class="deskripsi-testimoni">
                        <p class="nama-test">Muhammad Mario W.</p>
                        <p class="role-test">Pro Player Apex Legends</p>
                        <p class="desk-test">Aku Cinta Apex, Aku Cinta EA Sport, Apa itu Valorant ? Saya tidak mengenalnya!</p>
                    </div>
                </div>
                <div class="card-testimoni d-flex align-items-center justify-content-center mt-2">
                    <img height="150px" width="150px" class="rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" alt="avatar">
                    <div class="deskripsi-testimoni">
                        <p class="nama-test">Muhammad Mario W.</p>
                        <p class="role-test">Pro Player Apex Legends</p>
                        <p class="desk-test">Aku Cinta Apex, Aku Cinta EA Sport, Apa itu Valorant ? Saya tidak mengenalnya!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection