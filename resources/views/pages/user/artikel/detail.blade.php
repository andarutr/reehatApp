@extends('layouts.user')
@section('title', ''.$artikel->title)
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12">
                <center>
                    <img src="/assets/img/artikel/{{ $artikel->picture }}" class="img-fluid" width="450">
                </center>
                <h5 class="mt-3 mb-4">{{ $artikel->title }}</h5>
                    <?= $artikel->description; ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection