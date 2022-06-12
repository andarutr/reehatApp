@extends('layouts.user')
@section('title','Dashboard')
@section('content')
<div class="row">
						
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="dashboard_stats_wrap">
            <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center theme-bg mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-book"></i></div></div>
            <div class="dashboard_stats_wrap_content"><h4>9</h4> <span>Artikel Tersedia</span></div>
        </div>	
    </div>
    
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="dashboard_stats_wrap">
            <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-primary mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-dollar-sign"></i></div></div>
            <div class="dashboard_stats_wrap_content"><h4>0</h4> <span>Pembayaran</span></div>
        </div>	
    </div>
    
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="dashboard_stats_wrap">
            <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-warning mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div></div>
            <div class="dashboard_stats_wrap_content"><h4>4</h4> <span>Pengguna Baru</span></div>
        </div>	
    </div>
    
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="dashboard_stats_wrap">
            <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-purple mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-gem"></i></div></div>
            <div class="dashboard_stats_wrap_content"><h4>5</h4> <span>Webinar Tersedia</span></div>
        </div>	
    </div>

</div>
<div class="row">

    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <h5>Webinar Terbaru</h5>										
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="grousp_crs">
                    <img src="/assets/img/webinar/webinar_1.png" class="img-fluid mr-3" width="125" />
                    <div class="grousp_crs_left">
                        <div class="grousp_crs_caption"><h4>Mengatasi Stress Akibat Tekanan Kerja</h4><br>Satu Persen</div>
                    </div>
                    <div class="grousp_crs_right">
                        <div class="frt_but"><a href="#" class="btn text-white theme-bg">85K | Beli</a></div>
                    </div>
                </div>
                <div class="grousp_crs">
                    <img src="/assets/img/webinar/webinar_2.png" class="img-fluid mr-3" width="125" />
                    <div class="grousp_crs_left">
                        <div class="grousp_crs_caption"><h4>Menuju Hidup yang Produktif dan Sehat Mental</h4><br>Satu Persen</div>
                    </div>
                    <div class="grousp_crs_right">
                        <div class="frt_but"><a href="#" class="btn text-white theme-bg">85K | Beli</a></div>
                    </div>
                </div>
                <div class="grousp_crs">
                    <img src="/assets/img/webinar/webinar_3.png" class="img-fluid mr-3" width="125" />
                    <div class="grousp_crs_left">
                        <div class="grousp_crs_caption"><h4>Melatih Emosi dan Amarah Sebaik Mungkin</h4><br>Satu Persen</div>
                    </div>
                    <div class="grousp_crs_right">
                        <div class="frt_but"><a href="#" class="btn text-white theme-bg">85K | Beli</a></div>
                    </div>
                </div>
                <div class="grousp_crs">
                    <img src="/assets/img/webinar/webinar_4.png" class="img-fluid mr-3" width="125" />
                    <div class="grousp_crs_left">
                        <div class="grousp_crs_caption"><h4>Mengatasi Sifat Perfeksionis dan Mengubahnya Menjadi Potensi</h4><br>Satu Persen</div>
                    </div>
                    <div class="grousp_crs_right">
                        <div class="frt_but"><a href="#" class="btn text-white theme-bg">85K | Beli</a></div>
                    </div>
                </div>
                <div class="grousp_crs">
                    <img src="/assets/img/webinar/webinar_5.png" class="img-fluid mr-3" width="125" />
                    <div class="grousp_crs_left">
                        <div class="grousp_crs_caption"><h4>Mengatasi Trauma Inner Child</h4><br>Satu Persen</div>
                    </div>
                    <div class="grousp_crs_right">
                        <div class="frt_but"><a href="#" class="btn text-white theme-bg">85K | Beli</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h6>Pengguna Baru</h6>
            </div>
            <div class="ground-list ground-hover-list">
                <div class="ground ground-list-single">
                    <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                        <div class="position-absolute text-success h5 mb-0"><i class="fas fa-user"></i></div>
                    </div>

                    <div class="ground-content">
                        <h6><a href="#">Andaru Triadi</a></h6>
                        <small class="text-fade">Pengguna Baru</small>
                        <span class="small">Bergabung pada 8 April 2022</span>
                    </div>
                </div>
                <div class="ground ground-list-single">
                    <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                        <div class="position-absolute text-success h5 mb-0"><i class="fas fa-user"></i></div>
                    </div>

                    <div class="ground-content">
                        <h6><a href="#">Syifa Octavia Damayanthi</a></h6>
                        <small class="text-fade">Pengguna Baru</small>
                        <span class="small">Bergabung pada 10 April 2022</span>
                    </div>
                </div>
                <div class="ground ground-list-single">
                    <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                        <div class="position-absolute text-success h5 mb-0"><i class="fas fa-user"></i></div>
                    </div>

                    <div class="ground-content">
                        <h6><a href="#">Farhan Ardiansyah</a></h6>
                        <small class="text-fade">Pengguna Baru</small>
                        <span class="small">Bergabung pada 9 April 2022</span>
                    </div>
                </div>
                <div class="ground ground-list-single">
                    <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                        <div class="position-absolute text-success h5 mb-0"><i class="fas fa-user"></i></div>
                    </div>

                    <div class="ground-content">
                        <h6><a href="#">Bagus Prio Utomo</a></h6>
                        <small class="text-fade">Pengguna Baru</small>
                        <span class="small">Bergabung pada 12 April 2022</span>
                    </div>
                </div>
            </div>
        </div>		
    </div>

</div>
@endsection