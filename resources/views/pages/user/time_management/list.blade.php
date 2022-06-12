@extends('layouts.user')
@section('title','Time Management')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-9 col-md-12">
                    <div class="form-group smalls">
                        <h6 class="m-0">Time Management</h6>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3 mb-4">
                    <div class="th_sety">
                        <div class="th_sety_thumb">
                            <img src="/assets/img/time_management/instagram.png" class="img-fluid" width="420" height="250" />
                        </div>
                        <div class="th_sety_caption">
                            <h5>Instagram</h5>
                            <div class="sedi_09">Set your time</div>
                            <a href="/user/time-management/instagram" class="them_sct active mt-4 mb-2"><i class="fas fa-home mr-1"></i>Buat Schedule</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3 mb-4">
                    <div class="th_sety">
                        <div class="th_sety_thumb">
                            <img src="/assets/img/time_management/youtube.png" class="img-fluid" width="420" height="250" />
                        </div>
                        <div class="th_sety_caption">
                            <h5>Youtube</h5>
                            <div class="sedi_09">Set your time</div>
                            <a href="#" class="them_sct active mt-4 mb-2"><i class="fas fa-home mr-1"></i>Buat Schedule</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3 mb-4">
                    <div class="th_sety">
                        <div class="th_sety_thumb">
                            <img src="/assets/img/time_management/tiktok.png" class="img-fluid" width="420" height="250" />
                        </div>
                        <div class="th_sety_caption">
                            <h5>Tiktok</h5>
                            <div class="sedi_09">Set your time</div>
                            <a href="#" class="them_sct active mt-4 mb-2"><i class="fas fa-home mr-1"></i>Buat Schedule</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3 mb-4">
                    <div class="th_sety">
                        <div class="th_sety_thumb">
                            <img src="/assets/img/time_management/facebook.png" class="img-fluid" width="420" height="250" />
                        </div>
                        <div class="th_sety_caption">
                            <h5>Facebook</h5>
                            <div class="sedi_09">Set your time</div>
                            <a href="#" class="them_sct active mt-4 mb-2"><i class="fas fa-home mr-1"></i>Buat Schedule</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-3 mb-4">
                    <div class="th_sety">
                        <div class="th_sety_thumb">
                            <img src="/assets/img/time_management/whatsapp.png" class="img-fluid" width="420" height="250" />
                        </div>
                        <div class="th_sety_caption">
                            <h5>Whatsapp</h5>
                            <div class="sedi_09">Set your time</div>
                            <a href="#" class="them_sct active mt-4 mb-2"><i class="fas fa-home mr-1"></i>Buat Schedule</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection