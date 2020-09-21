<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<!-- Mirrored from blueswiflouisiana.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2020 09:21:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title> Blue Swift Louisiana B |     Sign in </title>
    <!--Favicon-->
    <link rel="shortcut icon" href="assets/image/favicon.png" type="image/x-icon">
    <!--Bootstrap Stylesheet-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.css')}}">
    <!--Font Awesome Stylesheet-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/all.min.css') }} ">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Main Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }} ">

    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/frontend/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/admin/css/toastr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<link href="{{ asset('assets/frontend/css/colord5ab.css?color=052157&amp;color2=91039F') }}" rel="stylesheet">

<script src="{{ asset('js/app.js') }}" defer></script>

<meta name="google-site-verification" content="3iXMmik1Xap0UR9fxLS9R9HDowYrgRq5jiZEzKrAuoI" />
</head>

<body class="body-class">
    
<!--Start Preloader-->
<div class="site-preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!--End Preloader-->

<!-- Main Menu Area Start -->
<header id="mainHeader" class="header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <div class="container">
            <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/image/logo.png') }}" style="max-width: 220px; max-height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('SIGN IN') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('SIGN UP') }}</a>
                            </li>
                        @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/home">DASHBOARD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="#aboutUs">TRANSFER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="#services">FIXED DEPOSIT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">LOAN</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item btn btn-small btn-outline-primary">
                                <a class="nav-link" href="#">
                                    $
                                    @if (Auth::user()->balance == "")
                                        <span class="p-1 font-weight-bolder text-white">0.0</span>
                                    @else
                                        <span class="p-1 font-weight-bolder text-black">
                                            {{ Auth::user()->balance }}
                                        </span>
                                    @endif
                                </a>
                            </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->
    <div class="clearfix"></div>
</header>
<!-- Main Menu Area End -->

<section id="welcomeArea">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="topcontent-bank">
                    {{-- <h1> SIGN IN</h1> --}}
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="paymentMethod">
        <div class="container">

            <main class="py-4">
                @yield('content')
            </main>
           
        </div>
    </section>
 


<!-- Footer Area Start -->
<footer id="footer" >



         <div class="copyright">


        <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">

                <div class="banding">
                    <p >
                        © 2020 - BSLB. All rights reserved
                    </p>
                </div>


            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="box w-100 text-right">
                    <div class="social_links">
                        <ul>
                                                            <li>
                                    <a href="#">
                                        <i title="Email" class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="#">
                                        <i title="Facebook" class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="#">
                                        <i title="Twitter" class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="#">
                                        <i title="LinkedIn" class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>



<!--Start ClickToTop-->
<div class="totop">
    <a href="#top"><i class="fa fa-arrow-up"></i></a>
</div>
<!--End ClickToTop-->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!--jQuery JS-->
<script src="{{ asset('assets/frontend/js/jquery.min.js') }} "></script>


<!--Bootstrap JS-->
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }} "></script>
<script src="{{ asset('assets/frontend/js/popper.js') }} "></script>
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }} "></script>

<!--YTPlayer-->

<script>
    $(document).on('change', '#langSel', function () {
        var code = $(this).val();
        window.location.href = "https://blueswiflouisiana.com/change-lang/"+code ;
    });
</script>
<!-- main js -->
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/toastr.min.js') }}"></script>

<style>
    .forget-text-btn {
        text-transform: capitalize;
        font-size: 16px;
        background-color: transparent;
        border: none;
        color: #ffffff;
        cursor: pointer;
    }
    .forget-text-btn:focus {
        box-shadow: none;
        outline:none;
    }

    #welcomeArea{
        background: url({{ asset('assets/image/breadcrumb.jpg') }});
        background-repeat: no-repeat top;
    }

</style>


</body>
