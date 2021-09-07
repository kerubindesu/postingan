@extends('master.master')

@section('title', 'Tentang Kami')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto my-3 section-judul-tentang-kami">
            <h1 class="text-center">Tentang Kami</h1>
        </div>
    </div>
    <div class="row section-tentang-kami gy-4">
         <div class="section-gambar-tugas col-md-6">
             <img class="img-fluid" src="https://images.unsplash.com/photo-1581090690193-36146cb0d813?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="gambar">
         </div>
         <div class="col md-6 section-tugas">
             <h2 class="text-center">Tugas</h2>           
             <p>Berdasarkan Peraturan Presiden No. 46 Tahun 2015 tentang Kementerian Sosial, dinyatakan bahwa Kementerian Sosial mempunyai tugas menyelenggarakan urusan di bidang rehabilitasi sosial, jaminan sosial, pemberdayaan sosial, perlindungan sosial, dan penanganan fakir miskin untuk membantu Presiden dalam menyelenggarakan pemerintahan Negara. dan inklusivitas.</p>
         </div>
         <div class="col-md-6 section-fungsi">
             <h2 class="text-center">Fungsi</h2>
             <ol>
                 <li>
                     Perumusan, penetapan, dan pelaksanaan kebijakan di bidang rehabilitasi sosial, jaminan sosial, pemberdayaan sosial, perlindungan sosial, dan penanganan fakir miskin.
                 </li>
                 <li>
                     Penetapan kriteria dan data fakir miskin dan orang tidak mampu.
                 </li>
                 <li>
                     Penetapan standar rehabilitasi sosial.
                 </li>
                 <li>
                     Koordinasi pelaksanaan tugas, pembinaan, dan pemberian dukungan administrasi kepada seluruh unsur organisasi dilingkungan Kementerian Sosial.
                 </li>
                 <li>
                     Pengelolaan barang milik/kekayaan Negara yang menjadi tanggung jawab Kementerian Sosial.
                 </li>
                 <li>
                     Pengawasan atas pelaksanaan tugas di lingkungan Kementerian Sosial.
                 </li>
                 <li>
                     Pelaksanaan bimbingan teknis dan supervisi atas pelaksanaan urusan Kementerian Sosial di daerah.
                 </li>
                 <li>
                     Pelaksanaan pendidikan dan pelatihan, penelitian dan pengembangan kesejahteraan sosial, serta penyuluhan sosial.
                 </li>
                 <li>
                     Pelaksanaan dukungan yang bersifat substantif kepada seluruh unsur organisasi di lingkungan Kementerian Sosial
                 </li>
                 </ol>
         </div>
         <div class="section-gambar-fungsi col-md-6">
             <img class="img-fluid" src="https://images.unsplash.com/photo-1581090690193-36146cb0d813?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="gambar">
         </div>
    </div>
</div>
   
@endsection