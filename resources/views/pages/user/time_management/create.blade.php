@extends('layouts.user')
@section('title','Create Time Management Instagram')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="form_blocs_wrap">
                <div class="row justify-content-between">
                    
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-instagram-tab" data-toggle="pill" data-target="#v-pills-instagram" type="button" role="tab" aria-controls="v-pills-instagram" aria-selected="true">Instagram</button>
                            <button class="nav-link" id="v-pills-youtube-tab" data-toggle="pill" data-target="#v-pills-youtube" type="button" role="tab" aria-controls="v-pills-youtube" aria-selected="false">Youtube</button>
                            <button class="nav-link" id="v-pills-tiktok-tab" data-toggle="pill" data-target="#v-pills-tiktok" type="button" role="tab" aria-controls="v-pills-tiktok" aria-selected="false">Tiktok</button>
                            <button class="nav-link" id="v-pills-facebook-tab" data-toggle="pill" data-target="#v-pills-facebook" type="button" role="tab" aria-controls="v-pills-facebook" aria-selected="false">Facebook</button>
                            <button class="nav-link" id="v-pills-whatsapp-tab" data-toggle="pill" data-target="#v-pills-whatsapp" type="button" role="tab" aria-controls="v-pills-whatsapp" aria-selected="false">Whatsapp</button>
                        </div>
                    </div>
                    
                    <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                            
                        <div class="tab-content" id="v-pills-tabContent">
                            <!-- instagram -->
                            <div class="tab-pane fade show active" id="v-pills-instagram" role="tabpanel" aria-labelledby="v-pills-instagram-tab">
                                <form action="/user/time-management" method="POST">@csrf
                                <div class="form-group smalls">
                                    <input type="hidden" class="form-control" name="aplikasi" value="instagram">
                                </div>
                                
                                <div class="form-group smalls">
                                    <label>Batas Penggunaan Aplikasi Instagram</label>
                                    <input type="text" class="form-control" name="batas_penggunaan" placeholder="Contoh: 5 Jam" value="{{ old('batas_penggunaan') }}">
                                    @error('batas_penggunaan')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <div class="form-group smalls">
                                    <label>Periode</label>
                                    <input type="text" class="form-control" placeholder="Contoh: Januari - Maret" name="periode" value="{{ old('periode') }}">
                                    @error('periode')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <button class="btn btn-primary">Create</button>
                                </form>
                            </div>
                            <!-- youtube -->
                            <div class="tab-pane fade show" id="v-pills-youtube" role="tabpanel" aria-labelledby="v-pills-youtube-tab">
                                <form action="/user/time-management/create" method="POST">@csrf
                                <div class="form-group smalls">
                                    <input type="hidden" class="form-control" name="aplikasi" value="youtube">
                                </div>
                                
                                <div class="form-group smalls">
                                    <label>Batas Penggunaan Aplikasi Youtube</label>
                                    <input type="text" class="form-control" name="batas_penggunaan" placeholder="Contoh: 5 Jam" value="{{ old('batas_penggunaan') }}">
                                    @error('batas_penggunaan')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <div class="form-group smalls">
                                    <label>Periode</label>
                                    <input type="text" class="form-control" placeholder="Contoh: Januari - Maret" name="periode" value="{{ old('periode') }}">
                                    @error('periode')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <button class="btn btn-primary">Create</button>
                                </form>
                            </div>
                            <!-- tiktok -->
                            <div class="tab-pane fade show" id="v-pills-tiktok" role="tabpanel" aria-labelledby="v-pills-tiktok-tab">
                                <form action="/user/time-management/create" method="POST">@csrf
                                <div class="form-group smalls">
                                    <input type="hidden" class="form-control" name="aplikasi" value="tiktok">
                                </div>
                                
                                <div class="form-group smalls">
                                    <label>Batas Penggunaan Aplikasi Tiktok</label>
                                    <input type="text" class="form-control" name="batas_penggunaan" placeholder="Contoh: 5 Jam" value="{{ old('batas_penggunaan') }}">
                                    @error('batas_penggunaan')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <div class="form-group smalls">
                                    <label>Periode</label>
                                    <input type="text" class="form-control" placeholder="Contoh: Januari - Maret" name="periode" value="{{ old('periode') }}">
                                    @error('periode')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <button class="btn btn-primary">Create</button>
                                </form>
                            </div>
                            <!-- facebook -->
                            <div class="tab-pane fade show" id="v-pills-facebook" role="tabpanel" aria-labelledby="v-pills-facebook-tab">
                                <form action="/user/time-management/create" method="POST">@csrf
                                <div class="form-group smalls">
                                    <input type="hidden" class="form-control" name="aplikasi" value="facebook">
                                </div>
                                
                                <div class="form-group smalls">
                                    <label>Batas Penggunaan Aplikasi Facebook</label>
                                    <input type="text" class="form-control" name="batas_penggunaan" placeholder="Contoh: 5 Jam" value="{{ old('batas_penggunaan') }}">
                                    @error('batas_penggunaan')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <div class="form-group smalls">
                                    <label>Periode</label>
                                    <input type="text" class="form-control" placeholder="Contoh: Januari - Maret" name="periode" value="{{ old('periode') }}">
                                    @error('periode')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <button class="btn btn-primary">Create</button>
                                </form>
                            </div>
                            <!-- whatsapp -->
                            <div class="tab-pane fade show" id="v-pills-whatsapp" role="tabpanel" aria-labelledby="v-pills-whatsapp-tab">
                                <form action="/user/time-management/create" method="POST">@csrf
                                <div class="form-group smalls">
                                    <input type="hidden" class="form-control" name="aplikasi" value="whatsapp">
                                </div>
                                
                                <div class="form-group smalls">
                                    <label>Batas Penggunaan Aplikasi Whatsapp</label>
                                    <input type="text" class="form-control" name="batas_penggunaan" placeholder="Contoh: 5 Jam" value="{{ old('batas_penggunaan') }}">
                                    @error('batas_penggunaan')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <div class="form-group smalls">
                                    <label>Periode</label>
                                    <input type="text" class="form-control" placeholder="Contoh: Januari - Maret" name="periode" value="{{ old('periode') }}">
                                    @error('periode')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <button class="btn btn-primary">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection