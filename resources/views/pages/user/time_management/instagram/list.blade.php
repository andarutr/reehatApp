@extends('layouts.user')
@section('title','Time Management Instagram')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Time Management Instagram <a href="/user/time-management/create" class="badge badge-primary">Tambah Data</a></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                    <div class="table-responsive">
                        <table class="table dash_list">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Aplikasi</th>
                                    <th scope="col">Batas Penggunaan</th>
                                    <th scope="col">Periode</th>
                                    <th scope="col">Data Diperbarui</th>
                                    <th scope="col">Data Dibuat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">1</th>
                                    <td><div class="smalls lg">Instagram</div></td>
                                    <td><span class="smalls lg">8 Jam</span></td>
                                    <td><span class="smalls lg">Januari - Februari</span></td>
                                    <td><span class="smalls lg">14 April 2022</span></td>
                                    <td><span class="smalls lg">16 April 2022</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection