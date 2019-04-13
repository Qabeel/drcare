<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>DR. Care</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('/css/font-awesome-4.7.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl-carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <?php
    if (!Auth::guest()) {
        $userID = \Auth::user()->id;
        $userR = \Auth::user()->role;
    } else {
        $userID = "Not Logged";
        $userR = " ";
    }

    ?>
</head>
<body>
<!-- Preloader Starts -->
<div> <!--  class="preloader" -->

    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> Call Us Now! +02
                            0114709090</h6>
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> hello@drcare.com
                        </h6>
                        <h6><span class="mr-2"><i class="fa fa-map-marker"></i></span> Find our Location</h6>
                    </div>
                    <div class="col-lg-3">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header" class="header-scrolled">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="{{ url('/') }}"><img src="/images/logo/logo.png" alt="" title=""/></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li><a href="{{ url('/') }}"> Home</a></li>
                            <li><a href="{{ url('/department') }}"> Departments</a></li>
                            <li><a href="{{ url('/doctors') }}"> Doctors</a></li>
                            <li><a href="{{ url('/registration') }}"> Book</a></li>
                            <li><a href="{{ url('/contact') }}"> Contact</a></li>
                            @guest
                                <li class="menu-has-children"><a href="#"> Join US</a>
                                    <ul>
                                        <li><a href="{{ route('login') }}"> Login</a></li>
                                        <li><a href="{{ route('register') }}"> Sign up</a></li>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="/Profile">My Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>

                                </li>
                            @endguest

                        </ul>
                    </nav>
                    <!-- #nav-menu-container -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>DrCare Medical Center</h1>
                    <a href="{{ url('/index') }}">Home</a> <span>|</span> <a href="{{ url('/about') }}">About Us</a>

                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->


@yield('content')


<!-- Footer Area Starts -->
    <footer class="footer-area section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">top products</h3>
                            <ul>
                                <li class="mb-2"><a href="#">managed website</a></li>
                                <li class="mb-2"><a href="#">managed reputation</a></li>
                                <li class="mb-2"><a href="#">power tools</a></li>
                                <li><a href="#">marketing service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">newsletter</h3>
                            <p class="mb-4">You can trust us. we only send promo offers, not a single.</p>
                            <form action="#">
                                <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Your email here'" required>
                                <button type="submit" class="template-btn">subscribe now</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 offset-xl-1 col-lg-3">
                        <div class="single-widge-home">
                            <h3 class="mb-4">instagram feed</h3>
                            <div class="feed">
                                <img src="/images/feed1.jpg" alt="feed">
                                <img src="/images/feed2.jpg" alt="feed">
                                <img src="/images/feed3.jpg" alt="feed">
                                <img src="/images/feed4.jpg" alt="feed">
                                <img src="/images/feed5.jpg" alt="feed">
                                <img src="/images/feed6.jpg" alt="feed">
                                <img src="/images/feed7.jpg" alt="feed">
                                <img src="/images/feed8.jpg" alt="feed">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <span>

                            


<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i
                                    class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                                                                        target="_blank">Team</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->

    <script src="{{asset('/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('/js/vendor/bootstrap-4.1.3.min.js')}}"></script>
    <script src="{{asset('/js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('/js/vendor/owl-carousel.min.js')}}"></script>
    <script src="{{asset('/js/vendor/jquery.datetimepicker.full.min.js')}}"></script>
    <script src="{{asset('/js/vendor/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('/js/vendor/superfish.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>

</body>
<script type="text/javascript">
    $(document).ready(function () {
        $('.menu-has-children').on('click', function (e) {
            $(this).find('ul').css('display', 'block');
        });
    });
</script>
</html>

