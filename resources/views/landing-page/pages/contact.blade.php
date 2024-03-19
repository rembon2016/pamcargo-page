@extends('landing-page.layouts.main')
@section('title', 'Contact')

@section('page-content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
        <div class="overlay-main site-bg-sky opacity-08"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Contact</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    
    <!-- CONTACT FORM -->
    <div class="section-full p-t120 p-b120">   
        <div class="section-content">
            <div class="container">
                <div class="gmap-outline mb-5">
                    <div class="google-map">
                        <div style="width: 100%">
                            <iframe height="460" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.8534521658976!2d-118.2533646842856!3d34.073270780600225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c6fd9829c6f3%3A0x6ecd11bcf4b0c23a!2s1363%20Sunset%20Blvd%2C%20Los%20Angeles%2C%20CA%2090026%2C%20USA!5e0!3m2!1sen!2sin!4v1620815366832!5m2!1sen!2sin"></iframe>
                        </div>
                    </div>
                </div>
                <div class="contact-one">
                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer mb-4">
                        <h2 class="wt-title mb-2">What can we do for you?</h2>
                        <p class="mb-0">
                            Do you have any questions about our Sea-Air solutions? Please feel free to contact us.
                        </p>
                    </div>
                    <!-- TITLE END--> 

                    <!-- CONTACT FORM-->
                    <div class="contact-one-inner  site-bg-sky-blue-light">
                        <div class="row">

                            <div class="col-lg-8 col-md-12">
                                <div class="contact-form-outer">
                                    <form  class="cons-contact-form" method="post" action="form-handler2.php">
                                        <div class="row">

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="first_name" type="text" required class="form-control" placeholder="First Name">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="last_name" type="text" required class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                <textarea name="message" class="form-control" rows="3" placeholder="Type a message"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <button type="submit" class="btn-half site-button d-flex align-items-center gap-2 pe-0">
                                                    <i class="fa fa-paper-plane"></i>
                                                    <span>Send Message</span>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div> 

                            <div class="col-lg-4 col-md-12">
                                <div class="contact-info  site-bg-dark bg-no-repeat bg-bottom-left"  style="background-image: url(images/background/contact-bg.png);">
                                    <!-- TITLE START-->
                                    <div class="section-head-small white mb-4">
                                        <h3 class="wt-title">Let's get in touch</h3>
                                    </div>
                                    <!-- TITLE END-->  
                                    
                                    <div class="contact-info-section">  
                                            
                                            <div class="c-info-column">
                                                <div class="c-info-icon fa fa-map-marker"><span></span></div>
                                                <p>
                                                    P.O. Box - 117993, Office 813, Al-Fattan Plaza Airport Road, <br>
                                                    Al Garhoud, Dubai - U.A.E.</p>
                                            </div>  

                                            <div class="c-info-column">
                                                <div class="c-info-icon fa fa-mobile-phone custome-size"><span></span></div>
                                                
                                                <p><a href="tel:+971-4-285-2520">+971 4 285 2520</a></p>
                                                <p class="mb-0">
                                                    Monday to Friday (9AM - 6PM)
                                                </p>
                                            </div>

                                            <div class="c-info-column">
                                                <div class="c-info-icon fa fa-envelope-o"><span></span></div>
                                                <p>info@pamcargo.com</p>
                                            </div>
                                    
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
@endsection