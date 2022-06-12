@extends('layouts.user')
@section('title','Time Management Instagram')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Time Management {{ $aplikasi->aplikasi }} <a href="/user/time-management/create" class="badge badge-primary">Tambah Data</a></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                    <div class="table-responsive">
                        <table class="table dash_list">
                            <thead>
                                <tr>
                                    <th scope="col">Aplikasi</th>
                                    <th scope="col">Batas Penggunaan</th>
                                    <th scope="col">Periode</th>
                                    <th scope="col">Data Diperbarui</th>
                                    <th scope="col">Data Dibuat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($time_management as $time)
                                <tr>
                                    <td><div class="smalls lg">{{ $time->aplikasi }}</div></td>
                                    <td><span class="smalls lg">{{ $time->batas_penggunaan }}</span></td>
                                    <td><span class="smalls lg">{{ $time->periode }}</span></td>
                                    <td><span class="smalls lg">{{ $time->updated_at }}</span></td>
                                    <td><span class="smalls lg">{{ $time->created_at }}</span></td>
                                    <td>
                                        <a href="/user/time-management/delete/{{ $time->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fas fa-trash"></i></a>
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