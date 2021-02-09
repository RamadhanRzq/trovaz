@extends('layouts.base')
@section('navbar')
<header class="top-area">
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo">
                        <a href="i#"><img src="../assets/logo/logo-travoz.svg" width="40px" height="auto">
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
                                <li class="smooth-menu"><a href="#home">Beranda</a></li>
                                <li class="smooth-menu"><a href="#gallery">Destinasi</a></li>
                                <li class="smooth-menu"><a href="#pack">Event</a></li>
                                <li class="smooth-menu"><a href="#spo">Penginapan</a></li>
                                <li class="smooth-menu"><a href="#blog">Berita</a></li>
                                <!--<li class="dropdown">
                                    <a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                                    <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                                        <li>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                    <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                    </div>
                                                    <div class="form-group">
                                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                    </div>
                                                    <div class="checkbox">
                                                    <label>
                                                    <input type="checkbox"> Remember me
                                                    </label>
                                                    </div>
                                                    <div class="form-group">
                                                    <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                </li>-->
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                        @if (Route::has('login'))
                                            @auth
                                                <a href="{{ route('login') }}">Sign In</a>
                                            @else
                                                <a href="{{ route('login') }}">Sign In</a>
                                            @endauth
                                        @endif
                                </li>
                                <li>
                                <div class="button btn1" onclick="location.href='{{ route('register') }}';">Sign Up</div></i>
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
@yield('content')
