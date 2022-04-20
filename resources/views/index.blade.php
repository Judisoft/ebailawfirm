@extends('components/app')

@section('content')
    <main>
     @if(session('success'))
        <div class="alert home-bg alert-dismissible fade show rounded-0 mb-0" role="alert">
            <span class="fa fa-check-circle text-success"></span><span class="text-white"> {!! session('success') !!}</span> 
            <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert home-bg alert-dismissible fade show rounded-0 mb-0" role="alert">
            <span class="fa fa-times-circle text-danger"></span><span class="text-white"> {!! session('error') !!}</span> 
            <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @endif
    <!--? slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <div class="hero__caption mt-2">
                                <h1> Advocates of the supreme Court of <br> Nigeria and Cameroon</h1>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-5 col-lg-5">
                            <div class="mt-2">
                                <form action="{{ route('post-consultations') }}" method="post" id="consultationForm" novalidate="novalidate">
                                    @csrf
                                    <div class="card card-body p-3" style="opacity:0.8; min-height: 200px;background-color: #2c234d;border-top:7px solid #ff5f13;">
                                        <h3 class="text-center text-white">Register now and get a <span class="theme-color">free consultation</span></h3>
                                        <div class="flex-column">
                                        <div class="p-1">
                                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                            </div>
                                            <div class="p-1">
                                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">                                            
                                            </div>
                                            <div class="p-1 align-content-center">
                                                <input type="submit" value="Get Free Consultation" class="btn header-btn cta-btn p-3">
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
                        <div class="cat-cap">
                            <h5><a href="services.html">General Litigation</a></h5><br>
                            <p id="generalLitigation">EBAI Law Firm is concerned with the welfare of our clients, subsequently, our goal is to achieve solutions, solve problems and provide practical pieces of advice to clients with cases either civil or criminal.
                                The firm prides itself on being the leading firm handling cases both criminal and civil proficiently.
                                Already existing clients can attest to the fact that all briefs brought to the firm are treated with the expertise and skill they deserve.
                                Wondering whether your matter is civil or criminal in nature? Leave that to us and be completely assured that the brief would be analyzed expertly and executed with the necessary acumen by our veteran lawyers.
                            </p>
                            <button type="button" class="btn header-btn" id="readMore1" onclick="showAllOne()">Read More</a>
                            <button type="button" class="btn header-btn" id="readLess1" style="display: none;" onclick="showLessOne()">Show Less</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-cap">
                            <h5><a href="services.html">Corporate and Finance Law</a></h5>
                             <p id="corporateLaw">At EBAI Law Firm, our lawyers are highly experienced in property 
                                and real estate law matters spanning Advisory, Advocacy, Transactional,
                                Managerial, and Regulatory services.
                                With over decades of experience, our lawyers are ready to provide the premium legal 
                                service you need in your property and real estate matters, including but not limited to:
                                Investigation of title to land.
                                Preparation and review of land documents.
                                Dispute Resolution in land matters.
                                Acquisition and sale of properties.
                                Commercial property transaction.
                                Property development.
                                Leasehold and tenancy agreement.
                                Perfection and Registration of Title.
                                Estate management.
                                Recovery of Premises.
                                Mortgages.
                            </p>
                            <button type="button" class="btn header-btn" id="readMore2" onclick="showAllTwo()">Read More</a>
                            <button type="button" class="btn header-btn" id="readLess2" style="display: none;" onclick="showLessTwo()">Show Less</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-">
                        <div class="cat-cap">
                            <h5><a href="services.html">Legal Advisory</a></h5><br>
                            <p id="legalAdvisory">At EBAI Law Firm, our extensive knowledge of both local and international regulations give us an added advantage to help clients around the world deal effectively and legally with regulatory and compliance issues.
                                Regulatory frameworks are constantly evolving, businesses are getting globalized and cross-border transactions are becoming more complex, thus necessitating the need for highly qualified professionals.
                                At EBAI Law Firm, one of our objectives is to create sophisticated and efficient strategies that safeguard our clients’ assets and reputation and enable them to concentrate on pursuing their businesses with confidence.
                                We commit our global resources to help our clients meet regulatory requirements and keep their businesses running smoothly, whether they are based at home or abroad.
                                We provide legal services to individuals and corporate clients who require counselling regarding complex government laws, rules, regulations, procedure, permits, applications or enforcement matters.
                            </p>
                            <button type="button" class="btn header-btn" id="readMore3" onclick="showAllThree()">Read More</a>
                            <button type="button" class="btn header-btn" id="readLess3" style="display: none;" onclick="showLessThree()">Show Less</a>
                        </div>
                    </div>
                </div>
                <div class="p-3 text-center mr-auto">
                    <a href="{{ route('services') }}" class="btn header-btn">Explore All Services</a>
                </div>
                
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
                        <a href="{{ route('about') }}" class="btn header-btn">More About Us</a>
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
            </div>
            <a href="{{ route('about') }}" class="btn header-btn">View all Partners and Associates</a>
        </div>
    </div>
    <!-- Team Ara End -->
    <!--? Testimonial Start -->
    <div class="testimonial-area p-3 bg-about mt-50">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-8">
                <h1 style="color:#f15f22;">Our Household Clients</h1>
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row p-2">
                            <div class="p-2 ml-3"><img src="{{asset('img/gallery/sonara-logo.png')}}" height="70" width="70" alt="Logo of Greenhouse Ventures"></div>
                            <div class="p-2 mt-3"><h1>SONARA Cameroon</h1></div>
                        </div>
                        <div class="d-flex flex-row p-2">
                            <div class="p-2"><img src="{{asset('img/gallery/greenhouse-logo.png')}}" height="110" width="110" alt="Logo of Greenhouse Ventures"></div>
                            <div class="mt-5"><h1>GREENHOUSE VENTURES Cameroon</h1></div>
                        </div>
                    </div>
                </div>
                <!-- Form Start -->
                <div class="col-xl-4 col-lg-4 col-md-4">
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
{{-- <script>
    const name= document.getElementById("name")
    const email = document.getElementById("email")
    const telephone = document.getElementById("telephone")

 function changeBorder(name) {
    name.style.border = '2px solid #ff5f13'
 }

</script> --}}
<script>
   const generalLit = document.getElementById("generalLitigation").innerHTML
   const corporateLaw = document.getElementById("corporateLaw").innerHTML
   const legalAdvisory = document.getElementById("legalAdvisory").innerHTML
   const readMore1 = document.getElementById("readMore1")
   const readMore2 = document.getElementById("readMore2")
   const readMore3 = document.getElementById("readMore3")

   function truncateString(str, num) {
       if (str.len <= num) {
           return str
       }
       return str.slice(0, num) + ' ' + '...'
   }
   document.getElementById('generalLitigation').innerHTML = truncateString(generalLit, 500)
   document.getElementById("corporateLaw").innerHTML = truncateString(corporateLaw, 480)
   document.getElementById("legalAdvisory").innerHTML = truncateString(legalAdvisory, 470)

   // function showAll(btnEvent) {
  //      btnEvent.addEvenListener('click', showDetails(e) {
    //         console.log(showAll(readMore1))
  //      })
  //  } 
    function showAllOne(){
        serviceId = document.getElementById("generalLitigation")
        btnId = document.getElementById("readLess1")
        serviceId.innerHTML = generalLit
        readMore1.style.display = 'none'
        btnId.style.display = 'inline'
    }

    function showLessOne() {
        document.getElementById("generalLitigation").innerHTML = truncateString(generalLit, 500)
        readMore1.style.display = 'inline'
        readLess1.style.display = 'none'
    }

    function showAllTwo(){
        serviceId = document.getElementById("corporateLaw")
        btnId = document.getElementById("readLess2")
        serviceId.innerHTML = corporateLaw
        readMore2.style.display = 'none'
        btnId.style.display = 'inline'
    }

    function showLessTwo() {
        document.getElementById("corporateLaw").innerHTML = truncateString(corporateLaw, 480)
        readMore2.style.display = 'inline'
        readLess2.style.display = 'none'
    }

    function showAllThree(){
        serviceId = document.getElementById("legalAdvisory")
        btnId = document.getElementById("readLess3")
        serviceId.innerHTML = legalAdvisory
        readMore3.style.display = 'none'
        btnId.style.display = 'inline'
    
    }

    function showLessThree() {
        document.getElementById("legalAdvisory").innerHTML = truncateString(legalAdvisory, 470)
        readMore3.style.display = 'block'
        readLess3.style.display = 'none'
    }

</script>
<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
@endsection
