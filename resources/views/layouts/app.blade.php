
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>POBB | @yield('title') </title>
		@yield('asset')
		<meta name="csrf-token" content="{{ csrf_token() }}">
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
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{URL::asset('images')}}/icon1.png" />

	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile bg-primary header-mobile-fixed" style="background: #e6e040">
			<!--begin::Logo-->
			<a href="/">
				<img alt="Logo" src="{{URL::asset('images')}}/logo.png" class="max-h-100px" />
            </a>
            <div>
            <h3 class="text-white w-auto d-flex align-items-center"> Saldo Anda : RP.{{number_format($user->saldo,2,',','.')}}</h3>
            </div>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header flex-column header-fixed">
						<!--begin::Top-->
						<div class="header-top" style="background: #e6e040">
							<!--begin::Container-->
							<div class="container">
								<div class="d-none d-lg-flex align-items-center mr-3">
									<a href="/" class="mr-20">
										<img alt="Logo" src="{{URL::asset('images')}}/logo.png" class="max-h-130px" />
									</a>
								</div>
								<div class="d-none d-lg-flex align-items-center mr-3">
                                    <div class="topbar-item">
                                        <h3 class="text-white w-auto d-flex align-items-center"> Saldo Anda : RP.{{number_format($user->saldo,2,',','.')}}</h3>
                                        <span></span>
									</div>
                                </div>

								<!--begin::Topbar-->
								<div class="topbar">
									<!--begin::User-->

									<div class="topbar-item">
										<div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
											<div class="d-flex flex-column text-right pr-3">
											<span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline">{{$user->name}}</span>
												<span class="text-white font-weight-bolder font-size-sm d-none d-md-inline">{{$user->email}}</span>
											</div>
											<span class="symbol symbol-35">
												<span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30" style="background-image:url('{{URL::asset('images')}}/user.jpg')"></span>
											</span>
										</div>
									</div>
									<!--end::User-->
								</div>
								<!--end::Topbar-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Top-->
						<!--begin::Bottom-->
						<div class="header-bottom">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Header Menu Wrapper-->
								<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
									<!--begin::Header Menu-->
									<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
										<!--begin::Header Nav-->
										<ul class="menu-nav">

											<li class="menu-item menu-item-submenu menu-item-rel" >
                                                <div class="symbol">
                                                    <img alt="Pic" src="{{URL::asset('images')}}/pulsa.png"/>
                                                </div>
                                                <a href="/pulsa" class="menu-link">
													<span class="menu-text">Pulsa</span>
													<!-- <span class="menu-desc">Components &amp; Elements</span> -->
												</a>

											</li>
											<li class="menu-item menu-item-submenu menu-item-rel" >
                                                <div class="symbol">
                                                    <img alt="Pic" src="{{URL::asset('images')}}/paket-data.jpg"/>
                                                </div>
												<a href="/paket-data" class="menu-link">
													<span class="menu-text">Paket Data</span>
													<!-- <span class="menu-desc">Components &amp; Elements</span> -->
												</a>

											</li>
											<li class="menu-item menu-item-submenu menu-item-rel" >
                                                <div class="symbol">
                                                    <img alt="Pic" src="{{URL::asset('images')}}/pln.png"/>
                                                </div>
												<a href="/pln" class="menu-link">
													<span class="menu-text">PLN PRABAYAR</span>
													<!-- <span class="menu-desc">Components &amp; Elements</span> -->
												</a>

											</li>

										</ul>
										<!--end::Header Nav-->
									</div>
									<!--end::Header Menu-->
								</div>
								<!--end::Header Menu Wrapper-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Bottom-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								@yield('content')
								<!--end::Row-->
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
                    <!--begin::Footer-->
                    <br><br><br>
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2020©</span>
								<a href="#" class="text-dark-75 text-hover-primary">POBB</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->

							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
		<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
				<h3 class="font-weight-bold m-0">User Profile
				<small class="text-muted font-size-sm ml-2">messages</small></h3>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content pr-5 mr-n5">
				<!--begin::Header-->
				<div class="d-flex align-items-center mt-5">
					<div class="symbol symbol-100 mr-5">
						<div class="symbol-label" style="background-image:url('{{URL::asset('images')}}/user.jpg')"></div>
						<i class="symbol-badge bg-success"></i>
					</div>
					<div class="d-flex flex-column">
						<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{$user->name}}</a>
						<div class="text-muted mt-1">User</div>
						<div class="navi mt-2">
							<a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:{{URL::asset('assets')}}/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary">{{$user->email}}</span>
								</span>
							</a>
							<a href="/logout" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
						</div>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Separator-->
				<div class="separator separator-dashed mt-8 mb-5"></div>
				<!--end::Separator-->
				<!--begin::Nav-->

				</div>
				<!--end::Notifications-->
			</div>
			<!--end::Content-->
		</div>
		<!-- end::User Panel-->
		<!--end::Demo Panel-->
		<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#0BB783", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#D7F9EF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{URL::asset('assets')}}/plugins/global/plugins.bundle.js"></script>
		<script src="{{URL::asset('assets')}}/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="{{URL::asset('assets')}}/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{URL::asset('assets')}}/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{URL::asset('assets')}}/js/pages/widgets.js"></script>
		<script src="{{URL::asset('assets')}}/js/pages/crud/forms/widgets/select2.js"></script>
        <script type="text/javascript">

	        $(document).ready(function() {
	            $('.select2').select2();
	            $(".select2-container--default").css('width', '100%');
	        });
        </script>
		<script>

			function show_toast(message, type) {
		        toastr.options = {
		            "closeButton": false,
		            "debug": false,
		            "newestOnTop": false,
		            "progressBar": false,
		            "positionClass": "toast-top-center",
		            "preventDuplicates": false,
		            "onclick": null,
		            "showDuration": "300",
		            "hideDuration": "1000",
		            "timeOut": "5000",
		            "extendedTimeOut": "1000",
		            "showEasing": "swing",
		            "hideEasing": "linear",
		            "showMethod": "fadeIn",
		            "hideMethod": "fadeOut"
		        };
		        if (type == 1) {
		            toastr.success(message, "Notification");
		        } else {
		            toastr.error(message, "Error Notification")
		        }

		    }
		</script>

		@yield('js')
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>
