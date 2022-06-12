@extends('layouts.user')
@section('title','Kumpulan Webinar')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-9 col-md-12">
                    <div class="form-group smalls">
                        <h6 class="m-0">Kumpulan Webinar</h6>
                    </div>
                </div>
            </div>
            
            <div class="row">
                @foreach($webinars as $webinar)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="th_sety">
                        <div class="th_sety_thumb">
                            <img src="/assets/img/webinar/{{ $webinar->thumbnail }}" class="img-fluid rounded" alt="" />
                        </div>
                        <div class="th_sety_caption">
                            <h5>{{ $webinar->title }}</h5>
                            <div class="sedi_09">{{ $webinar->mentor }}</div>
                            <p>Rp{{ number_format($webinar->cost,2,',','.') }}</p>
                            <a href="/user/pembayaran/{{ $webinar->url }}" class="them_sct active mt-4 mb-2" onclick="return confirm('Yakin ingin membeli webinar ini ?')"><i class="fas fa-home mr-1"></i>BELI</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</div>
@endsection