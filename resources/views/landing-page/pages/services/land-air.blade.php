@extends('landing-page.layouts.main')
@section('title', 'Land Air Service')

@section('page-content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
        <div class="overlay-main site-bg-sky opacity-08"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Land Air Service</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2 wt-breadcrumb-white">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Land Air Service</li>
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
                                <h2>Land Air Service</h2>
                            </div>

                            <div class="wt-media">
                                <video class="w-100 shadow-sm" controls>
                                    <source src="@assets('videos/sea-air.mp4')" type="video/mp4">
                                </video>
                            </div>                                        
                            
                            <div class="mb-5">
                                <h2 class="wt-title mt-4 mb-4">
                                    Our Land-Air service: Cost-Efficient and Time-Efficient alternative to direct flights from South-East Asia to Europe
                                </h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nostrum repellat quod rem vel reiciendis saepe, aut magni deleniti facilis veritatis a incidunt harum. Et totam aut suscipit modi corrupti sed quisquam ipsum maxime a ad quam consectetur saepe, cupiditate magnam labore provident debitis cum repellendus obcaecati! Accusantium, eligendi enim tempore cupiditate omnis magni? Iusto, alias cumque similique suscipit aliquam magnam porro. Voluptatem recusandae repudiandae assumenda. Deserunt tempora deleniti impedit, ullam dolorum, distinctio corporis nemo perspiciatis facere magnam suscipit cum dolor quibusdam officiis odio omnis saepe enim provident dolore quidem accusantium blanditiis culpa. Atque provident minus alias? Non, inventore ab!
                                </p>
                            </div>

                            <div class="mb-5">
                                <h2 class="wt-title mt-4 mb-4">
                                    Current Challenge
                                </h2>
                                <p>
                                    Cost and time efficiency are crucial for every company in international business to sustainably secure its own supply chain, ability to deliver and market positioning. Especially in volatile market situation, adaptable and flexible action is required.
                                </p>
                            </div>

                            <div class="mb-5">
                                <h2 class="wt-title mt-4 mb-4">
                                    Our Solution
                                </h2>
                                <p>
                                    PAM CARGO offers a volume and time efficient transport alternative to direct flights from Cambodia and Myanmar to Europe - our Land-Air service. Our Land-Air service combines cost-efficient land transport with shorter transit time of air freight to make your supply chains even more effective and flexible - tailor-made to your specific logistics requirements. With competitive prices, individual solution models and high adherence to schedules, we bring your freight to the desired destination - best possible to achieve your business goals. Our management and team have many years of competence and experience in supply chain management - reliable experts at your side.
                                </p>
                            </div>

                            <div class="mb-5">
                                <h2 class="wt-title mt-4 mb-4">
                                    Your benefits
                                </h2>

                                <div class="row gap-y-10">
                                    <div class="col-md-4">
                                        <div class="benefit-card">
                                            <h3 class="benefit-number">
                                                01
                                            </h3>
                                            <p class="benefit-description mb-0">
                                                High Speed and Fast Service
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="benefit-card">
                                            <h3 class="benefit-number">
                                                02
                                            </h3>
                                            <p class="benefit-description mb-0">
                                                Quality of Service
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="benefit-card">
                                            <h3 class="benefit-number">
                                                03
                                            </h3>
                                            <p class="benefit-description mb-0">
                                                High Standard of Security
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="benefit-card">
                                            <h3 class="benefit-number">
                                                04
                                            </h3>
                                            <p class="benefit-description mb-0">
                                                Competitive Pricing
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="benefit-card">
                                            <h3 class="benefit-number">
                                                05
                                            </h3>
                                            <p class="benefit-description mb-0">
                                                Flexible
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="benefit-card">
                                            <h3 class="benefit-number">
                                                06
                                            </h3>
                                            <p class="benefit-description mb-0">
                                                Versatile
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5">
                                <h2 class="wt-title mt-4 mb-4">
                                    Our Land-Air: Operational Process
                                </h2>
                                <img src="@assets('images/services/land-air-operational-process.jpeg')" class="w-100" alt="{{ config('app.name') }} - Land Air Operational Process">
                            </div>

                            <div class="mb-5">
                                <h2 class="wt-title mt-4 mb-4">
                                    Our Land-Air: Trade Lanes and Transit Times
                                </h2>
                                <img src="@assets('images/services/land-air-trade-lanes.jpeg')" class="w-100" alt="{{ config('app.name') }} - Land Air Operational Process">
                            </div>
                            
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