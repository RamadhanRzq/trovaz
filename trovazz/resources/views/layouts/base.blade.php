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
		<link rel="shortcut icon" type="image/icon" href="../assets/logo/logo-travoz.svg"/>

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
		<!--swiper.css-->
		<link rel="stylesheet" href="{{ asset('assets/css/swiper.css')}}" />

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
		@yield('navbar')
		<!-- main-menu End -->

		
		<!--about-us start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Explore the Beauty of the Beautiful World 

									</h2>
									<div class="about-btn">
										<a href ="#gallery"> 
										<button  class="about-view">
											explore now
										</button></a> 
									</div><!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->

        <!--service start-->
		<section id="service" class="service">
			<div class="container">

				<div class="service-counter text-center">

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="{{ asset('assets/images/service/s1.png')}}" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
									Destinasi Wisata Menarik
									</a>
								</h2>
								<p>Temukan Destinasi Wisata Menarik</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="{{ asset('assets/images/service/s2.png')}}" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
										Penginapan-Penginapan Menarik
									</a>
								</h2>
								<p>Temukan Penginapan-Penginapan Menarik</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="statistics-img">
								<img src="{{ asset('assets/images/service/s3.png')}}" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">

								<h2>
									<a href="#">
										Anti Salah Tujuan
									</a>
								</h2>
								<p>Memberikan informasi destinasi secara lengkap</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->

		<!--galley start-->
		<section id="gallery" class="gallery-content">
			<div class="container">
				<div class="gallery-details">
					<div class="gallary-header text-center">
						<h2>
							Destinasi Populer
						</h2>
						<p>
							Destinasi Destinasi Populer
						</p>
					</div><!--/.gallery-header-->
					<div class="packages-content">
							<div class="row">
							@foreach($destinasi as $isidestinasi)
								<div class="col-md-4 col-sm-6">
									<div class="single-package-item">
										<img src="{{ asset($isidestinasi->image)}}" alt="destination-place">
										<div class="single-package-item-txt">
											<h3>{{$isidestinasi->name}}</h3>
											<div class="packages-para">
											<p>{{$isidestinasi->description}}</p>
											</div><!--/.packages-para-->
											<!--/.packages-review-->
										</div><!--/.single-package-item-txt-->
									</div><!--/.single-package-item-->
								</div><!--/.col-->
							@endforeach
							</div><!--/.row-->
					</div> <!-- end of row -->
				</div><!--/.gallery-details-->
			</div><!--/.container-->

		</section><!--/.gallery-->
		<!--gallery end-->

		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						Event
					</h2>
					<p>
						Temukan Event Event menarik di sini  
					</p>
				</div>
				<div class="packages-content">
					<div class="row">
						@foreach($event as $isi)
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{ asset($isi->image)}}" alt="package-place">
								<div class="single-package-item-txt">
									<h3>{{$isi->name}}</h3>
									<div class="packages-para">
									<p>{{$isi->description}}</p>
									</div><!--/.packages-para-->
									<!--/.packages-review-->
										<a href="{{route('detail.event',['id'=> $isi->id])}}">
										Detail
										</a>
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->
						</div><!--/.col-->
						@endforeach
					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->

		<!--special-offer start-->
		<section id="spo" class="special-offer">
			<div class="container">
				<div class="pgn-header text-center">
					<h2>
						Penginapan
					</h2>
					<p>
						Temukan Penginapan yang nyaman ketika anda berwisata
					</p>
				</div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">
						@foreach($penginapan as $isipenginapan)
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="{{ asset($isipenginapan->image)}}" alt="package-place">
								<div class="single-package-item-txt">
									<h3>{{$isipenginapan->name}} <span class="pull-right">{{$isipenginapan->price}}</span></h3>
									<div class="packages-para">
									<p>{{$isipenginapan->description}}</p>
									</div><!--/.packages-para-->
									<!--/.packages-review-->
									<!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->
						</div><!--/.col-->
						@endforeach
					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->
		</section><!--/.special-offer end-->
		<!--special-offer end-->

		<!--blog start-->
		<section id="blog" class="blog">
			<div class="container">
				<div class="blog-details">
						<div class="gallary-header text-center">
							<h2>
								Berita
							</h2>
							<p>
								Berita Pariwisata
							</p>
						</div><!--/.gallery-header-->
						<div class="blog-content">
							<div class="row">
								@foreach($berita as $isiberita)
								<div class="col-sm-4 col-md-4">
									<div class="thumbnail">
										<h2>trending news <span>{{$isiberita->date}}</span></h2>
										<div class="thumbnail-img">
											<div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
											<img src="{{asset($isiberita->image)}}" alt="blog-img">
										</div><!--/.thumbnail-img-->
										<div class="caption">
											<div class="blog-txt">
												<h3><a href="#">{{$isiberita->name}} </a></h3>
												<p>{{$isiberita->description}}</p>
												<a href="{{route('detail.berita',['id'=> $isiberita->id])}}">Read More</a>
											</div><!--/.blog-txt-->
										</div><!--/.caption-->
									</div><!--/.thumbnail-->
								</div><!--/.col-->
								@endforeach
							</div><!--/.row-->
						</div><!--/.blog-content-->
					</div><!--/.blog-details-->
				</div><!--/.container-->

		</section><!--/.blog-->
		<!--blog end-->

		
		<!--subscribe start-->
		<section id="subs" class="subscribe">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						About Us
					</h2>
					
					<br>
					<div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="img-circle" src="{{asset('gambar/team/1.jpg')}}" alt="" />
                            <h4>Budi Aji</h4>
                            <p class="text-muted">Software Engineering</p>
                            <a class="btn btn-primary btn-social mx-2" href="https://twitter.com/"><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-info btn-social mx-2" href="https://www.facebook.com/"><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-danger btn-social mx-2" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
						<img class="img-circle" src="{{asset('gambar/team/1.jpg')}}" alt="" />
                            <h4>Munir</h4>
                            <p class="text-muted">Software Engineering</p>
                            <a class="btn btn-primary btn-social mx-2" href="https://twitter.com/"><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-info btn-social mx-2" href="https://www.facebook.com/masterofmunir/"><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-danger btn-social mx-2" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
						<img class="img-circle" src="{{asset('gambar/team/1.jpg')}}" alt="" />
                            <h4>Ramadhan</h4>
                            <p class="text-muted">Software Engineering</p>
                            <a class="btn btn-primary btn-social mx-2" href="https://twitter.com/"><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-info btn-social mx-2" href="https://www.facebook.com/"><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-danger btn-social mx-2" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
					
                </div>
				<br>
					<br>
					<br>
					<div class="row">
                    	<div class="judul-title text-center"><p>Project TROVAZ ini sebagai tanda telah memenuhi maupun mengerkan tugas besar desain dan pemrograman web tentang crud dengan framework laravel 7</p></div>
                	</div>
					

		</section>
		<!--subscribe end-->

		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
			<div class="container">
				<div class="footer-content">
					<div class="row">

						<div class="col-sm-3">
							<div class="single-footer-item">
								<div class="footer-logo">
									<a href="#">
										TRO<span>VAZ</span>
									</a>
								</div>
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>link</h2>
								<div class="single-footer-txt">
									<p><a href="#home">home</a></p>
									<p><a href="#gallery">destinasi</a></p>
									<p><a href="#pack">event</a></p>
									<p><a href="#spo">penginapan</a></p>
									<p><a href="#blog">berita</a></p>
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