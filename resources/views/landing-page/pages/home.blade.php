@extends('landing-page.layouts.main')
@section('title', 'Home')

@section('page-content')
    
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- SLIDER START --> 
        {{-- <div class="slider-outer">
        
            <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
                <div id="webmax-two" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
                    <ul>	
                    
                        <!-- SLIDE 1 -->
                        <li data-index="rs-901" 
                            data-transition="fade" 
                            data-slotamount="default" 
                            data-hideafterloop="0" 
                            data-hideslideonmobile="off"  
                            data-easein="default" 
                            data-easeout="default" 
                            data-masterspeed="default"  
                            ddata-thumb="@assets('images/banner/main-banner.jpeg')"
                            data-rotate="0"  
                            data-fstransition="fade" 
                            data-fsmasterspeed="300" 
                            data-fsslotamount="7" 
                            data-saveperformance="off"  
                            data-title="Slide Title" 
                            data-param1="Additional Text" 
                            data-param2="" 
                            data-param3="" 
                            data-param4="" 
                            data-param5="" 
                            data-param6="" 
                            data-param7="" 
                            data-param8="" 
                            data-param9="" 
                            data-param10="" 
                            data-description="">
                        <!-- MAIN IMAGE -->
                            
                            
                        <!-- LAYER NR. 1 [ for overlay ] -->
                        <div class="tp-caption tp-shape tp-shapewrapper " 
                            id="slide-901-layer-0" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                            data-width="full"
                            data-height="full"
                            data-whitespace="nowrap"
                            data-type="shape" 
                            data-basealign="slide" 
                            data-responsive_offset="off" 
                            data-responsive="off"
                            data-frames='[
                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                            ]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            
                            style="z-index: 1;background-color:rgba(0, 0, 0, 0.4);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                        </div>

                        <!-- LAYER NR. 2 [ for video ] -->
                            <div class="rs-background-video-layer" 
                            data-forcerewind="on" 
                            data-volume="mute" 
                            data-videowidth="100%" 
                            data-videoheight="100%" 
                            data-videomp4="@assets('media/video/video4.mp4')" 
                            data-videopreload="auto" 
                            data-videoloop="loop" 
                            data-aspectratio="16:9" 
                            data-autoplay="true" 
                            data-autoplayonlyfirsttime="false">
                        </div>                                 
                    
                        
                        <!-- LAYER NR. 3 [ for title ] -->
                        <div class="tp-caption   tp-resizeme" 
                            id="slide-901-layer-2" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"  
                            data-fontsize="['72','52','42','38']"
                            data-lineheight="['72','52','42','38']"
                            data-width="['700','700','700','480']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"
                        
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[5,5,5,5]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                        
                            style="z-index: 11; 
                            white-space: normal; 
                            font-weight: 700;
                            color:#fff;
                            border-width:0px; font-family: 'Rajdhani', sans-serif;">
                                <div class="slider-block-video" style="font-size:42px; line-height: 40px;">
                                    <q>We are committed to providing our clients the best <span class="text-highlight">Sea-Air Service</span></q>
                                </div>
                        </div>
                        
                        </li>
                        
                        
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
                </div>
            </div>
    
        </div> --}}
        <!-- SLIDER END -->

        <!-- Swiper -->
        <div class="twm-slider2-wrap">

            <!-- Swiper -->
            <div class="swiper twm-slider2">
                <div class="swiper-wrapper">
                    @forelse($sliders as $slider)
                        <!--Slide One -->
                        <div class="swiper-slide bg-cover dark-overlay" style="background-image:url('{{ $slider->image_url }}'); background-color: #fff;">
                            <div class="h-banner-wrap">
                                <div class="h-banner-left">
                                    <div class="h-bnr-top">
                                        <h2>
                                            <span class="title-outline">{{ $slider->title }}</span>
                                        </h2>
                                        <p>{!! $slider->description !!}</p>
                                        <a href="{{ route('sea-air') }}" class="h-bnr-btn">View Services</a>
                                    </div>

                                </div>
                                
                                <div class="cross-line-box left up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                                <div class="cross-line-box right up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                                <div class="circle-left-top zoon-in-out"></div>
                            </div>
                        </div>
                        @empty  
                        <!--Slide One -->
                        <div class="swiper-slide bg-cover" style="background-image:url(@assets('images/main-slider/slider1/bg-large.jpg'));">
                            <div class="h-banner-wrap">
                                <div class="h-banner-left">
                                    <div class="h-bnr-top">
                                        <h2>
                                            <span class="title-outline">Slider 1 <span class="notranslate">Agung</span></span>
                                        </h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, sequi!</p>
                                        <a href="{{ route('sea-air') }}" class="h-bnr-btn">View Services</a>
                                    </div>

                                </div>
                                
                                <div class="cross-line-box left up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                                <div class="cross-line-box right up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                                <div class="circle-left-top zoon-in-out"></div>
                            </div>
                        </div>

                        <!--Slide One -->
                        <div class="swiper-slide bg-cover" style="background-image:url(@assets('images/main-slider/slider1/bg-large.jpg'));">
                            <div class="h-banner-wrap">
                                <div class="h-banner-left">
                                    <div class="h-bnr-top">
                                        <h2>
                                            <span class="title-outline">Slider 2</span>
                                        </h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, sequi!</p>
                                        <a href="{{ route('sea-air') }}" class="h-bnr-btn">View Services</a>
                                    </div>

                                </div>
                                
                                <div class="cross-line-box left up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                                <div class="cross-line-box right up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                                <div class="circle-left-top zoon-in-out"></div>
                            </div>
                        </div>
                    @endforelse

                    {{-- <!--Slide Two -->
                    <div class="swiper-slide bg-cover" style="background-image:url(@assets('images/main-slider/slider1/bg-large2.jpg'));">
                        <div class="h-banner-wrap">
                            <div class="h-banner-left">
                                <div class="h-bnr-top">
                                    <h2>
                                        <span class="title-outline">To Every</span>
                                        Direction
                                    </h2>
                                    <p>There are many variations of passages of worem Ipsum available, but the majority</p>
                                    <a href="services-1.html" class="h-bnr-btn">View Services</a>
                                </div>

                            </div>
                            
                            <div class="cross-line-box left up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                            <div class="cross-line-box right up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                            <div class="circle-left-top zoon-in-out"></div>
                        </div>
                    </div>

                    <!--Slide Three -->
                    <div class="swiper-slide bg-cover" style="background-image:url(@assets('images/main-slider/slider1/bg-large3.jpg'));">
                        <div class="h-banner-wrap">
                            <div class="h-banner-left">
                                <div class="h-bnr-top">
                                    <h2>
                                        <span class="title-outline">Ready</span>
                                        To Move
                                    </h2>
                                    <p>There are many variations of passages of worem Ipsum available, but the majority</p>
                                    <a href="services-1.html" class="h-bnr-btn">View Services</a>
                                </div>

                            </div>
                            
                            <div class="cross-line-box left up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                            <div class="cross-line-box right up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                            <div class="circle-left-top zoon-in-out"></div>
                        </div>
                    </div> --}}

                </div>
                <!-- navigation Numbers -->
                <div class="swiper-pagination"></div>
                <!-- navigation Arrow -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            
        </div>
        <!-- Swiper -->

        <!-- WHY CHOOSE US SECTION START -->
        <div class="section-full p-t120 p-b90 site-bg-gray-light tw-why-choose-area2">
            <div class="tw-why-choose-area-top2">        
                <div class="container">

                    <div class="tw-why-choose-section2">

                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="tw-why-choose-right">
                                    <div class="tw-why-choose-media1 shine-effect">
                                        <div class="shine-box">
                                            <img src="@assets('images/abt-1.jpg')" alt="" >
                                        </div>
                                    </div>
                                    <div class="tw-why-choose-tag slide-top shine-effect">
                                        <div class="tag-box">
                                            <h2>295+</h2>
                                            <h3>Branches</h3>
                                            <span>Since 1996</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="tw-why-choose-left">
                                    <!-- TITLE START-->
                                    <div class="section-head left wt-small-separator-outer">
                                        <div class="wt-small-separator site-text-primary">
                                            <div>Why Choose Us</div>                                
                                        </div>
                                        <h2 class="wt-title">Transport Solutions of The Future</h2>
                                    </div>                  
                                    <!-- TITLE END-->

                                    <strong>Unstable supply chains push companies around the globe to their limits every day - especially on the trade routes from Asia to Europe, Africa and North America. In volatile market situations, adaptable action is essential.</strong>
                                    <strong>Successful companies opt for alternative, highly flexible freight solutions, such as the PAM CARGO Sea-Air service to reduce their costs, keep their delivery promise, and improve their carbon footprint.</strong>
                                    
                                    <ul class="description-list">
                                        <li>
                                            <i class="fa fa-angle-right"></i>
                                            Perfect combination of Cost-Efficient Sea Freight and Fast Air Freight
                                        </li>
                                        <li>
                                            <i class="fa fa-angle-right"></i>
                                            Agile, Cost-Efficient, and Green
                                        </li>
                                        <li>
                                            <i class="fa fa-angle-right"></i>
                                            Save costs compared to Air Freight
                                        </li>
                                        <li>
                                            <i class="fa fa-angle-right"></i>
                                            Save time compared to Sea Freight
                                        </li>
                                        <li>
                                            <i class="fa fa-angle-right"></i>
                                            Save CO<sup>2</sup> emissions in the mix of sea and airfreight
                                        </li>
                                    </ul>
                                    <div class="tw-why-choose-left-bottom">
                                        <a href="{{ route('about') }}" class="btn-half site-button"><span>Learn More</span><em></em></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>                  
                </div>
            </div>

        </div>   
        <!-- WHY CHOOSE US SECTION END -->

        <!-- CLIENT LOGO SECTION START -->
        <div class="section-full p-t90 p-b90 site-bg-white tw-client-logo2-area">
            <div class="container home-client2-outer">
                <div class="section-content">

                    <div class="owl-carousel home-client-carousel2 owl-btn-vertical-center">
                    
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="about-1.html"><img src="@assets('images/client-logo/w1.png')" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="about-1.html"><img src="@assets('images/client-logo/w2.png')" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="about-1.html"><img src="@assets('images/client-logo/w3.png')" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="about-1.html"><img src="@assets('images/client-logo/w4.png')" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="about-1.html"><img src="@assets('images/client-logo/w5.png')" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="about-1.html"><img src="@assets('images/client-logo/w1.png')" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="about-1.html"><img src="@assets('images/client-logo/w2.png')" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="about-1.html"><img src="@assets('images/client-logo/w3.png')" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="about-1.html"><img src="@assets('images/client-logo/w4.png')" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="about-1.html"><img src="@assets('images/client-logo/w5.png')" alt=""></a></div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
        <!-- CLIENT LOGO  SECTION End --> 

        <!-- SERVICES SECTION START -->
        <div class="section-full p-t120 p-b90 site-bg-gray tw-service-gallery-style3-area">
        
            <div class="services-gallery-block-outer3">
                <div class="container">

                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div>All services</div>                                
                        </div>
                        <h2 class="wt-title">Trusted For Our Services</h2>
                        <p class="section-head-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since the  when an printer took.</p>
                    </div>                  
                    <!-- TITLE END-->

                    <div class="section-content"> 
                        <div class="services-gallery-style3">
                            <div class="row justify-content-center">
                            
                                <!-- COLUMNS 1 --> 
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="service-box-style3">
                                        <div class="service-media">
                                            <img src="@assets('images/icons/pic3.png')" alt="">
                                        </div>
                                        <div class="service-content">
                                            <h3 class="service-title-large"><span class="service-title-large-number">01</span><a href="{{ route('sea-air') }}">Sea Air</a></h3>
                                            <p>Our aim is to optimize and improve your supply chain so that we can give you the best service.</p>
                                            <a href="{{ route('sea-air') }}" class="site-button-2">View Detail</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- COLUMNS 2 --> 
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="service-box-style3">
                                        <div class="service-media">
                                            <img src="@assets('images/icons/pic1.png')" alt="">
                                        </div>
                                        <div class="service-content">
                                            <h3 class="service-title-large"><span class="service-title-large-number">02</span><a href="{{ route('land-air') }}">Land Air</a></h3>
                                            <p>Our aim is to optimize and improve your supply chain so that we can give you the best service.</p>
                                            <a href="{{ route('land-air') }}" class="site-button-2">View Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                              
                </div>
            </div>
            
        </div>
        <!-- SERVICES SECTION END -->

        <!-- TESTIMONIALS SECTION START -->
        <div class="section-full bg-cover p-t120 p-b120 bg-cover tw-testimonial-2-area">
            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div>Testimonials</div>
                </div>
                <h2 class="wt-title">Client Says</h2>
            </div>
            <!-- TITLE END-->
            <div class="tw-testimonial-2-area-inner">
                <div class="container">

                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-12">
                            
                            <div class="slider-testimonial-2-wrap">
                                <!-- MAIN SLIDES -->
                                <div class="slick-testimonials-2">
                                    <div class="slick-item">
                                        <div class="tw-testimonials2-section">
                                            <div class="tw-testimonials2-text">
                                                <span class="tw-testimonials2-quote"><img src="@assets('images/quote.png')" alt=""></span>
                                                Nemo enim ipsam voluptate voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratio ne voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                            </div>
                                            <div class="tw-testimonials2-name">Peter Len</div>
                                            <div class="tw-testimonials2-postion">Web Designer</div>
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="tw-testimonials2-section">
                                            <div class="tw-testimonials2-text">
                                                <span class="tw-testimonials2-quote"><img src="@assets('images/quote.png')" alt=""></span>
                                                Nemo enim ipsam voluptate voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratio ne voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                            </div>
                                            <div class="tw-testimonials2-name">Giselle</div>
                                            <div class="tw-testimonials2-postion">Developer</div>
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="tw-testimonials2-section">
                                            <div class="tw-testimonials2-text">
                                                <span class="tw-testimonials2-quote"><img src="@assets('images/quote.png')" alt=""></span>
                                                Nemo enim ipsam voluptate voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratio ne voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                            </div>
                                            <div class="tw-testimonials2-name">Josephine</div>
                                            <div class="tw-testimonials2-postion">Web Designer</div>
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="tw-testimonials2-section">
                                            <div class="tw-testimonials2-text">
                                                <span class="tw-testimonials2-quote"><img src="@assets('images/quote.png')" alt=""></span>
                                                Nemo enim ipsam voluptate voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratio ne voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                            </div>
                                            <div class="tw-testimonials2-name">Penelope</div>
                                            <div class="tw-testimonials2-postion">Developer</div>
                                        </div>
                                    </div>                                    
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slick-testimonials-2-thumb">
                                
                                    <div class="slick-item">
                                        <div class="slick-testimonials-2-thumbpic">
                                            <img src="@assets('images/testimonials/pic1.jpg')" alt="one">
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="slick-testimonials-2-thumbpic">
                                            <img src="@assets('images/testimonials/pic2.jpg')" alt="two">
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="slick-testimonials-2-thumbpic">
                                            <img src="@assets('images/testimonials/pic3.jpg')" alt="three">
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="slick-testimonials-2-thumbpic">
                                            <img src="@assets('images/testimonials/pic4.jpg')" alt="four">
                                        </div>
                                    </div>                                    
                                </div>                            
                            </div>
                                
                        </div>

                    </div>
                    
                </div>
                <div class="tw-outer-border"></div>
            </div>   
        </div>
        <!-- TESTIMONIALS  SECTION End --> 

        <!-- OUR BLOG START -->
        <div class="section-full p-t120 p-b90 site-bg-gray bg-cover">
            <div class="container">
            
                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer">
                    <div class="wt-small-separator site-text-primary">
                    <div>Our Blogs</div>                                
                    </div>
                    <h2 class="wt-title">Recent news & events</h2>
                    <p class="section-head-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since the  when an printer took.</p>
                </div>                  
                <!-- TITLE END-->


                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <!--Block one-->
                            <div class="blog-post blog-post-4-outer">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="blog-single.html"><img src="@assets('images/blog/latest/bg1.jpg')" alt=""></a>
                                </div>                                    
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><span>02</span>Aug</li>
                                        </ul>
                                    </div>
                                                                
                                <div class="wt-post-title ">
                                    <h3 class="post-title"><a href="blog-single.html">At the end of the day, going forward, a 
                                        new normal that has evolved from.</a></h3>
                                </div>
                                <div class="wt-post-text ">
                                    <p>
                                        New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                    </p>
                                </div>
                                <div class="wt-post-readmore ">
                                    <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                </div>                                        
                            </div>                                
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <!--Block two-->
                            <div class="blog-post blog-post-4-outer">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="blog-single.html"><img src="@assets('images/blog/latest-2/l-1.jpg')" alt=""></a>
                                </div>                                     
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><span>08</span> Aug</li>
                                        </ul>
                                    </div>
                                                                    
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="blog-single.html">How all this mistaken idea denouncing pleasure and praising pain was.</a></h3>
                                    </div>
                                    <div class="wt-post-text ">
                                        <p>
                                            New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                        </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                        <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                    </div>                                        
                                </div>                                
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <!--Block three-->
                            <div class="blog-post blog-post-4-outer">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="blog-single.html"><img src="@assets('images/blog/latest/bg3.jpg')" alt=""></a>
                                </div>                                     
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><span>21</span> Aug</li>
                                        </ul>
                                    </div>
                                                                    
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="blog-single.html">Going forward, a new normal that has 
                                            evolved from generation.</a></h3>
                                    </div>
                                    <div class="wt-post-text ">
                                        <p>
                                            New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                        </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                        <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                    </div>
                                </div>                                
                            </div> 
                        </div>                                                        
                                                    
                    </div>
                </div>
            
            </div>
        </div>
        <!-- OUR BLOG END -->

        <!-- LATEST PRJECTS SLIDER START -->
        {{-- <div class="section-full section-full p-t120 p-b90 tw-project-2-wrap site-bg-gray">
            <!-- IMAGE CAROUSEL START -->
            <div class="section-content">
            
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div>Projects</div>                                
                        </div>
                        <h2 class="wt-title">Featured Projects</h2>
                        <p class="section-head-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since the  when an printer took.</p>
                    </div>                  
                    <!-- TITLE END-->
                </div>

                <div class="tw-project-2-content m-b30">
                    <div class="tw-project-2-content-position">
                        
                        <div class="owl-carousel project-carousel-2">
                            <!-- COLUMNS 1 --> 
                            <div class="item">
                                <div class="project-new-2">
                                    <div class="wt-img-effect">
                                        <img src="@assets('images/project/1.jpg')" alt="">
                                        <div class="project-view">
                                            <a class="elem pic-long project-view-btn" href="@assets('images/project/1.jpg')" title="Nh-16 Highway Bridge" 
                                            data-lcl-txt="" data-lcl-author="" data-lcl-thumb="@assets('images/project/1.jpg')">
                                            <i class="fa fa-search-plus"></i>     
                                            </a> 
                                        </div> 
                                    </div>
                                    <div class="project-new-content">
                                        <span class="project-new-category">Warehousing , Distrbution</span>	
                                        <h4 class="wt-title"><a href="{{ route('sea-air') }}">Warehouse inventory</a></h4>
                                        <a href="{{ route('sea-air') }}" class="site-button-h-align">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 --> 
                            <div class="item">
                                <div class="project-new-2">
                                    <div class="wt-img-effect">
                                        <img src="@assets('images/project/2.jpg')" alt="">
                                        <div class="project-view">
                                            <a class="elem pic-long project-view-btn" href="@assets('images/project/2.jpg')" title="Nh-16 Highway Bridge" 
                                            data-lcl-txt="" data-lcl-author="" data-lcl-thumb="@assets('images/project/2.jpg')">
                                            <i class="fa fa-search-plus"></i>     
                                            </a> 
                                        </div> 
                                    </div>
                                    <div class="project-new-content">
                                        <span class="project-new-category">Logistics, Analytics</span>	
                                        <h4 class="wt-title"><a href="{{ route('sea-air') }}">Minimize Manufacturing</a></h4>
                                        <a href="{{ route('sea-air') }}" class="site-button-h-align">Read More</a>
                                    </div>
                                </div>
                            </div>                    
                            <!-- COLUMNS 3 --> 
                            <div class="item">
                                <div class="project-new-2">
                                    <div class="wt-img-effect">
                                        <img src="@assets('images/project/3.jpg')" alt="">
                                        <div class="project-view">
                                            <a class="elem pic-long project-view-btn" href="@assets('images/project/3.jpg')" title="Nh-16 Highway Bridge" 
                                            data-lcl-txt="" data-lcl-author="" data-lcl-thumb="@assets('images/project/3.jpg')">
                                            <i class="fa fa-search-plus"></i>     
                                            </a> 
                                        </div> 
                                    </div>
                                    <div class="project-new-content">
                                        <span class="project-new-category">Warehousing , Distrbution</span>	
                                        <h4 class="wt-title"><a href="{{ route('sea-air') }}">Warehouse inventory</a></h4>
                                        <a href="{{ route('sea-air') }}" class="site-button-h-align">Read More</a>
                                    </div>
                                </div>
                            </div> 

                            <!-- COLUMNS 4 --> 
                            <div class="item">
                                <div class="project-new-2">
                                    <div class="wt-img-effect">
                                        <img src="@assets('images/project/4.jpg')" alt="">
                                        <div class="project-view">
                                            <a class="elem pic-long project-view-btn" href="@assets('images/project/4.jpg')" title="Nh-16 Highway Bridge" 
                                            data-lcl-txt="" data-lcl-author="" data-lcl-thumb="@assets('images/project/4.jpg')">
                                            <i class="fa fa-search-plus"></i>     
                                            </a> 
                                        </div> 
                                    </div>
                                    <div class="project-new-content">
                                        <span class="project-new-category">Warehousing , Distrbution</span>	
                                        <h4 class="wt-title"><a href="{{ route('sea-air') }}">Warehouse inventory</a></h4>
                                        <a href="{{ route('sea-air') }}" class="site-button-h-align">Read More</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- COLUMNS 5 --> 
                            <div class="item">
                                <div class="project-new-2">
                                    <div class="wt-img-effect">
                                        <img src="@assets('images/project/5.jpg')" alt="">
                                        <div class="project-view">
                                            <a class="elem pic-long project-view-btn" href="@assets('images/project/5.jpg')" title="Nh-16 Highway Bridge" 
                                            data-lcl-txt="" data-lcl-author="" data-lcl-thumb="@assets('images/project/5.jpg')">
                                            <i class="fa fa-search-plus"></i>     
                                            </a> 
                                        </div> 
                                    </div>
                                    <div class="project-new-content">
                                        <span class="project-new-category">Logistics, Analytics</span>	
                                        <h4 class="wt-title"><a href="{{ route('sea-air') }}">Minimize Manufacturing</a></h4>
                                        <a href="{{ route('sea-air') }}" class="site-button-h-align">Read More</a>
                                    </div>
                                </div>
                            </div>  

                            <!-- COLUMNS 6 --> 
                            <div class="item">
                                <div class="project-new-2">
                                    <div class="wt-img-effect">
                                        <img src="@assets('images/project/6.jpg')" alt="">
                                        <div class="project-view">
                                            <a class="elem pic-long project-view-btn" href="@assets('images/project/6.jpg')" title="Nh-16 Highway Bridge" 
                                            data-lcl-txt="" data-lcl-author="" data-lcl-thumb="@assets('images/project/6.jpg')">
                                            <i class="fa fa-search-plus"></i>     
                                            </a> 
                                        </div> 
                                    </div>
                                    <div class="project-new-content">
                                        <span class="project-new-category">Warehousing , Distrbution</span>	
                                        <h4 class="wt-title"><a href="{{ route('sea-air') }}">Warehouse inventory</a></h4>
                                        <a href="{{ route('sea-air') }}" class="site-button-h-align">Read More</a>
                                    </div>
                                </div>
                            </div> 
                                                

                        </div>
                    </div>
                </div>

            </div>
            
        </div>    --}}
        <!-- LATEST PRJECTS SLIDER END -->

    </div>
    <!-- CONTENT END -->
@endsection