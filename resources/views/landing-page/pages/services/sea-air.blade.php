@extends('landing-page.layouts.main')
@section('title', 'Sea Air Service')

@section('page-content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
        <div class="overlay-main site-bg-sky opacity-08"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Sea Air Service</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2 wt-breadcrumb-white">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Sea Air Service</li>
                        </ul>
                    </div>
                
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->         

    <!-- SERVICE DETAIL SECTION START -->
    <div class="section-full p-t120 p-b90 bg-white">
        
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="service-full-info">
                        <div class="services-etc m-b30">
                            <div class="service-category-title">
                                <div class="service-category-media me-3">
                                    <img src="@assets('images/icons/pic3.png')" alt="#">
                                </div>
                                <h2>Sea Air Service</h2>
                            </div>

                            <div class="wt-media">
                                <video class="w-100 shadow-sm" controls>
                                    <source src="@assets('videos/sea-air.mp4')" type="video/mp4">
                                </video>
                            </div>                                        
                            
                            <div class="mb-5">
                                <h2 class="wt-title mt-4 mb-4">
                                    Our Sea-Air Service: Perfect combination of Cost-Efficient Sea Freight and Fast Air Freight
                                </h2>
                                <p>
                                    PAM CARGO, as one of the pioneers of Sea-Air service, offers smart solutions - the perfect combination to reduce your freight costs, transit times and CO2 emissions sustainably. They are suitable for almost any type of goods.
                                </p>
                            </div>

                            <div class="mb-5">
                                <h2 class="wt-title mt-4 mb-4">
                                    Our Sea-Air Processes: Lean and Transparent
                                </h2>
                                <p>
                                    We use the eco-friendly sea freight for the first part of the journey from Asia to Dubai or Singapore. In Dubai or Singapore we take care of the seamless transshipment from the seaport to the airport. From there the next plane takes the goods directly to the destination country in Europe, Africa or America. After ground handlings and customs clearance are accomplished we ensure prompt delivery to destination place.
                                </p>
                            </div>

                            <div class="mb-5">
                                <h2 class="wt-title mt-4 mb-4">Our Sea-Air Processes: Offers a Number of Benefits</h2>
                                <div class="row align-items-stretch">
                                    <div class="col-md-3">
                                        <div class="card card-process h-100 text-center">
                                            <div class="card-img">
                                                <img src="@assets('images/icons/pic2.png')" class="object-contain-center" style="width: 25%" alt="">
                                            </div>
                                            <div class="card-body">
                                                <h3>Sea Freight</h3>
                                                <p class="mb-0">From Asia to Dubai/Singapore</p>
                                            </div>
                                            <div class="card-footer">
                                                <h3>Benefit</h3>
                                                <p class="mb-0">Cost effective and eco-friendly</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card card-process h-100 text-center">
                                            <div class="card-img">
                                                <img src="@assets('images/icons/pic2.png')" class="object-contain-center" style="width: 25%" alt="">
                                            </div>
                                            <div class="card-body">
                                                <h3>Transshipment</h3>
                                                <p class="mb-0">at the Port of Dubai/Singapore</p>
                                            </div>
                                            <div class="card-footer">
                                                <h3>Benefit</h3>
                                                <p class="mb-0">Geographical position and free port</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card card-process h-100 text-center">
                                            <div class="card-img">
                                                <img src="@assets('images/icons/pic3.png')" class="object-contain-center" style="width: 25%" alt="">
                                            </div>
                                            <div class="card-body">
                                                <h3>Air Freight</h3>
                                                <p class="mb-0">From Dubai/Singapore to the Receiving Port</p>
                                            </div>
                                            <div class="card-footer">
                                                <h3>Benefit</h3>
                                                <p class="mb-0">Fast and daily departures</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card card-process h-100 text-center">
                                            <div class="card-img">
                                                <img src="@assets('images/icons/pic2.png')" class="object-contain-center" style="width: 25%" alt="">
                                            </div>
                                            <div class="card-body">
                                                <h3>Truck</h3>
                                                <p class="mb-0">To the consignee after customs clearance</p>
                                            </div>
                                            <div class="card-footer">
                                                <h3>Benefit</h3>
                                                <p class="mb-0">Punctual and fixed scheduling</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- <h2 class="wt-title mt-4 mb-4">Book other services</h2>
                            <div class="book-other-services site-bg-sky-blue-light p-5">
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
                                                        <span>Send Request</span><em></em>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>

                                </form>
                            </div> --}}
                            
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-4 col-md-12 rightSidebar side-bar">
                    <div class="widget search-bx">
                                                                    
                        <form role="search" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <button class="btn" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                            
                    </div>

                    <div class="widget all_services_list">
                        <h4 class="section-head-small mb-4">Transport Services</h4> 
                        <div class="all_services m-b30">
                            <ul>
                                <li><a href="services-1.html">Land Transport</a></li>
                                <li><a href="services-1.html" class="active">Ocean Freight</a></li>
                                <li><a href="services-1.html">Strategy Tips</a></li>
                                <li><a href="services-1.html">Air Transport</a></li>
                                <li><a href="services-1.html">Warehousing</a></li>
                                <li><a href="services-1.html">Trade Advisory</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget recent-posts-entry">
                        <h4 class="section-head-small mb-4">Popular Post</h4>
                        <div class="section-content">
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="wt-post-media">
                                        <img src="images/blog/recent-blog/pic1.jpg" alt="">
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <span class="post-date">January 08, 2022</span>
                                            <span class="post-title"> 
                                                <a href="services-1.html">Equipment you can count on. People you can trust.</a>
                                            </span>
                                        </div>                                                    
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="wt-post-media">
                                        <img src="images/blog/recent-blog/pic2.jpg" alt="">
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <span class="post-date">January 12, 2022</span>
                                            <span class="post-title">
                                                <a href="services-1.html">Advanced Service Functions by Air Transport</a>
                                            </span>
                                        </div>                                                    
                                    </div>
                                </div>

                                <div class="widget-post clearfix">
                                    <div class="wt-post-media">
                                        <img src="images/blog/recent-blog/pic3.jpg" alt="">
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <span class="post-date">January 16, 2022</span>
                                            <span class="post-title">
                                                <a href="services-1.html">Proper arrangement for keeping the goods in the warehouse</a>
                                            </span>
                                        </div>                                                    
                                    </div>
                                </div>
                                        
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="widget tw-sidebar-gallery-wrap">
                        <h4 class="section-head-small mb-4">Gallery</h4> 
                        <div class="tw-sidebar-gallery">
                            <ul>
                                <li>
                                    <div class="tw-service-gallery-thumb">
                                        <a class="elem" href="images/gallery/thumb/pic1.jpg" title="Title 1" data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic1.jpg">
                                            <img src="images/gallery/thumb/pic1.jpg" alt="">
                                            <i class="fa fa-file-image-o"></i>     
                                        </a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tw-service-gallery-thumb">
                                        <a class="elem" href="images/gallery/thumb/pic2.jpg" title="Title 2" data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic2.jpg">
                                            <img src="images/gallery/thumb/pic2.jpg" alt="">
                                            <i class="fa fa-file-image-o"></i>     
                                        </a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tw-service-gallery-thumb ">
                                        <a class="elem" href="images/gallery/thumb/pic3.jpg" title="Title 3"  data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic3.jpg">
                                            <img src="images/gallery/thumb/pic3.jpg" alt="">
                                            <i class="fa fa-file-image-o"></i>     
                                        </a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tw-service-gallery-thumb">
                                        <a class="elem" href="images/gallery/thumb/pic4.jpg" title="Title 4"  data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic4.jpg">
                                            <img src="images/gallery/thumb/pic4.jpg" alt="">
                                            <i class="fa fa-file-image-o"></i>     
                                        </a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tw-service-gallery-thumb">
                                        <a class="elem" href="images/gallery/thumb/pic5.jpg" title="Title 5"  data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic5.jpg">
                                            <img src="images/gallery/thumb/pic5.jpg" alt="">
                                            <i class="fa fa-file-image-o"></i>     
                                        </a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tw-service-gallery-thumb">
                                        <a class="elem" href="images/gallery/thumb/pic6.jpg" title="Title 6"  data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic6.jpg">
                                            <img src="images/gallery/thumb/pic2.jpg" alt="">
                                            <i class="fa fa-file-image-o"></i>     
                                        </a>
                                    </div>
                                </li>
                                
                            </ul>

                        </div>
                    </div> 

                    <div class="widget tw-sidebar-tags-wrap">
                        <h4 class="section-head-small mb-4">All Tags</h4>
                        
                        <div class="tagcloud">
                            <a href="javascript:void(0)">Logistics</a>
                            <a href="javascript:void(0)">Company </a>
                            <a href="javascript:void(0)">Business</a>                                            
                            <a href="javascript:void(0)">Cargo </a>
                            <a href="javascript:void(0)">Trucks</a>
                            <a href="javascript:void(0)">Delivery vans</a>
                            <a href="javascript:void(0)">Warehouse</a>
                            <a href="javascript:void(0)">Ocean</a>
                            <a href="javascript:void(0)">Transports</a>
                        </div>
                    </div>

                    <div class="widget tw-contact-bg-section">
                        <h4 class="section-head-small mb-4">Any Emergency?</h4> 
                        <div class="tw-contact-bg-inner" style="background-image: url(images/background/bg-4.jpg);">
                            <div class="section-top">
                                <span>Call Our 24/7 Customer Support</span>
                                <h3 class="tw-con-number"><a href="tel:+9(465)3212055"> +9 (465) 321 20 55</a></h3>
                            </div>
                            <div class="section-bot">
                                <ul>
                                <li>
                                    <span><img src="images/icons/map-marker.png" alt=""></span>
                                    <p>121 King Street Maxvilla , Tx USA </p>
                                </li>
                                <li>
                                    <span><img src="images/icons/map-marker.png" alt=""></span>
                                    <p>themaxhelp@gmail.com</p>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div> --}}
                
            </div>                            
        </div>                                 
        
    </div>   
    <!-- SERVICE DETAIL SECTION END --> 
@endsection