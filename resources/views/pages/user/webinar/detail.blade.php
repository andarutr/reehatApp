@extends('layouts.user')
@section('title','Webinar '.$webinar->title)
@section('content')
<div class="row">

    <div class="col-lg-8 col-md-12 order-lg-first">
        
        <!-- Overview -->
        <div class="edu_wraper">
            <h3 class="edu_title">{{ $webinar->title }}</h3>
            <?= $webinar->description ?>
        </div>
        <iframe width="750" height="450" src="{{ $webinar->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
    <!-- Sidebar -->
    <div class="col-lg-4 col-md-12 order-lg-last">
    
        <div class="ed_view_box style_2 stick_top">
        
            <div class="ed_author">
                <h2 class="theme-cl m-0 center">Rp{{ number_format($webinar->cost,2,',','.') }}</h2>   
            </div>
            <div class="ed_view_link">
                <h4>Nama Mentor:</h4>
                <p>{{ $webinar->mentor }}</p>
                <a href="#" class="btn theme-bg enroll-btn">Sudah Lunas!<i class="ti-angle-right"></i></a>
            </div>
            
        </div>	
        
    </div>

</div>
@endsection			