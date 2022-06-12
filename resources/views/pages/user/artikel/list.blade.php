@extends('layouts.user')
@section('title','Kumpulan Artikel')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-9 col-md-12">
                    <div class="form-group smalls">
                        <h6 class="m-0">Kumpulan Artikel</h6>
                    </div>
                </div>
            </div>
            
            <div class="row">
                @foreach($articles as $artikel)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="th_sety">
                        <div class="th_sety_thumb">
                            <a href="/user/artikel/{{ $artikel->url }}">
                                <img src="/assets/img/artikel/{{ $artikel->picture }}" class="img-fluid rounded" alt="" />
                            </a>
                        </div>
                        <div class="th_sety_caption">
                            <h5><a href="/user/artikel/{{ $artikel->url }}">{{ $artikel->title }}</a></h5>
                            <p>{{ $artikel->created_at }}</p>
                            <a href="/user/artikel/{{ $artikel->url }}" class="them_sct active mt-4 mb-2"><i class="fas fa-book mr-1"></i>Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{ $articles->links() }}
    </div>
</div>
@endsection