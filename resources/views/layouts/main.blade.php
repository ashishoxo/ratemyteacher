<!DOCTYPE html>
<html>
<!-- Mirrored from www.vasterad.com/themes/listeo_updated/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Apr 2018 16:38:43 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Listeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/colors/main.css')}}" id="colors">





</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.html"><img src="images/logo.png" alt=""></a>
					<a href="index.html" class="dashboard-logo"><img src="images/logo2.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>My Account</div>
						<ul>
							<li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
							<li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
							<li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
							<li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
						</ul>
					</div>

					<a href="dashboard-add-listing.html" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	@include('components.sidenav')
	
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Howdy, Tom!</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Dashboard</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		@yield('content')

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{asset('js/scripts/jquery-2.2.0.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/scripts/mmenu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/chosen.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/rangeslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/tooltips.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/custom.js')}}"></script>


</body>

<!-- Mirrored from www.vasterad.com/themes/listeo_updated/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Apr 2018 16:38:43 GMT -->
</html>