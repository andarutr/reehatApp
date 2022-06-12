@extends('layouts.auth')
@section('title','Selamat Datang di aplikasi Reehat')
@section('content')    
<section>
    <h1 class="text-center mb-5">Pilih Sesi Anda</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <center>
                    <img src="/assets/img/pie-chart.png" class="img-fluid" width="200" />
                </center>
                <a href="/auth/login/pengurus" class="btn full-width btn-md theme-bg text-white">PENGURUS</a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <center>
                    <img src="/assets/img/user.png" class="img-fluid" width="200" />
                </center>
                <a href="/auth/login/pengguna" class="btn full-width btn-md theme-bg text-white">PENGGUNA</a>
            </div>
        </div>
        <br><br><br><br><br>
    </div>
</section>
@endsection