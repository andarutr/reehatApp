<!DOCTYPE html>
<html lang="zxx">
	<head>
		@include('partials.auth.header')
    </head>
    <body>
        <div id="main-wrapper">
			@yield('content')
			<footer class="dark-footer skin-dark-footer style-2">
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">Aplikasi Reehat by Kelompok 3</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		@include('partials.auth.footer')	
	</body>
</html>