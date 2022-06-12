<div class="header header-light">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="/admin/dashboard">
                    <img src="/assets/img/reehat_logo.png" class="logo" width="60" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        <li class="account-drop">
                            <a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="embos_45"><i class="fas fa-shopping-basket"></i><i class="embose_count">4</i></span>
                            </a>
                            <div class="dropdown-menu pull-right animated flipInX">
                                <div class="drp_menu_headr bg-purple">
                                    <h4>Wishlist Product</h4>
                                </div>
                                <div class="ground-list ground-hover-list">
                                    <div class="ground ground-list-single">
                                        <div class="grd_thum"><img src="https://via.placeholder.com/1200x800" class="img-fluid rounded" width="50" alt="" /></div>
                                        <div class="ground-content">
                                            <h6>Web History<small class="float-right text-fade">$120</small></h6>
                                            <a href="#" class="small text-danger">Remove</a>
                                        </div>
                                    </div>
                                    
                                    <div class="ground ground-list-single">
                                        <div class="grd_thum"><img src="https://via.placeholder.com/1200x800" class="img-fluid rounded" width="50" alt="" /></div>
                                        <div class="ground-content">
                                            <h6>Physics Beginning<small class="float-right text-fade">$99</small></h6>
                                            <a href="#" class="small text-danger">Remove</a>
                                        </div>
                                    </div>
                                    
                                    <div class="ground ground-list-single">
                                        <div class="grd_thum"><img src="https://via.placeholder.com/1200x800" class="img-fluid rounded" width="50" alt="" /></div>
                                        <div class="ground-content">
                                            <h6>Computer Fundamental<small class="float-right text-fade">$99</small></h6>
                                            <a href="#" class="small text-danger">Remove</a>
                                        </div>
                                    </div>
                                    
                                    <div class="ground ground-list-single">
                                        <div class="grd_thum"><img src="https://via.placeholder.com/1200x800" class="img-fluid rounded" width="50" alt="" /></div>
                                        <div class="ground-content">
                                            <h6>Computer Advance<small class="float-right text-fade">$49</small></h6>
                                            <a href="#" class="small text-danger">Remove</a>
                                        </div>
                                    </div>
                                    
                                    <div class="ground ground-list-single">
                                        <button type="button" class="btn theme-bg text-white full-width">Go To Cart</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="account-drop">
                            <a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="embos_45"><i class="fas fa-bell"></i><i class="embose_count red">3</i></span>
                            </a>
                            <div class="dropdown-menu pull-right animated flipInX">
                                <div class="drp_menu_headr bg-warning">
                                    <h4>22 Notifications</h4>
                                </div>
                                <div class="ground-list ground-hover-list">
                                    <div class="ground ground-list-single">
                                        <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                                            <div class="position-absolute text-success h5 mb-0"><i class="fas fa-admin"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">Maryam Amiri</a></h6>
                                            <small class="text-fade">New admin Enrolled in Python</small>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>
                                    
                                    <div class="ground ground-list-single">
                                        <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-danger">
                                            <div class="position-absolute text-danger h5 mb-0"><i class="fas fa-comments"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">Shilpa Rana</a></h6>
                                            <small class="text-fade">Shilpa Send a Message</small>
                                            <span class="small">02 Min Ago</span>
                                        </div>
                                    </div>
                                    
                                    <div class="ground ground-list-single">
                                        <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-info">
                                            <div class="position-absolute text-info h5 mb-0"><i class="fas fa-grin-squint-tears"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">Amar Muskali</a></h6>
                                            <small class="text-fade">Need Responsive Business Tem...</small>
                                            <span class="small">10 Min Ago</span>
                                        </div>
                                    </div>
                                    
                                    <div class="ground ground-list-single">
                                        <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-purple">
                                            <div class="position-absolute text-purple h5 mb-0"><i class="fas fa-briefcase"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">Maryam Amiri</a></h6>
                                            <small class="text-fade">Next Meeting on Tuesday..</small>
                                            <span class="small">15 Min Ago</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                        
                        <li>
                            <div class="btn-group account-drop">
                                <a href="javascript:void(0);" class="crs_yuo12 btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="/assets/img/account/{{ Auth::user()->picture }}" class="avater-img" alt="">
                                </a>
                                <div class="dropdown-menu pull-right animated flipInX">
                                    <div class="drp_menu_headr">
                                        <h4>Hi, {{ Auth::user()->full_name }}</h4>
                                    </div>
                                    <ul>
                                        <li><a href="/admin/my-profile"><i class="fas fa-address-card"></i>My Profile</a></li>
                                        <li><a href="/admin/webinar"><i class="fas fa-gem"></i>Webinar</a></li>
                                        <li><a href="/admin/artikel"><i class="fas fa-book"></i>Artikel</a></li>
                                        <li><a href="/admin/pembayaran"><i class="fas fa-dollar-sign"></i>Check Pembayaran</a></li>
                                        <li><a href="/auth/logout"><i class="fa fa-unlock-alt"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                
                <ul class="nav-menu nav-menu-social align-to-right">
                    <li class="account-drop">
                        <a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="embos_45"><i class="fas fa-bell"></i><i class="embose_count red">1</i></span>
                        </a>
                        <div class="dropdown-menu pull-right animated flipInX">
                            <div class="drp_menu_headr bg-warning">
                                <h4>1 Notifications</h4>
                            </div>
                            <div class="ground-list ground-hover-list">
                                <div class="ground ground-list-single">
                                    <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                                        <div class="position-absolute text-success h5 mb-0"><i class="fas fa-admin"></i></div>
                                    </div>

                                    <div class="ground-content">
                                        <h6><a href="#">Admin</a></h6>
                                        <small class="text-fade">Selamat datang di aplikasi Reehat :)</small>
                                        <span class="small">Just Now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="btn-group account-drop">
                            <a href="javascript:void(0);" class="crs_yuo12 btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="/assets/img/account/{{ Auth::user()->picture }}" class="avater-img" alt="">
                            </a>
                            <div class="dropdown-menu pull-right animated flipInX">
                                <div class="drp_menu_headr">
                                    <h4>Hi, {{ Auth::user()->full_name }}</h4>
                                </div>
                                <ul>
                                    <li><a href="/admin/my-profile"><i class="fas fa-address-card"></i>My Profile</a></li>
                                    <li><a href="/admin/webinar"><i class="fas fa-gem"></i>Webinar</a></li>
                                    <li><a href="/admin/artikel"><i class="fas fa-book"></i>Artikel</a></li>
                                    <li><a href="/admin/pembayaran"><i class="fas fa-dollar-sign"></i>Check Pembayaran</a></li>
                                    <li><a href="/auth/logout"><i class="fa fa-unlock-alt"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>