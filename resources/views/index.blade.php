@extends('components/app')

@section('content')
    <main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="hero__caption mt-2">
                                <h1> Advocates of the supreme Court of <br> Nigeria and Cameroon</h1>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <div class="mt-2">
                                <form>
                                    <div class="card card-body p-3" style="opacity:0.8; min-height: 200px;">
                                        <h2 class="text-center">Talk to a Lawyer, It's Free!</h2>
                                        <div class="flex-column">
                                        <div class="p-1">
                                                <input type="text" class="form-control" placeholder="Name" id="name" onmouseover="changeBorder()">
                                            </div>
                                            <div class="p-1">
                                                <input type="text" class="form-control" placeholder="Email" id="email" onmouseover="changeBorder()">
                                            </div>
                                            <div class="p-1">
                                                <input type="text" class="form-control" placeholder="Telephone" id="telephone" onmouseover="changeBorder()">
                                            </div>
                                            <div class="p-1 align-content-center">
                                                <input type="submit" class="btn header-btn cta-btn p-3">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? our info Start -->
    <div class="our-info-area pt-70 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30 bg-warning p-5 rounded">
                        <div class="info-icon">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="info-caption">
                            <p>Call Us Anytime</p>
                            <span>+ (237) 674-526-116</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30 bg-warning p-5 rounded">
                        <div class="info-icon">
                            <span class="flaticon-clock"></span>
                        </div>
                        <div class="info-caption">
                            <p>Sunday CLOSED</p>
                            <span>Mon - Sat 8am - 6pm</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30 bg-warning p-5 rounded">
                        <div class="info-icon">
                            <span class="flaticon-place"></span>
                        </div>
                        <div class="info-caption">
                            <p>Limbe, No. 5 Nambeke street</p>
                            <span>Cameroon, SW Region</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our info End -->
    <!--? Categories Area Start -->
    <div class="categories-area mt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-30">
                        <span>Our Services</span>
                        <h2>What We Can Do For You</h2>

                    </div>
                </div>
            </div>
            <div class="row p-2">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-shipped"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Land Transport</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-ship"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Ship Transport</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-plane"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Air Transport</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                    </div>
                </div>
                <a href="{{ route('services') }}" class="btn header-btn">Explore All Services</a>
            </div>
        </div>
    </div>
    <!-- Categories Area End -->
    <!--? About Area Start -->
    <div class="about-low-area padding-bottom mt-5 bg-about p-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-50">
                            <span>About Our Law Firm</span>
                            <h2>We help you grow</h2>
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
                        <a href="about.html" class="btn header-btn">More About Us</a>
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
                                <h4><a href="#">IVA IDA BESSEM EBAI, LLB, MA & BL</a></h4>
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
                                <h4><a href="#">BAIYE MBI ETCHU, LLB, BL</a></h4>
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
                                <h4><a href="#">JULIAN TABI EBAI, BSc Econs/Acc, LLB, LLM</a></h4>
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
            <a href="{{ route('services') }}" class="btn header-btn">View all Partners and Associates</a>
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
                                            <img src="{{asset('img/gallery/sonara-logo.png')}}" height="80" width="80" alt="Logo of Greenhouse Ventures">
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
                                            <img src="{{asset('img/gallery/greenhouse-logo.png')}}" height="100" width="100" alt="Logo of Greenhouse Ventures">                                        </div>
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
                        <a class="call-btn" href="tel:237674526116"><img src="{{ asset('img/adapt_icon/call.png') }}" height="35" width="35">Call Us Now</a>
                    </div>
                </div>
                <!-- Form End -->
            </div>
        </div>
    </div>
    <!-- Clients End -->
</main>
<script>
    const name= document.getElementById("name")
    const email = document.getElementById("email")
    const telephone = document.getElementById("telephone")

 function changeBorder(name) {
    name.style.border = '2px solid #ff5f13'
 }

</script>
@endsection
