@extends('layouts.auth')
@section('title','Login Pengguna')
@section('content')    
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <form action="/login" method="POST">@csrf
                    <div class="crs_log_wrap">
                        <div class="crs_log__thumb">
                            <img src="/assets/img/background-login.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="crs_log__caption">
                            <div class="rcs_log_123">
                                <div class="rcs_ico"><i class="fas fa-lock"></i></div>
                            </div>
                            
                            <div class="rcs_log_124">
                                <div class="Lpo09"><h4>Login Pengguna</h4></div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Masukkan Email" value="{{ old('email') }}">
                                    @error('email')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password" />
                                    @error('password')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn full-width btn-md theme-bg text-white mt-3 mb-5">Login</button>
                                </div>
                            </div>
                        </div>
                        <div class="crs_log__footer d-flex justify-content-between">
                            <div class="fhg_45"><p class="musrt">Tidak punya akun? <a href="/register" class="theme-cl">Register</a></p></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br><br><br><br><br>
    </div>
</section>
@endsection