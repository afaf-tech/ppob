
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>PPOB | Login</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{URL::asset('assets')}}/css/pages/login/classic/login-3.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{URL::asset('assets')}}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{URL::asset('assets')}}/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{URL::asset('assets')}}/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{URL::asset('assets')}}/media/logos/logo3.png" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background:#dfdc7b;">
					<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center">
							<a href="#">
								<img alt="Logo" src="{{URL::asset('images')}}/logo.png" class="max-h-130px" />
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<div class="mb-10">
								<h3 class="font-weight-normal">Welcome to PPOB Application !</h3>
								<p class="">Masukkan email dan passsword Anda:</p>
							</div>
							@if ($errors->any())
	                        <div class="alert alert-warning">
	                            <ul>
	                                @foreach ($errors->all() as $error)
	                                <li>{{ $error }}</li>
	                                @endforeach
	                            </ul>
	                        </div>
	                        @endif
							<form class="form" novalidate="novalidate" method="post" action="/login">@csrf
								<div class="form-group">
									<input class="form-control h-auto text-black rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" required />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-black rounded-pill border-0 py-4 px-8" type="password" placeholder="Password" name="password" required />
								</div>
								<div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 opacity-60">
								</div>
								<div class="form-group text-center mt-10">
									<button id="kt_login_signin_submit" class="btn btn-pill btn-warning opacity-90 px-15 py-3">Sign In</button>
								</div>
							</form>
							<div class="mt-10">
							</div>
						</div>
						<!--end::Login Sign in form-->
					</div>
				</div>
			</div>
			<!--end::Login-->
		</div>
        <!--end::Main-->
		<!--start::Page Scripts-->
		<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#0BB783", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#D7F9EF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<script src="{{URL::asset('assets')}}/plugins/global/plugins.bundle.js"></script>
		<script src="{{URL::asset('assets')}}/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="{{URL::asset('assets')}}/js/scripts.bundle.js"></script>
		<script src="{{URL::asset('assets')}}/js/pages/custom/login/login.js"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>
