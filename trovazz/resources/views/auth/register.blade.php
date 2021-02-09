@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app1.css') }}" rel="stylesheet">

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <!--<div class="row"> <img src="https://i.imgur.com/CXQmsmF.png" class="logo"> </div>-->
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> 
                        <img src="{{asset('gambar/Travelers.png')}}" class="image">
                     </div>
                </div>
            </div><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h4 class="mb-0 mr-4 mt-2">Sign up</h4>
                    </div>
                    <div class="row px-3"> 
                        <label class="mb-1">
                            <h6 class="mb-0 text-sm">{{ __('Name') }}</h6>
                        </label>
                         <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus> 
                         @error('name')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                    </div>
                     <div class="row px-3"> 
                        <label class="mb-1">
                            <h6 class="mb-0 text-sm">{{ __('E-Mail Address') }}</h6>
                        </label> 
                        <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row px-3">
                         <label class="mb-1">
                            <h6 class="mb-0 text-sm">{{ __('Password') }}</h6>
                        </label> 
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                             </span>
                        @enderror
                     </div>
                    <div class="row px-3"> 
                            <label class="mb-1">
                            <h6 class="mb-0 text-sm">{{ __('Confirm Password') }}</h6>
                        </label> 
                        <input type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password"> 
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> 
                            <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> 
                            <label for="chk1" class="custom-control-label text-sm">I agree to Stoke <u>Terms</u> and <u>Privacy Policy</u>
                            </label> 
                        </div> 
                        <a href="#" class="ml-auto mb-0 text-sm"></a>
                    </div>
                    <div class="row mb-3 px-3"> 
                        <button type="submit" class="btn btn-blue text-center" >{{ __('Register') }}</button> 
                    </div>
                    <div class="row mb-4 px-3"> 
                        <small class="font-weight-bold">Existing user? 
                            <a class="text-danger " href="{{route ('login')}}">Login</a></small> </div>
                </div>
            </div>
            </div>
            <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. TROVAZ. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection