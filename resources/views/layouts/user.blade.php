<!DOCTYPE html>
<html lang="zxx">
	<head>
		@include('partials.user.header')
    </head>
    <body>
        <div id="main-wrapper">
			<x-navbar-user/>
			<div class="clearfix"></div>
			<section class="gray pt-4">
				<div class="container-fluid">
					<div class="row">
						@include('partials.user.sidebar')	
						<div class="col-lg-9 col-md-9 col-sm-12">
							@include('partials.user.breadcrumb')
							
							@yield('content')
							
						</div>
					
					</div>
					
				</div>
			</section>
            
			<footer class="dark-footer skin-dark-footer style-2">
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">Aplikasi Reehat by Kelompok 3</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
		</div>
		@include('partials.user.footer')		

	</body>
</html>