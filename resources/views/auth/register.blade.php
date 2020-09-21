<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->


<!-- Mirrored from blueswiflouisiana.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2020 09:21:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title> Blue Swift Louisiana B |     Sign up </title>
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
                    <h1>    Sign up</h1>
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="paymentMethod">
        <div class="container">
            <div class="row calculate justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="box">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="fullname">Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="emailaddress">Email address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button type="submit" class="btn btn-success btn-block">
                                    Sign Up
                                </button>
                            </div>
                        </form>
                                           
                    </div>
                </div>
            </div>
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

<script>
 $( document ).ready(function() {
    //Hide the company form
    $('#company').hide();
    
    $('#identity').change(function(){
       var identity = $("input[name='identity']:checked").val();
       if(identity ==="individual"){
           $('#company').hide();
           $('#individual').show();
       }else{
           if(identity ==="company"){
               $('#individual').hide();
               $('#company').show();
           }
       }
    })
});
</script>

<script type="text/javascript" src="assets/frontend/js/toastr.min.js"></script>
</body>