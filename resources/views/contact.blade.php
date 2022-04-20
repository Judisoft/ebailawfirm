@extends('components/app')

@section('content')
     <main>
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="fa fa-check-circle text-success"></span> {!! session('success') !!}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="fa fa-times-circle text-danger"></span> {!! session('error') !!}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                @endif
                <div class="d-none d-sm-block mb-5 pb-4 bg-about">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5394.644322349458!2d9.193116635680644!3d4.022939406404226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106135de6b85901f%3A0xdfbf24e7d2162598!2sEbai%20Law%20Firm!5e0!3m2!1sen!2scm!4v1650247822904!5m2!1sen!2scm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1 class="contact-title" style="font-size: 36px">Get in Touch</h1>
                        <p style="font-weight:500;font-size:20px;">Fill the form to leave us a message</p>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{ route('post-contact') }}" method="post" id="contactForm" novalidate="novalidate">
                        @csrf
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Limbe SWR, Cameroon</h3>
                                <p>No. 5 Nambeke Street,</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>P.O Box 268 Limbe</h3>
                                <p>SW Region, Cameroon</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3> (+237) 674-526-116</h3>
                                <p>Mon to Sat 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>info@ebailawfirm.cm</h3>
                                <p>Send us an email anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->
    </main>
@endsection
