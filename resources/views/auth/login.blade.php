<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->


<!-- Mirrored from blueswiflouisiana.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2020 09:21:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title> Blue Swift Louisiana B |     Sign in </title>
    <!--Favicon-->
    <link rel="shortcut icon" href="assets/image/favicon.png" type="image/x-icon">
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/bootstrap.css">
    <!--Font Awesome Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/all.min.css">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/owl.carousel.css">




    <!--Main Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/style.css">

    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="assets/frontend/css/colord5ab.css?color=052157&amp;color2=91039F" rel="stylesheet">
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
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="assets/image/logo.png" style="max-width: 220px; max-height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#aboutUs" >About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#services" >Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/latest-news">Latest News</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#faq ">Faq</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <select id="langSel" style="background: transparent; color: #ffff; border: none;">
                        <option style="color: black" value="en"> EN </option>
                                            </select>

                </ul>
                <div class="viewPlan">
                    <a href="login">
                        Sign in                    </a>
                </div>
                <div class="viewPlan">
                    <a href="register">
                        Sign up                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->
    <div class="clearfix"></div>
</header>
<!-- Main Menu Area End -->


<section id="welcomeArea" style="background: url(assets/image/breadcrumb.jpg) no-repeat top;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="topcontent-bank">
                    <h1> Sign in</h1>
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="paymentMethod">
        <div class="container">
           
            <div class="row calculate justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="box">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Login') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
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
    </style>



<div class="modal fade" id="lostPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Enter your email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="get" action="https://blueswiflouisiana.com/user/password/reset">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input class="form-control" type="email" name="resetEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-info btn-md btn-block"  type="submit">RESET PASSWORD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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


<!--jQuery JS-->
<script src="assets/frontend/js/jquery.min.js"></script>


<!--Bootstrap JS-->
<script src="assets/frontend/js/bootstrap.min.js"></script>
<script src="assets/frontend/js/popper.js"></script>
<script src="assets/frontend/js/owl.carousel.min.js"></script>

<!--YTPlayer-->

<script>
    $(document).on('change', '#langSel', function () {
        var code = $(this).val();
        window.location.href = "https://blueswiflouisiana.com/change-lang/"+code ;
    });
</script>
<!-- main js -->
<script src="assets/frontend/js/main.js"></script>
<script type="text/javascript" src="assets/frontend/js/toastr.min.js"></script>
</body>