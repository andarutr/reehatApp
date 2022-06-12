@extends('layouts.user')
@section('title','My Profile')
@section('content')
<div class="row">
    <div class="col-xl-7 col-lg-6 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Update Profile</h6>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <form>
                        <div class="form-group smalls">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" value="Melda Yusnita" />
                        </div>
                        <div class="form-group smalls">
                            <label>Username</label>
                            <input type="text" class="form-control" value="melda123" />
                        </div>
                        <div class="form-group smalls">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="" />
                        </div>
                        <div class="form-group smalls">
                            <button class="btn theme-bg text-white" type="button">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="col-xl-5 col-lg-6 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <form>
                        <div class="form-group smalls">
                            <label>Password Lama</label>
                            <input type="password" class="form-control" />
                        </div>
                        <div class="form-group smalls">
                            <label>Password Baru</label>
                            <input type="password" class="form-control" />
                        </div>
                        <div class="form-group smalls">
                            <label>Konfirmasi Password</label>
                            <input type="password" class="form-control" />
                        </div>
                        <div class="form-group smalls">
                            <button class="btn theme-bg text-white" type="button">Ganti Password</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    
</div>
@endsection