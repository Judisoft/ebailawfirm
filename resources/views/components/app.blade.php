<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ env('APP_NAME') }}</title>
        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        @yield('header_styles')
    </head>
    <body>   
        <header>
            <!-- Header Start -->
            <div class="header-area">
                <div class="main-header ">
                    <div class="header-top d-none d-lg-block">
                        <div class="container">
                            <div class="col-xl-12">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="header-info-left">
                                        <ul>     
                                            <li>Phone: (+237) 674-526-116</li>
                                            <li>Email: info@ebailawfirm.cm</li>
                                        </ul>
                                    </div>
                                    <div class="header-info-right">
                                        <ul class="header-social">    
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom  header-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <!-- Logo -->
                                <div class="col-xl-2 col-lg-2">
                                    <div class="logo">
                                        {{-- <a href="{{ route('home') }}"><img src="{{ asset('img/logo/logo.png')}}" alt="ebai law firm logo">LOGO</a> --}}
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10">
                                    <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                        <!-- Main-menu -->
                                        <div class="main-menu d-none d-lg-block">
                                            <nav> 
                                                <ul id="navigation">                                                                                          
                                                    <li><a href="{{ route('home') }}">Home</a></li>
                                                    <li><a href="{{ route('about') }}">About</a></li>
                                                    <li><a href="{{ route('services') }}">Services</a></li>
                                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <!-- Header-btn -->
                                        <div class="header-right-btn d-none d-lg-block ml-20">
                                            <a  class="btn-btn-outline-secondary" href="#">Register </a>
                                        </div>
                                        <div class="header-right-btn d-none d-lg-block ml-20">
                                            <a  class="btn login-btn" href="#">Login</a>
                                        </div>
                                    </div>
                                </div> 
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
            @yield('content') 
        <footer>
            <!--? Footer Start-->
            <div class="footer-area footer-bg">
                <div class="container">
                    <div class="footer-top footer-padding">
                        <!-- footer Heading -->
                        <div class="footer-heading">
                            <div class="row justify-content-between">
                                <div class="col-xl-6 col-lg-8 col-md-8">
                                    <div class="wantToWork-caption wantToWork-caption2">
                                        <h2>We Understand The Importance Approaching Each Work!</h2>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4">
                                    <span class="contact-number f-right">+ 1 212-683-9756</span>
                                </div>
                            </div>
                        </div>
                        <!-- Footer Menu -->
                        <div class="row d-flex justify-content-between">
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>COMPANY</h4>
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Company</a></li>
                                            <li><a href="#"> Press & Blog</a></li>
                                            <li><a href="#"> Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Open hour</h4>
                                        <ul>
                                            <li><a href="#">Monday 11am-7pm</a></li>
                                            <li><a href="#"> Tuesday-Friday 11am-8pm</a></li>
                                            <li><a href="#"> Saturday 10am-6pm</a></li>
                                            <li><a href="#"> Sunday 11am-6pm</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>RESOURCES</h4>
                                        <ul>
                                            <li><a href="#">Home Insurance</a></li>
                                            <li><a href="#">Travel Insurance</a></li>
                                            <li><a href="#"> Car Insurance</a></li>
                                            <li><a href="#"> Business Insurance</a></li>
                                            <li><a href="#"> Heal Insurance</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="{{ asset('img/logo/logo2_footer.png') }}" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">GThe trade war currently ensuing between te US anfd several natxions around thdhe globe, most fiercely with.</p>
                                        </div>
                                    </div>
                                    <!-- Footer Social -->
                                    <div class="footer-social ">
                                        <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fas fa-globe"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Bottom -->
                    <div class="footer-bottom">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12">
                                <div class="footer-copy-right text-center">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <a href="#" target="_blank">Judisoft</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </footer>
        <!-- Scroll Up -->
        <div id="back-top" >
            <a title="Go to Top" href="#"> <i class="fa fa-angle-up"></i></a>
        </div>
        <div id="chat" >
            <a href="https://api.whatsapp.com/send?phone=237672076995&text=Hello+Ebai+Law+Firm."><img src="{{ asset('img/adapt_icon/whatsapp.png') }}"></a>
        </div>

        <!-- JS here -->

        <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Jquery Mobile Menu -->
        <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/slick.min.js')}}"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/animated.headline.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>

        <!-- Nice-select, sticky -->
        <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{asset('js/contact.js')}}"></script>
        <script src="{{asset('js/jquery.form.js')}}"></script>
        <script src="{{asset('js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('js/mail-script.js')}}"></script>
        <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
        
        <!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/main.js')}}')}}"></script>
    </body>
</html>