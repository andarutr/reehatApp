@extends('layouts.admin')
@section('title','Pembayaran')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Pembayaran</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                    <div class="table-responsive">
                        <table class="table dash_list">
                            <thead>
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Pesanan</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Dibuat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($payments as $payment)
                                <tr>
                                    <td>
                                        <a href="/assets/img/account/{{ $payment->picture_user }}" data-fancybox>
                                            <img src="/assets/img/account/{{ $payment->picture_user }}" class="img-fluid" width="60" alt="" />
                                        </a>
                                    </td>
                                    <td><div class="smalls lg">{{ $payment->name_user }}</div></td>
                                    <td><div class="smalls lg">{{ $payment->webinar }}</div></td>
                                    <td><span class="smalls lg">{{ $payment->cost }}</span></td>
                                    <td><span class="smalls lg">{{ $payment->status }}</span></td>
                                    <td><span class="smalls lg">{{ $payment->created_at }}</span></td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="drp-select dropdown-menu">
                                                <a class="dropdown-item" href="/admin/pembayaran/delete/{{ $payment->id }}" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection