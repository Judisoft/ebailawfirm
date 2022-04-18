@extends('components/app')

@section('content')
    <main>
    <!--? About Area Start -->
    <div class="about-low-area padding-bottom mt-5 bg-about p-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-50">
                            <span>About Our Law Firm</span>
                            <h2>Who we are and what we do</h2>
                        </div>
                        <p>Our motivation is outright : to facilitate the successful realization of business activity and projects on the ground by assisting 
                            clients in minimizing risks linked with doing business in Africa, Cameroon and Nigeria in particular.We have developed a granular understanding 
                            of the local environment and our clients come to us for our profound knowledge of Cameroonian, Nigerian Regional laws as well as our 
                            reputation for consistent application of and compliance with international standards. We work with clients to navigate local content 
                            regulations which are applicable to their organizations and for over 40  years our team has demonstrated an outstanding level of 
                            know-how and skill in addressing legal challenges in both Common Law and Civil Law jurisdictions through direct experience and
                             familiarity with our clients’ industries. We have been able to leverage this industry experience with our mastery of 
                             the bijural legal system to develop effective hybrid solutions to give comfort to our vast array of domestic and foreign clients. 
                             Our success rate in achieving our clients’ legal and business objectives is central to the value proposition at EBAI LAW FIRM</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img">
                            <img src="{{asset('img/gallery/about.jpg')}}" alt="" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->
    <!--Team Ara Start -->
    <div class="team-area mt-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Our Partners and Associates Mambers</span>
                        <h2>We Have a Team of Competent Professionals</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="{{asset('img/gallery/ida.jpg')}}" class="rounded" alt="Iva Ida Bessem Ebai">
                            <div class="team-caption">
                                <h4><a href="#">IVA IDA BESSEM EBAI</a></h4>
                                <p>Senior Partner</p>
                                <p>Head of Firm</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="{{asset('img/gallery/baiyeh.jpg')}}" class="rounded" alt="Baiye Mbi Etchu">
                            <div class="team-caption">
                                <h4><a href="#">BAIYE MBI ETCHU</a></h4>
                                <p>Partner</p>
                                <p>Barrister at Law</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="{{asset('img/gallery/julian.jpg')}}" class="rounded" alt="Julian Tabi Ebai">
                            <div class="team-caption">
                                <h4><a href="#">JULIAN TABI EBAI</a></h4>
                                <p>Associate</p>
                                <p>Barrister at Law</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="{{asset('img/gallery/damaris.jpg')}}" class="rounded" alt="becca damaris">
                            <div class="team-caption">
                                <h4><a href="#">BECCA DAMARIS MELANGE</a></h4>
                                <p>Associate</p>
                                <p>Barrister at Law</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="{{asset('img/gallery/emmanuel.jpg')}}" class="rounded" alt="emmanuel kimbi">
                            <div class="team-caption">
                                <h4><a href="#">CHAI KIMBI EMMANUEL</a></h4>
                                <p>Associate</p>
                                <p>Barrister at Law</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="{{asset('img/gallery/logo.png')}}" class="rounded" alt="Julian Tabi Ebai">
                            <div class="team-caption">
                                <h4><a href="#">AGBO STEPHEN T.</a></h4>
                                <p>Associate</p>
                                <p>Barrister at Law</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Ara End -->
    <!--? Testimonial Start -->
    <div class="testimonial-area p-3 bg-about mt-50">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle mt-50">
                        <span>Our Clients</span>
                        <h1>SONARA Cameroon</h1>
                    </div> 
                    <div class="h1-testimonial-active">
                        <div class="single-testimonial ">
                            <!-- Client Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <div class="d-flex flex-row">
                                        <div class="p-2">
                                            <a href="https://sonara-cm.cm/" target="_blank"><img src="{{asset('img/gallery/sonara-logo.png')}}" height="80" width="80" alt="Logo of Greenhouse Ventures"></a>
                                        </div>
                                        <div class="p-2">
                                            <p class="text-dark">Created in 1973 and inaugurated in 1981, SONARA is a topping reforming refinery. SONARA places at the disposal 
                                                of the market the following petroleum products: butane, gasoline, jet fuel, 
                                                kerosene, fuel oil, distillate, fuel oil. 
                                                <a class="text-primary" href="https://sonara-cm.cm/" target="_blank">continue reading ...</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-tittle mt-50">
                            <h1>GREENHOUSE VENTURES Cameroon</h1>
                        </div> 
                        <div class="single-testimonial">
                            <!-- Client Content -->
                            <div class="testimonial-caption">
                                <div class="testimonial-top-cap">
                                    <div class="d-flex flex-row">
                                        <div class="p-2">
                                            <a href="https://greenhouseventures.cm/" target="_blank"><img src="{{asset('img/gallery/greenhouse-logo.png')}}" height="100" width="100" alt="Logo of Greenhouse Ventures"></a>
                                        </div>
                                        <div class="p-2">
                                            <p class="text-dark">GreenHouse Ventures was founded in 2014 with a common goal to increase quality and quantity of food – 
                                                ensuring production and profit with the use of the low cost climate smart greenhouse technology. 
                                                Our idea of farming was to ensure we rebrand agriculture and make it very attractive for others.
                                                <a class="text-primary" href="https://greenhouseventures.cm/about-us/#about" target="_blank">continue reading ...</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('services') }}" class="btn header-btn">View all our Clients</a>
                    </div>
                </div>
                <!-- Form Start -->
                <div class="col-xl-4 col-lg-5 col-md-8">
                    <div class="testimonial-form text-center mt-5">
                        <h3>How can we help you?</h3>
                        <a class="call-btn" href="tel:237674526116"><img src="{{ asset('img/adapt_icon/call.png') }}" height="42" width="42">Click to Call Us Now</a>
                    </div>
                </div>
                <!-- Form End -->
            </div>
        </div>
    </div>
    <!-- Clients End -->
</main>
@endsection
