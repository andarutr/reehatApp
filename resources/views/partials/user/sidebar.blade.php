<div class="col-lg-3 col-md-3">
    <div class="dashboard-navbar">
        <div class="d-user-avater">
            <img src="/assets/img/account/{{ Auth::user()->picture }}" class="img-fluid avater" width="250" height="250">
            <h4>{{ Auth::user()->full_name }}</h4>
            <span>Pengguna</span>
            <div class="elso_syu89">
                <ul>
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        
        <div class="d-navigation">
            <ul id="side-menu">
                <li class="@if($menu == 'Dashboard') active @endif"><a href="/user/dashboard"><i class="fas fa-th"></i>Dashboard</a></li>
                <li class="@if($menu == 'My Profile') active @endif"><a href="/user/my-profile"><i class="fas fa-address-card"></i>My Profile</a></li>
                <li class="@if($menu == 'Time Management') active @endif"><a href="/user/time-management"><i class="fas fa-layer-group"></i>Time Management</a></li>
                <li class="@if($menu == 'Webinar') active @endif"><a href="/user/webinar"><i class="fas fa-gem"></i>Webinar</a></li>
                <li class="@if($menu == 'Artikel') active @endif"><a href="/user/artikel"><i class="fas fa-book"></i>Artikel</a></li>
            </ul>
        </div>
        
    </div>
</div>