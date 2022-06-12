@extends('layouts.user')
@section('title','Pembayaran Webinar')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12">
                <center>
                    <img src="/assets/img/payment.jpg" class="img-fluid" width="350">
                    <h3 class="mb-4">Informasi Pembayaran Webinar</h3>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Bank</th>
                            <th scope="col">No Rekening</th>
                            <th scope="col">Atas Nama</th>
                            <th scope="col">Jumlah Bayar</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Bank BCA</td>
                            <td>2730193907</td>
                            <td>Andaru Triadi</td>
                            <td>Rp85.000,-</td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="https://wa.me/6281212088497" class="btn btn-sm btn-primary mt-3 mb-3">Upload Bukti Pembayaran</a>
                    </center>
                    <p>NOTE: <br>1. Simpan Struk Pembayaran dan Klik Upload Bukti Pembayaran <br> 2. Diharapkan untuk tidak transfer uang selain informasi diatas. Terimakasih</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection