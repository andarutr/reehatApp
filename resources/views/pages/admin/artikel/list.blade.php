@extends('layouts.admin')
@section('title','Artikel')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Artikel <a href="/admin/artikel/create" class="badge badge-primary">Tambah Data</a></h6>
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
                                    <th scope="col">Judul</th>
                                    <th scope="col">Diperbarui</th>
                                    <th scope="col">Dibuat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <th scope="row">1</th>
                                    <td><img src="/assets/img/artikel/artikel_1.jpg" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">Kenali Tips Menggunakan Teknik Pomodoro, Teknik Belajar Efektif</div></td>
                                    <td><span class="smalls lg">12 Februari 2022</span></td>
                                    <td><span class="smalls lg">12 Februari 2022</span></td>
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
                                    <td><img src="/assets/img/artikel/artikel_2.jpg" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">Tips Membangun Kebiasaan Baru Agar Semakin Produktif</div></td>
                                    <td><span class="smalls lg">06 Maret 2022</span></td>
                                    <td><span class="smalls lg">06 Maret 2022</span></td>
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
                                    <td><img src="/assets/img/artikel/artikel_3.jpg" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">Pelajari Kiat-Kiat Ini Agar Kemampuan Decision Making Kamu Meningkat</div></td>
                                    <td><span class="smalls lg">6 Maret 2022</span></td>
                                    <td><span class="smalls lg">6 Maret 2022</span></td>
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
                                    <td><img src="/assets/img/artikel/artikel_4.jpg" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">Sering Dikejar Deadline Tugas? Yuk Kenali Konsep Planning Fallacy</div></td>
                                    <td><span class="smalls lg">4 Maret 2022</span></td>
                                    <td><span class="smalls lg">4 Maret 2022</span></td>
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
                                    <td><img src="/assets/img/artikel/artikel_5.jpg" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">5 Cara Menentukan Prioritas Supaya Terhindar Dari The Mere Urgency Effect</div></td>
                                    <td><span class="smalls lg">26 Februari 2022</span></td>
                                    <td><span class="smalls lg">26 Februari 2022</span></td>
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
                                    <th scope="row">6</th>
                                    <td><img src="/assets/img/artikel/artikel_6.jpg" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">Merasa Nggak Produktif? Mungkin Kamu Mengalami Productivity Shame!</div></td>
                                    <td><span class="smalls lg">16 Februari 2022</span></td>
                                    <td><span class="smalls lg">16 Februari 2022</span></td>
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
                                    <th scope="row">7</th>
                                    <td><img src="/assets/img/artikel/artikel_7.jpg" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">Mengenal Zeigarnik Effect, Kebiasaan Mengingat Pekerjaan Yang Belum Usai</div></td>
                                    <td><span class="smalls lg">8 Februari 2022</span></td>
                                    <td><span class="smalls lg">8 Februari 2022</span></td>
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
                                    <th scope="row">8</th>
                                    <td><img src="/assets/img/artikel/artikel_8.jpg" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">Time Management: Cara Mengatur Waktu Dengan Metode ALPEN Agar Produktif</div></td>
                                    <td><span class="smalls lg">2 Februari 2022</span></td>
                                    <td><span class="smalls lg">2 Februari 2022</span></td>
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
                                    <th scope="row">9</th>
                                    <td><img src="/assets/img/artikel/artikel_9.jpg" class="img-fluid" width="80" alt="" /></td>
                                    <td><div class="smalls lg">Gaya Belajar: Kenali 4 Macam Gaya Belajar Untuk Mengatasi Rasa Malas</div></td>
                                    <td><span class="smalls lg">1 Februari 2022</span></td>
                                    <td><span class="smalls lg">1 Februari 2022</span></td>
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