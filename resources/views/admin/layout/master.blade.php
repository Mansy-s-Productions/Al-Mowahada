<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EMAAR Al Mowahada CO. - Admin Panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/favicon.png') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route('admin.home') }}" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('assets/img/logo/logo-preloader.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('assets/img/logo/logo-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('assets/img/logo/logo-text.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
									<div class="header-info">
										<span class="text-black"><strong>{{ auth()->user()->name ?? 'Admin Name' }}</strong></span>
										<p class="fs-12 mb-0">Admin</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('admin.logout') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="ai-icon" href="{{ route('admin.home') }}">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Contact Requests</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.contactRequests.all') }}">All Requests</a></li>
                        </ul>
                    </li>
                    <li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Blog</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.blogs.all') }}">All Articles</a></li>
                            <li><a href="{{ route('admin.blogs.getNew') }}">Add New</a></li>
                        </ul>
                    </li>
                    <li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Services</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.services.all') }}">All Service</a></li>
                            <li><a href="{{ route('admin.services.getNew') }}">Add New</a></li>
                        </ul>
                    </li>
                    <li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Categories</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.categories.all') }}">All Categories</a></li>
                            <li><a href="{{ route('admin.categories.getNew') }}">Add New</a></li>
                        </ul>
                    </li>
                    <li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Projects</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.projects.all') }}">All Projects</a></li>
                            <li><a href="{{ route('admin.projects.getNew') }}">Add New</a></li>
                        </ul>
                    </li>
                </ul>
				<div class="copyright">
					<p><strong>EMAAR Al Mowahada CO. Admin Panel</strong> © 2024 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by <a href="https://mohamedmansy.com">Mansy Productions</a></p>
				</div>
			</div>
        </div>
        @if (session()->has('success'))
<div class="alert alert-success left-icon-big alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
    </button>
    <div class="media">
        <div class="alert-left-icon-big">
            <span><i class="mdi mdi-check-circle-outline"></i></span>
        </div>
        <div class="media-body">
            <h5 class="mt-1 mb-2">Success</h5>
            <p class="mb-0">{{ session('success') }}</p>
        </div>
    </div>
</div>
@endif
@if ($errors->any())
<div class="alert alert-warning left-icon-big alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
    </button>
    <div class="media">
        <div class="alert-left-icon-big">
            <span><i class="mdi mdi-help-circle-outline"></i></span>
        </div>
        <div class="media-body">
            <h5 class="mt-1 mb-2">Error</h5>
            @foreach ($errors->all() as $error)
            <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
    </div>
</div>
@endif
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
	<script src="{{ asset('admin/js/deznav-init.js') }}"></script>
	<script src="{{ asset('admin/vendor/owl-carousel/owl.carousel.js') }}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{ asset('admin/vendor/peity/jquery.peity.min.js') }}"></script>

	<!-- Apex Chart -->
	<script src="{{ asset('admin/vendor/apexchart/apexchart.js') }}"></script>

	<!-- Dashboard 1 -->
	<script src="{{ asset('admin/js/dashboard/dashboard-1.js') }}"></script>
	@yield('external_scripts')
</body>
</html>
