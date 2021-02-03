@extends('layouts.base')
@section('navbar')
<header class="top-area">
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <a href="index.html">
                            TRO<span>VAZ</span>
                        </a>
                    </div><!-- /.logo-->
                </div><!-- /.col-->
                <div class="col-sm-10">
                    <div class="main-menu">
                    
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button><!-- / button-->
                        </div><!-- /.navbar-header-->
                        <div class="collapse navbar-collapse">		  
                            <ul class="nav navbar-nav navbar-right">
                                <li class="smooth-menu"><a href="#home">Beranda</a></li>
                                <li class="smooth-menu"><a href="#gallery">Destinasi</a></li>
                                <li class="smooth-menu"><a href="#pack">Event</a></li>
                                <li class="smooth-menu"><a href="#spo">Penginapan</a></li>
                                <li class="smooth-menu"><a href="#blog">Berita</a></li>
                                <li class="smooth-menu"><a href="#subs">Calendar Of Event</a></li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Setting</a></li>
                                      <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                             </a>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form></li>
                                    </ul>
                                  </li>
                            </ul>
                        </div>
                    <!-- /.navbar-collapse -->
                    </div><!-- /.main-menu-->
                </div><!-- /.col-->
            </div><!-- /.row -->
            <div class="home-border"></div><!-- /.home-border-->
        </div><!-- /.container-->
    </div><!-- /.header-area -->

</header><!-- /.top-area-->
@endsection