@extends('layouts.admin')
@section('title','Webinar')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Webinar <a href="/admin/webinar/create" class="badge badge-primary">Tambah Data</a></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                    <div class="table-responsive">
                        <table class="table dash_list">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Webinar</th>
                                    <th scope="col">Pembicara</th>
                                    <th scope="col">Diperbarui</th>
                                    <th scope="col">Dibuat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <th scope="row">1</th>
                                    <td><img src="/assets/img/webinar/webinar_1.png" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">Mengatasi Stress Akibat Tekanan Kerja</div></td>
                                    <td><div class="smalls lg">Ghassani Salsabila, S.Psi</div></td>
                                    <td><span class="smalls lg">18 Juni 2022</span></td>
                                    <td><span class="smalls lg">18 Juni 2022</span></td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="drp-select dropdown-menu">
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><img src="/assets/img/webinar/webinar_2.png" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">Menuju Hidup Produktif Dan Sehat Mental</div></td>
                                    <td><div class="smalls lg">Shabrina Fitriandari, M.Psi, Psikolog</div></td>
                                    <td><span class="smalls lg">23 April 2022</span></td>
                                    <td><span class="smalls lg">23 April 2022</span></td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="drp-select dropdown-menu">
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td><img src="/assets/img/webinar/webinar_3.png" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">Melatih Emosi Dan Amarahmu Sebaik Mungkin</div></td>
                                    <td><div class="smalls lg">Fadhilah Eryanda, M.PSi., Psikolog</div></td>
                                    <td><span class="smalls lg">14 Mei 2022</span></td>
                                    <td><span class="smalls lg">14 Mei 2022</span></td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="drp-select dropdown-menu">
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td><img src="/assets/img/webinar/webinar_4.png" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">Mengatasi Sifat Perfeksionis Dan Merubahnya Menjadi Potensi</div></td>
                                    <td><div class="smalls lg">Fionna Callista, S.Psi</div></td>
                                    <td><span class="smalls lg">21 Mei 2022</span></td>
                                    <td><span class="smalls lg">21 Mei 2022</span></td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="drp-select dropdown-menu">
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td><img src="/assets/img/webinar/webinar_5.png" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">Mengatasi Trauma Inner Child</div></td>
                                    <td><div class="smalls lg">Durah Amajida, S.Psi</div></td>
                                    <td><span class="smalls lg">4 Juni 2022</span></td>
                                    <td><span class="smalls lg">4 Juni 2022</span></td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="drp-select dropdown-menu">
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                            </div>
                                        </div>
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