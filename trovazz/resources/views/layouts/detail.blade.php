<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>TROVAZ</title>

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/logo-travoz.svg')}}"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}" />

		<!--animate.css-->
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}" />

		<!--hover.css-->
		<link rel="stylesheet" href="{{ asset('assets/css/hover-min.css')}}">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="{{ asset('assets/css/datepicker.css')}}" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}"/>

		<!-- range css-->
        <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css')}}" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css')}}"/>

		<!--style.css-->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />

		<!--responsive.css-->
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
            <div class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="logo">
                                <a href="{{route ('home')}}"><img src="{{asset ('assets/logo/logo-travoz.svg')}}" width="40px" height="auto">
                                       TRO<span>VAZ</span>
                                </a>
                            </div><!-- /.logo-->
                        </div><!-- /.col-->
                        <div class="col-sm-9">
                            <div class="main-menu">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <i class="fa fa-bars"></i>
                                    </button><!-- / button-->
                                </div><!-- /.navbar-header-->
                                <div class="collapse navbar-collapse">		  
                                    <ul class="nav navbar-nav navbar-center">
										<li class="smooth-menu"><a href="#service"> Detail</a></li>
                                </div>
                            <!-- /.navbar-collapse -->
                            </div><!-- /.main-menu-->
                        </div><!-- /.col-->
                    </div><!-- /.row -->
                    <div class="home-border"></div><!-- /.home-border-->
                </div><!-- /.container-->
            </div><!-- /.header-area -->
        </header><!-- /.top-area-->
		<!-- main-menu End -->

        <!--service start-->
		@yield('content')
		<!--subscribe end-->

		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
			<div class="container">
				<div class="footer-content">
					<div class="row">
						<div class="col-sm-3">
							<div class="single-footer-item">
								<div class="footer-logo">
									<a href="index.html">
										TRO<span>VAZ</span>
									</a>
								</div>
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>link</h2>
								<div class="single-footer-txt">
									<p><a href="#">home</a></p>
									<p><a href="#">destination</a></p>
									<p><a href="#">spacial packages</a></p>
									<p><a href="#">special offers</a></p>
									<p><a href="#">blog</a></p>
									<p><a href="#">contacts</a></p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->

						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>Destinasi Terpopuler</h2>
								<div class="single-footer-txt">
									<p><a href="#">Bali</a></p>
									<p><a href="#">Lombok</a></p>
									<p><a href="#">Sumba</a></p>
									<p><a href="#">Raja Ampat</a></p>
									<p><a href="#">Nusa Penida</a></p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->


					</div><!--/.row-->

				</div><!--/.footer-content-->
				<hr>
				<div class="foot-icons ">
					<ul class="footer-social-links list-inline list-unstyled">
		                <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
		        	</ul>
		        	<p>&copy; 2021 TROVAZ. All Right Reserved</p>

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->




		<script src="{{ asset('assets/js/jquery.js')}}"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

		<!-- bootsnav js -->
		<script src="{{ asset('assets/js/bootsnav.js')}}"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="{{ asset('assets/js/jquery.filterizr.min.js')}}"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>

        <!-- counter js -->
		<script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
		<script src="{{ asset('assets/js/waypoints.min.js')}}"></script>

		<!--owl.carousel.js-->
		<script  src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
		
        <!-- jquery.sticky.js -->
		<script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>

        <!--datepicker.js-->
        <script  src="{{ asset('assets/js/datepicker.js')}}"></script>

		<!--Custom JS-->
		<script src="{{ asset('assets/js/custom.js')}}"></script>

	</body>

</html>