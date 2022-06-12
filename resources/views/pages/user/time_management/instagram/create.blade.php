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
                                <button class="nav-link active" id="v-pills-basic-tab" data-toggle="pill" data-target="#v-pills-basic" type="button" role="tab" aria-controls="v-pills-basic" aria-selected="true">Basic</button>
                                <button class="nav-link" id="v-pills-login-tab" data-toggle="pill" data-target="#v-pills-login" type="button" role="tab" aria-controls="v-pills-login" aria-selected="false">Login Details</button>
                                <button class="nav-link" id="v-pills-social-tab" data-toggle="pill" data-target="#v-pills-social" type="button" role="tab" aria-controls="v-pills-social" aria-selected="false">Social Info</button>
                                <button class="nav-link" id="v-pills-payout-tab" data-toggle="pill" data-target="#v-pills-payout" type="button" role="tab" aria-controls="v-pills-payout" aria-selected="false">Payout Info</button>
                                <button class="nav-link" id="v-pills-finish-tab" data-toggle="pill" data-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false">Finish</button>
                            </div>
                        </div>
                        
                        <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                                
                            <div class="tab-content" id="v-pills-tabContent">
                                <!-- Basic -->
                                <div class="tab-pane fade show active" id="v-pills-basic" role="tabpanel" aria-labelledby="v-pills-basic-tab">
                                    
                                    <div class="form-group smalls">
                                        <label>First Name*</label>
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Bio Description</label>
                                        <textarea class="form-control summernote" name="editordata"></textarea>
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>User Image</label>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="customFile">
                                          <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex align-items-center justify-content-center">
                                        <ul class="alios_slide_nav">
                                            <li><a href="#" class="btn btn_slide disabled"><i class="fas fa-arrow-left"></i></a></li>
                                            <li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                
                                <!-- login -->
                                <div class="tab-pane fade" id="v-pills-login" role="tabpanel" aria-labelledby="v-pills-login-tab">
                                    <div class="form-group smalls">
                                        <label>User Name</label>
                                        <input type="text" class="form-control" placeholder="User or email">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="*******">
                                    </div>
                                    
                                    <div class="d-flex align-items-center justify-content-center">
                                        <ul class="alios_slide_nav">
                                            <li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-left"></i></a></li>
                                            <li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- social -->
                                <div class="tab-pane fade" id="v-pills-social" role="tabpanel" aria-labelledby="v-pills-social-tab">
                                    
                                    <div class="form-group smalls">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" placeholder="Facebook URL">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Twitter</label>
                                        <input type="text" class="form-control" placeholder="Twitter URL">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>YouTube</label>
                                        <input type="text" class="form-control" placeholder="YouTube URL">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Dribbble</label>
                                        <input type="text" class="form-control" placeholder="Dribbble URL">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>LinkedIN</label>
                                        <input type="text" class="form-control" placeholder="LinkedIN URL">
                                    </div>
                                    
                                    <div class="d-flex align-items-center justify-content-center">
                                        <ul class="alios_slide_nav">
                                            <li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-left"></i></a></li>
                                            <li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- payout -->
                                <div class="tab-pane fade" id="v-pills-payout" role="tabpanel" aria-labelledby="v-pills-payout-tab">
                                    
                                    <div class="form-group smalls">
                                        <label>PayPal Client ID*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>PayPal Secret Key*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Stripe Key</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Stripe Secret Key</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    
                                    <div class="d-flex align-items-center justify-content-center">
                                        <ul class="alios_slide_nav">
                                            <li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-left"></i></a></li>
                                            <li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- finish -->
                                <div class="tab-pane fade" id="v-pills-finish" role="tabpanel" aria-labelledby="v-pills-finish-tab">
                                    <div class="succ_wrap">
                                        <div class="succ_121"><i class="fas fa-thumbs-up"></i></div>
                                        <div class="succ_122">
                                            <h4>Students Successfully Added</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <div class="succ_123"><a href="#" class="btn theme-bg text-white">View Students</a></div>
                                    </div>
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