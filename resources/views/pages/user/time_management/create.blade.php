@extends('layouts.user')
@section('title','Create Time Management Instagram')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="form_blocs_wrap">
                <form>
                    <div class="row justify-content-between">
                        
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-basic-tab" data-toggle="pill" data-target="#v-pills-basic" type="button" role="tab" aria-controls="v-pills-basic" aria-selected="true">Instagram</button>
                                <button class="nav-link" id="v-pills-login-tab" data-toggle="pill" data-target="#v-pills-login" type="button" role="tab" aria-controls="v-pills-login" aria-selected="false">Youtube</button>
                                <button class="nav-link" id="v-pills-social-tab" data-toggle="pill" data-target="#v-pills-social" type="button" role="tab" aria-controls="v-pills-social" aria-selected="false">Tiktok</button>
                                <button class="nav-link" id="v-pills-payout-tab" data-toggle="pill" data-target="#v-pills-payout" type="button" role="tab" aria-controls="v-pills-payout" aria-selected="false">Whatsapp</button>
                                <button class="nav-link" id="v-pills-finish-tab" data-toggle="pill" data-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false">Twitter</button>
                            </div>
                        </div>
                        
                        <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                                
                            <div class="tab-content" id="v-pills-tabContent">
                                <!-- Basic -->
                                <div class="tab-pane fade show active" id="v-pills-basic" role="tabpanel" aria-labelledby="v-pills-basic-tab">
                                    
                                    <div class="form-group smalls">
                                        <label>Batas Penggunaan Aplikasi</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Periode</label>
                                        <input type="text" class="form-control" placeholder="Contoh: Januari - Maret">
                                    </div>
                                    
                                    <button class="btn btn-primary">Create</button>
                                    
                                </div>
                                
                                <!-- login -->
                                <div class="tab-pane fade" id="v-pills-login" role="tabpanel" aria-labelledby="v-pills-login-tab">
                                    <div class="form-group smalls">
                                        <label>Batas Penggunaan Aplikasi</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Periode</label>
                                        <input type="text" class="form-control" placeholder="Contoh: Januari - Maret">
                                    </div>
                                    
                                    <button class="btn btn-primary">Create</button>
                                </div>
                                
                                <!-- social -->
                                <div class="tab-pane fade" id="v-pills-social" role="tabpanel" aria-labelledby="v-pills-social-tab">
                                    
                                    <div class="form-group smalls">
                                        <label>Batas Penggunaan Aplikasi</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Periode</label>
                                        <input type="text" class="form-control" placeholder="Contoh: Januari - Maret">
                                    </div>
                                    
                                    <button class="btn btn-primary">Create</button>
                                </div>
                                
                                <!-- payout -->
                                <div class="tab-pane fade" id="v-pills-payout" role="tabpanel" aria-labelledby="v-pills-payout-tab">
                                    
                                    <div class="form-group smalls">
                                        <label>Batas Penggunaan Aplikasi</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Periode</label>
                                        <input type="text" class="form-control" placeholder="Contoh: Januari - Maret">
                                    </div>
                                    
                                    <button class="btn btn-primary">Create</button>
                                </div>
                                
                                <!-- finish -->
                                <div class="tab-pane fade" id="v-pills-finish" role="tabpanel" aria-labelledby="v-pills-finish-tab">
                                    <div class="form-group smalls">
                                        <label>Batas Penggunaan Aplikasi</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Periode</label>
                                        <input type="text" class="form-control" placeholder="Contoh: Januari - Maret">
                                    </div>
                                    
                                    <button class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection