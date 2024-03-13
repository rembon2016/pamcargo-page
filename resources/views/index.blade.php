<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>Logitrago Template | Home Page Style 1</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/bootstrap.min.css')" />
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/font-awesome.min.css')" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/owl.carousel.min.css')">
    <!-- SLICK CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/slick.min.css')">
    <!-- SLICK CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/slick-theme.css')">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/magnific-popup.min.css')">
    <!-- SWIPER SLIDER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/swiper-bundle.min.css')" />
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/style.css')">
    <!-- Lc light box popup -->
    <link rel="stylesheet" href="@assets('css/lc_lightbox.css')" />     
    <!-- Price Range Slider -->
    <link rel="stylesheet" href="@assets('css/bootstrap-slider.min.css')" />
    

</head>

<body>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div id="outer-barG">
            <div id="front-barG" class="bar-animationG">
                <div id="barG_1" class="bar-lineG"></div>
                <div id="barG_2" class="bar-lineG"></div>
                <div id="barG_3" class="bar-lineG"></div>
            </div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

	<div class="page-wraper">
     
        <!-- HEADER START -->
        <header class="site-header header-style-3 mobile-sider-drawer-menu">

            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">  
                                    
                    <div class="container-fluid clearfix"> 
                
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="index.html">
                                    <img src="@assets('images/logo-dark.png')" alt="">
                                </a>
                            </div>
                        </div>  
                        
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button> 

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                            
                            <ul class=" nav navbar-nav">
                                <li class="has-child"><a href="javascript:;">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home-1</a></li>
                                        <li><a href="index-2.html">Home-2</a></li>
                                        <li><a href="index-3.html">Home-3</a></li>
                                        <li><a href="index-4.html">Home-4</a></li>
                                    </ul>                                                                 
                                </li>
                                <li class="has-child"><a href="javascript:;">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-1.html">About Us</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="error-404.html">Error 404</a></li>
                                    </ul>                                                                 
                                </li>
                                <li class="has-child"><a href="javascript:;">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="services-1.html">Services 1</a></li>
                                        <li><a href="services-2.html">Services 2</a></li>
                                        <li><a href="services-detail.html">Services Detail</a></li>
                                    </ul>                                                                 
                                </li>
                       
                                <li class="has-child"><a href="javascript:;">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>                                        
                                        <li><a href="blog-single.html">Blog Detail</a></li>
                                    </ul>                                
                                </li>
                                <li><a href="contact.html">Contact</a></li>  
                        
                            </ul>

                        </div>
                        
                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">
                            <div class="extra-cell">
                                <div class="header-search">
                                    <a href="#search" class="header-search-icon"><i class="fa fa-search"></i></a>
                                </div>                                
                            </div>
                            <div class="extra-cell">
                                <div class="header-nav-call-section">

                                    
                                    <div class="detail">
                                        <span class="title">Free Call In U.S.A</span>
                                        <span><a href="tel:29002344241">2 900 234 4241</a></span>
                                    </div>
                                    <div class="media">
                                        <img src="@assets('images/call.png')" alt="#">
                                    </div>
                                </div>
                            </div> 
                                
                            </div>                            
                    
                                                    
                        
                    </div>    
                
                
                </div>

                <!-- SITE Search -->
                <div id="search"> 
                    <span class="close"></span>
                    <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                        <input class="form-control" value="" name="q" type="search" placeholder="Type to search"/>
                        <span class="input-group-append">
                            <button type="button" class="search-btn">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </span>
                    </form>
                </div> 
            </div>
            
        </header>
        <!-- HEADER END -->
    
        <!-- CONTENT START -->
        <div class="page-content">

            <!-- Swiper -->
            <div class="twm-slider1-wrap">

                <!-- Swiper -->
                <div class="swiper twm-slider">
                    <div class="swiper-wrapper">
                        <!--Slide One -->
                        <div class="swiper-slide">
                            <div class="h-banner-wrap">
                                <div class="h-banner-left">
                                    <div class="h-bnr-top">
                                        <h2>
                                            <span class="title-outline">Around</span>
                                            The World
                                        </h2>
                                        <p>There are many variations of passages of worem Ipsum available, but the majority</p>
                                        <a href="services-1.html" class="h-bnr-btn">View Services</a>
                                    </div>

                                </div>
                                <div class="h-banner-right">
                                    <div class="h-bnr-r-inner">
                                        <div class="h-bnr-media">
                                            <img src="@assets('images/main-slider/slider1/plane.png')" alt="#" class="slide-top">
                                        </div>
                                        <div class="h-bnr-animation bg-cover bg-center bg-image-moving" style="background-image:url(images/main-slider/slider1/bg1.jpg)">
                                   
                                        </div>
                                    </div>
                                </div>
                                <div class="cross-line-box left up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                                <div class="cross-line-box right up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                                <div class="circle-left-top zoon-in-out"></div>
                            </div>
                        </div>

                        <!--Slide Two -->
                        <div class="swiper-slide">
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
                                <div class="h-banner-right">
                                    <div class="h-bnr-r-inner">
                                        <div class="h-bnr-media">
                                            <img src="@assets('images/main-slider/slider1/truck.png')" alt="#" class="slide-top">
                                        </div>
                                        <div class="h-bnr-animation bg-cover bg-center bg-image-moving" style="background-image:url(images/main-slider/slider1/bg2.jpg)">
                                   
                                        </div>
                                    </div>
                                </div>
                                <div class="cross-line-box left up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                                <div class="cross-line-box right up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                                <div class="circle-left-top zoon-in-out"></div>
                            </div>
                        </div>

                        <!--Slide Three -->
                        <div class="swiper-slide">
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
                                <div class="h-banner-right">
                                    <div class="h-bnr-r-inner">
                                        <div class="h-bnr-media">
                                            <img src="@assets('images/main-slider/slider1/ship.png')" alt="#" class="slide-top">
                                        </div>
                                        <div class="h-bnr-animation bg-cover bg-center bg-image-moving" style="background-image:url(images/main-slider/slider1/bg3.jpg)">
                                   
                                        </div>
                                    </div>
                                </div>
                                <div class="cross-line-box left up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                                <div class="cross-line-box right up-down"><img src="@assets('images/main-slider/slider1/cross-line-box.png')" alt="#"></div>
                                <div class="circle-left-top zoon-in-out"></div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                
            </div>
            <!-- Swiper -->

            
            <!-- WHAT WE DO SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-gray tw-what-wedo-area">
                        
                <div class="container">

                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div>What we do!</div>                                
                        </div>
                        <h2 class="wt-title">Specialist Logistics Services</h2>
                        <p class="section-head-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since the  when an printer took.</p>
                    </div>                  
                    <!-- TITLE END-->

                    <div class="tw-what-wedo-section">

                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-12">
                                <div class="tw-what-wedo-media">
                                    <img src="@assets('images/icons/img1.png')" alt="">
                                </div>
                            </div>

                            <div class="col-xl-7 col-lg-7 col-md-12">
                                <div class="tw-service-icon-box-wrap">
                                    <!-- COLUMNS 1 --> 
                                    <div class="service-icon-box-two">
                                    
                                        <div class="service-icon-box-two-media">
                                            <img src="@assets('images/icons/pic1.png')" alt="#">
                                        </div>
                                                                                
                                        <div class="service-icon-box-title">
                                            <h3 class="wt-title">
                                                <a href="services-detail.html">
                                                    <span class="site-text-primary">01.</span>Road Freight</a>
                                                </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt </p>
                                        </div>
                                                                                    
                                    </div>

                                    <!-- COLUMNS 2 --> 
                                    <div class="service-icon-box-two">
                                    
                                        <div class="service-icon-box-two-media">
                                            <img src="@assets('images/icons/pic2.png')" alt="#">
                                        </div>
                                                                                
                                        <div class="service-icon-box-title">
                                            <h3 class="wt-title">
                                                <a href="services-detail.html">
                                                    <span class="site-text-primary">02.</span>Shipping Freight</a>
                                                </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt </p>
                                        </div>
                                                                                    
                                    </div>

                                    <!-- COLUMNS 3 --> 
                                    <div class="service-icon-box-two">
                                    
                                        <div class="service-icon-box-two-media">
                                            <img src="@assets('images/icons/pic3.png')" alt="#">
                                        </div>
                                                                                
                                        <div class="service-icon-box-title">
                                            <h3 class="wt-title">
                                                <a href="services-detail.html">
                                                    <span class="site-text-primary">03.</span>Air Freight</a>
                                                </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt </p>
                                        </div>
                                                                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>                  
                </div>

            </div>   
            <!-- WHAT WE DO SECTION END -->
            
            <!-- WHY CHOOSE US SECTION START -->
            <div class="section-full-wrap site-bg-gray tw-why-choose-area">
                <div class="section-full p-t120 p-b120 tw-why-choose-area-top bg-cover bg-no-repeat" style="background-image: url(images/background/bg-1.jpg);">        
                    <div class="container">

                        <div class="tw-why-choose-section">

                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-12">
                                    <div class="tw-why-choose-left">
                                        <!-- TITLE START-->
                                        <div class="section-head left wt-small-separator-outer">
                                            <div class="wt-small-separator site-text-primary">
                                            <div>Why Choose Us</div>                                
                                            </div>
                                            <h2 class="wt-title">We Are Professional Logistics & cargo Agency</h2>
                                        </div>                  
                                        <!-- TITLE END-->
                                        <strong>Sed ut perspiciatis unde omnis iste natus error volup tatem accusantium dolorem que laudantium, totam rem aperiam, eaque ipsa illo inventore.</strong>
                                        <p class="section-head-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem que laudantium, totam rem aperiam, que ipsa quae ab illo inventore veritatis quasi architecto beatae itae dicta sunt explicabo. Nemo enim ipsam voluptate voluptas sitr atur aut odit aut fugit, sed quia consequuntur magni dolores is eos qui ratione voluptatem sequi nesciunt. </p>
                                        <div class="tw-why-choose-left-bottom">
                                            <a href="about-1.html" class="btn-half site-button"><span>Learn More</span><em></em></a>
                                            <div class="sign-font">
                                                <span>Signature</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-7 col-lg-7 col-md-12">
                                    <div class="tw-why-choose-right">
                                        <div class="tw-why-choose-media1 shine-effect">
                                            <div class="shine-box">
                                                <img src="@assets('images/w-choose/pic1.jpg')" alt="" >
                                            </div>
                                        </div>
                                        <div class="tw-why-choose-media2 slide-top shine-effect">
                                            <div class="shine-box">
                                                <img src="@assets('images/w-choose/pic2.jpg')" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-hilite-text-wrap2">
                                <div class="tw-hilite-text">
                                    <span>Logistics</span>
                                </div>
                            </div>
                        </div>                  
                    </div>
                </div>

                <div class="tw-any-help-section">
                    <div class="container">
                        <div class="tw-any-help-inner">
                            <img src="@assets('images/w-choose/qt-icon.png')" alt="">
                            <span class="tw-24">24/7 Active Suport Team</span>
                            <span class="tw-help-title">Need Immediate Support Or Any Help?</span>
                            <span class="tw-help-number">(2 900 234 4241)</span>
                        </div>
                    </div>
                </div>

            </div>   
            <!-- WHY CHOOSE US SECTION END -->

            <!-- BOOKING SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-gray tw-booking-area" style="background-image: url(images/booking/bg-map.png);">
                        
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div>Request A Quote</div>                                
                        </div>
                        <h2 class="wt-title">Booking For Product Transformation</h2>
                        <p class="section-head-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since the  when an printer took.</p>
                    </div>                  
                    <!-- TITLE END-->
                </div>
                
                <div class="container">
                    <div class="tw-booking-section">
                        <div class="row">

                            
                            <div class="col-xl-3 col-lg-3 col-md-12">
                                <div class="tw-booking-media">
                                    <div class="media">
                                        <img src="@assets('images/booking/pic1.png')" alt="#">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-9 col-lg-9 col-md-12">
                                <div class="tw-booking-form">
                                    
                                    <div class="row booking-tab-container">
                                        <div class="col-lg-2 col-md-2 booking-tab-menu">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item active text-center">
                                                    <div class="media">
                                                        <img src="@assets('images/booking/icon1.png')" alt="">
                                                    </div>
                                                    <span>Request A Quote</span>
                                                </a>
                                                <a href="#" class="list-group-item text-center">
                                                    <div class="media">
                                                        <img src="@assets('images/booking/icon2.png')" alt="">
                                                    </div>
                                                    <span>Track & Trace</span>
                                                </a>
                                            
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 booking-tab">
                                            <!-- flight section -->
                                            <div class="booking-tab-content active">
                                                <form>

                                                    <div class="row">
            
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="mb-3">
                                                                <input name="username" type="text" required class="form-control" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="mb-3">
                                                                <input name="email" type="text" required class="form-control" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="mb-3">
                                                                <input name="phone" type="text" required class="form-control" placeholder="Phone">
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="mb-3">
                                                                <select id="Freight_Type" class="form-select">
                                                                    <option selected>Freight Type</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="mb-3">
                                                                <input name="username" type="text" required class="form-control" placeholder="City Of Departure">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="mb-3">
                                                                <input name="username" type="text" required class="form-control" placeholder="Delivery City">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="mb-3">
                                                                <select id="Incoterms" class="form-select">
                                                                    <option selected>Incoterms</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="mb-3">
                                                                <input name="username" type="text" required class="form-control" placeholder="Weight">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="mb-3">
                                                                <input name="email" type="text" required class="form-control" placeholder="Height">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="mb-3">
                                                                <input name="phone" type="text" required class="form-control" placeholder="Width">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="mb-3">
                                                                <input name="phone" type="text" required class="form-control" placeholder="Length">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-12">
                                                            <div class="tw-inline-checked mt-2 mb-3">
                                                                <div class="mb-4 form-check">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                    <label class="form-check-label" for="exampleCheck1">Fragile</label>
                                                                </div>

                                                                <div class="mb-4 form-check">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                                    <label class="form-check-label" for="exampleCheck2">Express Delivery</label>
                                                                </div>

                                                                <div class="mb-4 form-check">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                                                    <label class="form-check-label" for="exampleCheck3">Insurance</label>
                                                                </div>

                                                                <div class="mb-4 form-check">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                                                    <label class="form-check-label" for="exampleCheck4">Packaging</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="tw-booking-footer">
                                                                <div class="tw-booking-footer-btn">
                                                                    <button type="submit" class="btn-half site-button">
                                                                        <span>Submit Now</span><em></em>
                                                                    </button>
                                                                </div>
                                                                <span class="tw-booking-footer-text">Quote</span>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                </form>
                                            </div>
                                            <!-- train section -->
                                            <div class="booking-tab-content">
                                                <form class="track-and-trace-form">

                                                    <div class="row">

                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="mb-3">
                                                                <select id="Shipment_Type" class="form-select">
                                                                    <option selected>Shipment Type</option>
                                                                    <option>Road</option>
                                                                    <option>Train</option>
                                                                    <option>Air</option>
                                                                    <option>Sea</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="mb-3">
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                       
                                                        
                                                        <div class="col-lg-12">
                                                            <div class="tw-inline-checked mt-2 mb-3">
                                                                <div class="mb-4 form-check">
                                                                    <input type="checkbox" class="form-check-input" id="Fragile1">
                                                                    <label class="form-check-label" for="Fragile1">Fragile</label>
                                                                </div>

                                                                <div class="mb-4 form-check">
                                                                    <input type="checkbox" class="form-check-input" id="Express2">
                                                                    <label class="form-check-label" for="Express2">Express Delivery</label>
                                                                </div>

                                                                <div class="mb-4 form-check">
                                                                    <input type="checkbox" class="form-check-input" id="Insurance3">
                                                                    <label class="form-check-label" for="Insurance3">Insurance</label>
                                                                </div>

                                                                <div class="mb-4 form-check">
                                                                    <input type="checkbox" class="form-check-input" id="packaging4">
                                                                    <label class="form-check-label" for="packaging4">Packaging</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="tw-booking-footer">
                                                                <div class="tw-booking-footer-btn">
                                                                    <button type="submit" class="btn-half site-button">
                                                                        <span>Track & Trace</span><em></em>
                                                                    </button>
                                                                </div>
                                                                <span class="tw-booking-footer-text">Trace</span>
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
                </div>

            </div>  
            <!-- BOOKING SECTION END -->

            <!-- Estimation SECTION START -->
            <div class="section-full p-t120 site-bg-white  tw-estimation-area">
                        
                <div class="container">

                    <div class="wt-separator-two-part">
                        <div class="row wt-separator-two-part-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">
                                <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                    <div>Estimation</div>                                
                                    </div>
                                    <h2 class="wt-title">Has a wide range of solutions</h2>
                                    <p class="section-head-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since the  when an printer took.</p>
                                </div>                  
                                <!-- TITLE END-->
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                                <a href="about-1.html" class="btn-half site-button"><span>Read More</span><em></em></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tw-estimation-section bg-cover bg-no-repeat" style="background-image: url(images/background/bg-2.jpg);">
                    <div class="container">
                        <div class="row">
                            <!--1-->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="tw-est-section-block">
                                    <div class="tw-est-section-block-content">
                                        <span class="tw-est-section-number">01</span>
                                        <h3 class="tw-title">Solutions and specialized expertise</h3>
                                        <p>Our aim is to optimize and improve your supply chain so that we can give you the best service</p>
                                        <a href="about-1.html" class="site-button-2-outline"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--2-->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="tw-est-section-block">
                                    <div class="tw-est-section-block-content">
                                        <span class="tw-est-section-number">02</span>
                                        <h3 class="tw-title">Multiple warehouses</h3>
                                        <p>We provide multiple drop off and pickup locations so you don't have to worry. And you should not face any kind...</p>
                                        <a href="about-1.html" class="site-button-2-outline"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--3-->
                            <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="tw-est-section-block">
                                    <div class="tw-est-section-block-content">
                                        <span class="tw-est-section-number">03</span>
                                        <h3 class="tw-title">Tracking made easy</h3>
                                        <p>A tracking number for the entire process.
                                            so that you can find the exact position. it 
                                            will help you</p>
                                        <a href="about-1.html" class="site-button-2-outline"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>                  
               

            </div>   
            <!-- Estimation SECTION END -->

            <!-- TESTIMONIALS SECTION START -->
            <div class="section-full bg-cover p-t120 p-b90 bg-cover tw-testimonial-1-area" style="background-image:url(images/background/bg-6.jpg);">
                <div class="tw-testimonial-inner-wrap">
                    <div class="container">
                        <div class="row">

                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <div class="tw-client-logo-wrap">
                                    <!-- TITLE START-->
                                    <div class="section-head left wt-small-separator-outer">
                                        <div class="wt-small-separator site-text-primary">
                                            <div>Respected</div>
                                        </div>
                                        <h2 class="wt-title">Clients & partners</h2>
                                    </div>
                                    <!-- TITLE END-->
                                    <div class="tw-client-logo-inner">
                                        <ul>
                                            <li>
                                                <div class="logo-media">
                                                    <a href="services-1.html"><img src="@assets('images/client-logo/w1.png')" alt=""></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="logo-media">
                                                    <a href="services-1.html"><img src="@assets('images/client-logo/w2.png')" alt=""></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="logo-media">
                                                    <a href="services-1.html"><img src="@assets('images/client-logo/w3.png')" alt=""></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="logo-media">
                                                    <a href="services-1.html"><img src="@assets('images/client-logo/w4.png')" alt=""></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="logo-media">
                                                    <a href="services-1.html"><img src="@assets('images/client-logo/w5.png')" alt=""></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="logo-media">
                                                    <a href="services-1.html"><img src="@assets('images/client-logo/w6.png')" alt=""></a>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                        <div class="truck-img">
                                            <img src="@assets('images/truck.png')" alt="#">
                                        </div>
                                    </div>
                                </div>
                                <div class="tw-client-logo-bg"></div>
                            </div>

                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <div  class="tw-testimonial-border-outer">
                                    <div class="slider-vertical-wrap">
                                        <!-- THUMBNAILS -->
                                        <div class="slick-testimonials-thumbnails">
                                        
                                            <div class="slick-item">
                                                <div class="slick-testimonials-thumb">
                                                    <img src="@assets('images/testimonials/pic1.jpg')" alt="one">
                                                </div>
                                            </div>
                                            <div class="slick-item">
                                                <div class="slick-testimonials-thumb">
                                                    <img src="@assets('images/testimonials/pic2.jpg')" alt="two">
                                                </div>
                                            </div>
                                            <div class="slick-item">
                                                <div class="slick-testimonials-thumb">
                                                    <img src="@assets('images/testimonials/pic3.jpg')" alt="three">
                                                </div>
                                            </div>
                                            <div class="slick-item">
                                                <div class="slick-testimonials-thumb">
                                                    <img src="@assets('images/testimonials/pic4.jpg')" alt="four">
                                                </div>
                                            </div>                                    
                                        </div>                            
                                        <!-- MAIN SLIDES -->
                                        <div class="slick-testimonials-content">
                                            <div class="slick-item">
                                            <div class="tw-testimonials1-cell">
                                                    <div class="tw-testimonials1-text">
                                                        <span class="tw-testimonials1-quote"><img src="@assets('images/quote.png')" alt=""></span>
                                                        Nemo enim ipsam voluptate voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratio ne voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                                </div>
                                                    <div class="tw-testimonials1-name">Peter Len</div>
                                                    <div class="tw-testimonials1-postion">Web Designer</div>
                                                </div>
                                            </div>
                                            <div class="slick-item">
                                            <div class="tw-testimonials1-cell">
                                                    <div class="tw-testimonials1-text">
                                                        <span class="tw-testimonials1-quote"><img src="@assets('images/quote.png')" alt=""></span>
                                                        Nemo enim ipsam voluptate voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratio ne voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                                </div>
                                                    <div class="tw-testimonials1-name">Giselle</div>
                                                    <div class="tw-testimonials1-postion">Developer</div>
                                                </div>
                                            </div>
                                            <div class="slick-item">
                                            <div class="tw-testimonials1-cell">
                                                    <div class="tw-testimonials1-text">
                                                        <span class="tw-testimonials1-quote"><img src="@assets('images/quote.png')" alt=""></span>
                                                        Nemo enim ipsam voluptate voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratio ne voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                                </div>
                                                    <div class="tw-testimonials1-name">Josephine</div>
                                                    <div class="tw-testimonials1-postion">Web Designer</div>
                                                </div>
                                            </div>
                                            <div class="slick-item">
                                            <div class="tw-testimonials1-cell">
                                                    <div class="tw-testimonials1-text">
                                                        <span class="tw-testimonials1-quote"><img src="@assets('images/quote.png')" alt=""></span>
                                                        Nemo enim ipsam voluptate voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratio ne voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                                </div>
                                                    <div class="tw-testimonials1-name">Penelope</div>
                                                    <div class="tw-testimonials1-postion">Developer</div>
                                                </div>
                                            </div>                                    
                                        </div>
                                    </div>
                                    <div class="tw-testimonial-border"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>   
            </div>
            <!-- TESTIMONIALS  SECTION End --> 
            
            <!-- SERVICES SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-gray tw-service-gallery-style1-area tyre-mark-bg">
               
                <div class="services-gallery-block-outer2">
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
                            <div class="services-gallery-style1">
                                <div class="owl-carousel services-gallery-one owl-btn-bottom-center ">
                                
                                    <!-- COLUMNS 1 --> 
                                    <div class="item ">
                                        <div class="service-box-style1">
                                            <div class="service-content">
                                                <div class="service-content-inner">
                                                    <div class="service-content-top"> 
                                                        <h3 class="service-title-large"><a href="services-detail.html">Air Freight</a></h3>
                                                    </div>
                                                    <div class="service-content-bottom">
                                                        <span class="service-title-large-number">01</span>
                                                        <p>Our aim is to optimize and improve your supply chain so that we can give you the best service.</p>
                                                        <a href="services-detail.html" class="site-button-2">View Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-media">
                                                <img src="@assets('images/s-gallery/1.jpg')" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COLUMNS 2 --> 
                                    <div class="item ">
                                        <div class="service-box-style1">
                                            <div class="service-content">
                                                <div class="service-content-inner">
                                                    <div class="service-content-top"> 
                                                        <h3 class="service-title-large"><a href="services-detail.html">Road Freight</a></h3>
                                                    </div>
                                                    <div class="service-content-bottom">
                                                        <span class="service-title-large-number">02</span>
                                                        <p>Our aim is to optimize and improve your supply chain so that we can give you the best service.</p>
                                                        <a href="services-detail.html" class="site-button-2">View Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-media">
                                                <img src="@assets('images/s-gallery/2.jpg')" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- COLUMNS 3 --> 
                                    <div class="item ">
                                        <div class="service-box-style1">
                                            <div class="service-content">
                                                <div class="service-content-inner">
                                                    <div class="service-content-top"> 
                                                        <h3 class="service-title-large"><a href="services-detail.html">Ocean Freight</a></h3>
                                                    </div>
                                                    <div class="service-content-bottom">
                                                        <span class="service-title-large-number">03</span>
                                                        <p>Our aim is to optimize and improve your supply chain so that we can give you the best service.</p>
                                                        <a href="services-detail.html" class="site-button-2">View Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-media">
                                                <img src="@assets('images/s-gallery/3.jpg')" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- COLUMNS 4 --> 
                                    <div class="item ">
                                        <div class="service-box-style1">
                                            <div class="service-content">
                                                <div class="service-content-inner">
                                                    <div class="service-content-top"> 
                                                        <h3 class="service-title-large"><a href="services-detail.html">Rail Freight</a></h3>
                                                    </div>
                                                    <div class="service-content-bottom">
                                                        <span class="service-title-large-number">04</span>
                                                        <p>Our aim is to optimize and improve your supply chain so that we can give you the best service.</p>
                                                        <a href="services-detail.html" class="site-button-2">View Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-media">
                                                <img src="@assets('images/s-gallery/4.jpg')" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- COLUMNS 5 --> 
                                    <div class="item ">
                                        <div class="service-box-style1">
                                            <div class="service-content">
                                                <div class="service-content-inner">
                                                    <div class="service-content-top"> 
                                                        <h3 class="service-title-large"><a href="services-detail.html">Warehousing</a></h3>
                                                    </div>
                                                    <div class="service-content-bottom">
                                                        <span class="service-title-large-number">05</span>
                                                        <p>Our aim is to optimize and improve your supply chain so that we can give you the best service.</p>
                                                        <a href="services-detail.html" class="site-button-2">View Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-media">
                                                <img src="@assets('images/s-gallery/5.jpg')" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- COLUMNS 6 --> 
                                    <div class="item ">
                                        <div class="service-box-style1">
                                            <div class="service-content">
                                                <div class="service-content-inner">
                                                    <div class="service-content-top"> 
                                                        <h3 class="service-title-large"><a href="services-detail.html">Project Cargo</a></h3>
                                                    </div>
                                                    <div class="service-content-bottom">
                                                        <span class="service-title-large-number">06</span>
                                                        <p>Our aim is to optimize and improve your supply chain so that we can give you the best service.</p>
                                                        <a href="services-detail.html" class="site-button-2">View Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-media">
                                                <img src="@assets('images/s-gallery/6.jpg')" alt="">
                                            </div>
                                        </div>
                                    </div>
                                               
                            
                                </div>
                            </div>
                        </div>                              
                    </div>
                </div>

                <div class="tw-hilite-text-wrap">
                    <div class="tw-hilite-text right">
                        <span>Services</span>
                    </div>
                </div>
                
            </div>
            <!-- SERVICES SECTION END -->

            <!-- COMPANY APPROCH SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-white tw-company-approch-area">
                        
                <div class="container">

                    <div class="wt-separator-two-part">
                        <div class="row wt-separator-two-part-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">
                                <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                    <div>Company Approch</div>                                
                                    </div>
                                    <h2 class="wt-title">Reliable Logistic & Transport Solutions</h2>
                                </div>                  
                                <!-- TITLE END-->
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                                <a href="about-1.html" class="btn-half site-button"><span>Read More</span><em></em></a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="tw-company-approch-section">
                        <div class="tw-company-approch-inner">
                            <div class="tw-company-years">
                                <div class="light">
                                    <h1>35</h1>
                                   <img src="@assets('images/text-bg.jpg')" alt="">
                                </div>
                                <div class="tw-company-info">
                                    <span>Year’s of experience in transport and logistics services</span>
                                </div>
                            </div>

                            <div class="row">

                                <!--block 1-->
                                <div class="col-lg-4 col-md-12">
                                    <div class="counter-outer-two">
                                        <div class="tw-counter-media">
                                            <img src="@assets('images/icons/c-pic1.png')" alt="">
                                        </div>
                                        <div class="icon-content">
                                            <div class="tw-count-number site-text-primary"><span class="counter site-text-primary">195</span>+</div>
                                            <h3 class="icon-content-info">Professional Staff</h3>
                                        </div>
                                    </div>
                                </div>

                                <!--block 2-->
                                <div class="col-lg-4 col-md-12">
                                    <div class="counter-outer-two">
                                        <div class="tw-counter-media">
                                            <img src="@assets('images/icons/c-pic2.png')" alt="">
                                        </div>
                                        <div class="icon-content">
                                            <div class="tw-count-number site-text-primary"><span class="counter site-text-primary">250</span>+</div>
                                            <h3 class="icon-content-info">On Time Delievery</h3>
                                        </div>
                                    </div>
                                </div>

                                <!--block 3-->
                                <div class="col-lg-4 col-md-12">
                                    <div class="counter-outer-two">
                                        <div class="tw-counter-media">
                                            <img src="@assets('images/icons/c-pic3.png')" alt="">
                                        </div>
                                        <div class="icon-content">
                                            <div class="tw-count-number site-text-primary"><span class="counter site-text-primary">350</span>+</div>
                                            <h3 class="icon-content-info">Technology and Media</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>                 
                </div>

            </div>   
            <!-- COMPANY APPROCH SECTION END --> 

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
            <div class="section-full  tw-project-1-wrap tw-project-1-wrap-bg site-bg-white">
                <!-- IMAGE CAROUSEL START -->
                <div class="section-content">
                  
                    <div class="container">
                        <div class="tw-project-1-content">
                            <div class="tw-project-1-content-position">
                                <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div>Projects</div>
                                    </div>
                                    <h2>Featured Projects</h2>
                                </div>
                                <!-- TITLE END-->
                                <div class="owl-carousel project-carousel  owl-btn-bottom-left">
                                    <!-- COLUMNS 1 --> 
                                    <div class="item">
                                        <div class="project-new-2">
                                            <div class="wt-img-effect">
                                                <img src="@assets('images/project/1.jpg')" alt="">
                                                <div class="project-view">
                                                    <a class="elem pic-long project-view-btn" href="images/project/1.jpg" title="Nh-16 Highway Bridge" 
                                                    data-lcl-txt="" data-lcl-author="" data-lcl-thumb="images/project/1.jpg">
                                                    <i class="fa fa-search-plus"></i>     
                                                    </a> 
                                                </div> 
                                            </div>
                                            <div class="project-new-content">
                                                <span class="project-new-category">Warehousing , Distrbution</span>	
                                                <h4 class="wt-title"><a href="services-detail.html">Warehouse inventory</a></h4>
                                                <a href="services-detail.html" class="site-button-h-align">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 2 --> 
                                    <div class="item">
                                        <div class="project-new-2">
                                            <div class="wt-img-effect">
                                                <img src="@assets('images/project/2.jpg')" alt="">
                                                <div class="project-view">
                                                    <a class="elem pic-long project-view-btn" href="images/project/2.jpg" title="Nh-16 Highway Bridge" 
                                                    data-lcl-txt="" data-lcl-author="" data-lcl-thumb="images/project/2.jpg">
                                                    <i class="fa fa-search-plus"></i>     
                                                    </a> 
                                                </div> 
                                            </div>
                                            <div class="project-new-content">
                                                <span class="project-new-category">Logistics, Analytics</span>	
                                                <h4 class="wt-title"><a href="services-detail.html">Minimize Manufacturing</a></h4>
                                                <a href="services-detail.html" class="site-button-h-align">Read More</a>
                                            </div>
                                        </div>
                                    </div>                    
                                    <!-- COLUMNS 3 --> 
                                    <div class="item">
                                        <div class="project-new-2">
                                            <div class="wt-img-effect">
                                                <img src="@assets('images/project/3.jpg')" alt="">
                                                <div class="project-view">
                                                    <a class="elem pic-long project-view-btn" href="images/project/3.jpg" title="Nh-16 Highway Bridge" 
                                                    data-lcl-txt="" data-lcl-author="" data-lcl-thumb="images/project/3.jpg">
                                                    <i class="fa fa-search-plus"></i>     
                                                    </a> 
                                                </div> 
                                            </div>
                                            <div class="project-new-content">
                                                <span class="project-new-category">Warehousing , Distrbution</span>	
                                                <h4 class="wt-title"><a href="services-detail.html">Warehouse inventory</a></h4>
                                                <a href="services-detail.html" class="site-button-h-align">Read More</a>
                                            </div>
                                        </div>
                                    </div> 
                                                      

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>   
            <!-- LATEST PRJECTS SLIDER END --> 

        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="footer-dark">

            <!-- NEWS LETTER SECTION START -->
            <div class="ftr-nw-ltr site-bg-white">
                
                    <div class="ftr-nw-ltr-inner site-bg-primary">
                        <div class="container">
                            <div class="ftr-nw-img">
                                <img src="@assets('images/news-l-bg.png')" alt="">
                            </div>
                            <div class="ftr-nw-content">
                                <div class="ftr-nw-title">Subscribe for offers and news</div>
                                <div class="ftr-nw-form">
                                    <form>
                                        <input name="news-letter" class="form-control" placeholder="Enter Your Email" type="text">
                                        <button class="ftr-nw-subcribe-btn">Subscribe Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- NEWS LETTER SECTION END -->

            <div class="ftr-bg"  style="background-image: url(images/f-bg.jpg);">
                <!-- FOOTER BLOCKES START -->  
                <div class="footer-top">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                
                                <div class="widget widget_about">
                                    <div class="logo-footer clearfix">
                                        <a href="index.html"><img src="@assets('images/logo-dark.png')" alt=""></a>
                                    </div>
                                    <p>Many desktop publishing packages and web page editors now use are dolra Ipsum as their default .</p>
                                    <ul class="social-icons">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube-play"></a></li>
                                    </ul>
                                </div>                            
                                
                            </div>                        
                        
                            <div class="col-lg-3 col-md-6">
                                <div class="widget widget_services ftr-list-center">
                                    <h3 class="widget-title">Quick Links</h3>
                                    <ul>
                                        <li><a href="about-1.html">About</a></li>
                                        <li><a href="services-1.html">Services</a></li>
                                        <li><a href="blog-grid.html">Blog</a></li>
                                        <li><a href="about-1.html">FAQ</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="widget widget_services ftr-list-center">
                                    <h3 class="widget-title">Services</h3>
                                    <ul>
                                        <li><a href="services-detail.html">Warehouse</a></li>
                                        <li><a href="services-detail.html">Air Freight</a></li>
                                        <li><a href="services-detail.html">Ocean Freight</a></li>
                                        <li><a href="services-detail.html">Road Freight</a></li>
                                        <li><a href="services-detail.html">Packaging</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">  
                                <div class="widget widget_services ftr-list-center">
                                    <h3 class="widget-title">Community</h3>
                                    <ul>
                                        <li><a href="about-1.html">Business Consulting</a></li>
                                        <li><a href="about-1.html">Testimonials</a></li>
                                        <li><a href="about-1.html">Track Your Shipment</a></li>
                                        <li><a href="about-1.html">Privacy Policy</a></li>
                                        <li><a href="about-1.html">Terms & Condition</a></li>
                                    </ul>
                                </div>
                            </div> 

                        </div>

                    </div>
                </div>
                <!-- FOOTER COPYRIGHT -->
                                    
                <div class="footer-bottom">
                    <div class="container">
                        <div class="footer-bottom-info">
                        
                            <div class="footer-copy-right">
                                <span class="copyrights-text">Copyright © 2022 by thewebmax All Rights Reserved.</span>
                            </div>
                            
                        </div>
                    </div>   
                </div>
            </div>
    
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

 	</div>



<!-- JAVASCRIPT  FILES ========================================= --> 
<script src="@assets('js/jquery-3.6.0.min.js')"></script><!-- JQUERY.MIN JS -->
<script src="@assets('js/popper.min.js')"></script><!-- POPPER.MIN JS -->
<script src="@assets('js/bootstrap.min.js')"></script><!-- BOOTSTRAP.MIN JS -->
<script src="@assets('js/magnific-popup.min.js')"></script><!-- MAGNIFIC-POPUP JS -->
<script src="@assets('js/waypoints.min.js')"></script><!-- WAYPOINTS JS -->
<script src="@assets('js/counterup.min.js')"></script><!-- COUNTERUP JS -->
<script src="@assets('js/waypoints-sticky.min.js')"></script><!-- STICKY HEADER -->
<script src="@assets('js/isotope.pkgd.min.js')"></script><!-- MASONRY  -->
<script src="@assets('js/imagesloaded.pkgd.min.js')"></script><!-- MASONRY  -->
<script src="@assets('js/owl.carousel.min.js')"></script><!-- OWL  SLIDER  -->
<script src="@assets('js/slick.min.js')"></script><!-- SLICK  Slider  -->
<script src="@assets('js/theia-sticky-sidebar.js')"></script><!-- STICKY SIDEBAR  -->
<script src="@assets('js/jquery.bootstrap-touchspin.js')"></script><!-- FORM JS -->
<script src="@assets('js/lc_lightbox.lite.js')" ></script><!-- IMAGE POPUP -->
<script src="@assets('js/bootstrap-slider.min.js')"></script><!-- Form js -->
<script src="@assets('js/swiper-bundle.min.js')"></script><!-- Swiper js -->
<script src="@assets('js/jquery.bgscroll.js')"></script><!-- BACKGROUND SCROLL -->
<script src="@assets('js/custom.js')"></script><!-- CUSTOM FUCTIONS  -->
<script src="@assets('js/main.js')"></script><!-- CUSTOM FUCTIONS  -->

</body>

</html>
