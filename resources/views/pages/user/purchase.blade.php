@extends('layouts.user')
@section('title','Purchase')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Produk yang telah dibeli</a></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                    <div class="table-responsive">
                        <table class="table dash_list">
                            <thead>
                                <tr>
                                    <th scope="col">Webinar</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Dipesan pada</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($webinars as $weby)
                                <tr>
                                    <td><div class="smalls lg">{{ $weby->webinar }}</div></td>
                                    <td><span class="smalls lg">Rp{{ number_format($weby->cost,2,',','.') }}</span></td>
                                    <td><span class="smalls lg">{{ $weby->created_at }}</span></td>
                                    <td><span class="smalls lg">
                                        @if($weby->status == 'Belum Bayar')
                                        <a href="" class="badge badge-danger">{{ $weby->status }}</a>
                                        @else
                                        <a href="" class="badge badge-success">{{ $weby->status }}</a>
                                        @endif
                                    </span></td>
                                    <td>
                                        @if($weby->status == 'Belum Bayar')
                                        -
                                        @else
                                        <a href="/user/webinar/{{ $weby->url }}" class="btn btn-sm btn-primary">Lihat</a>
                                        @endif
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