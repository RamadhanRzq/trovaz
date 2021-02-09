@extends('layouts.detail')
@section('content')		
        <!--about-us start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content text-center">
					<div class="row">
						<div class="col-6">
							<div class="single-about-us">
								<div class="detail">
									<h2>
										DETAIL EVENT
									</h2>
									<!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->
		</section><!--/.about-us-->

		<section id="service" class="service">
			<div class="container">
				<div class="breadcrumbs">
					<a href="{{route('home')}}">Home </a> <i class="fa fa-angle-double-right"></i><span> Detail Event</span>
				</div> <!-- end of breadcrumbs -->
				<div class="gallery-details">
					@foreach($event as $isievent)
					<div class="gallary-header text-center">
						<h2>
							{{$isievent->name}}
						</h2>
					</div><!--/.gallery-header-->
					<div class="packages-content">
							<div class="row">
								
								<div class="col-md-12 col-sm-12">
									<div class="single-package-item">
										<img src="{{asset($isievent->image)}}" alt="destination-place">
										<div class="single-package-item-txt">
											
											<div class="packages-para">
											<p>{{$isievent->description}}</p>
											</div><!--/.packages-para-->
											<!--/.packages-review-->
											<!--/.about-btn-->
										</div><!--/.single-package-item-txt-->
									</div><!--/.single-package-item-->
								</div><!--/.col-->
								
							</div><!--/.row-->
					</div> <!-- end of row -->
					@endforeach
				</div><!--/.gallery-details-->
			</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->
        @endsection