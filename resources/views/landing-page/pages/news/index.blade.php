@extends('landing-page.layouts.main')
@section('title', 'News')

@section('page-content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(@assets('images/banner/1.jpg'));">
        <div class="overlay-main site-bg-sky opacity-08"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">News</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.html">Home</a></li>
                            <li>News</li>
                        </ul>
                    </div>
                
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->


    <!-- OUR BLOG START -->
    <div class="section-full p-t120  p-b90 site-bg-white">
        

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">

                    <div class="masonry-wrap row d-flex">
                        <!--Block one-->
                        <div class="masonry-item col-lg-6 col-md-12 m-b30">

                            <div class="blog-post blog-post-4-outer">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{ route('news.detail') }}"><img src="@assets('images/blog/latest/bg1.jpg')" alt=""></a>
                                </div>                                    
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><span>02</span>Aug</li>
                                        </ul>
                                    </div>
                                                                    
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="{{ route('news.detail') }}">At the end of the day, going forward, a 
                                            new normal that has evolved from.</a></h3>
                                    </div>
                                    <div class="wt-post-text ">
                                        <p>
                                            New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                        </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                        <a href="{{ route('news.detail') }}" class="site-button-link site-text-primary">Read More</a>
                                    </div>                                        
                                </div>                                
                            </div>

                        </div>
                        
                        <!--Block two-->
                        <div class="masonry-item col-lg-6 col-md-12 m-b30">
                            
                            <div class="blog-post blog-post-4-outer">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{ route('news.detail') }}"><img src="@assets('images/blog/latest-2/l-1.jpg')" alt=""></a>
                                </div>                                     
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><span>08</span> Aug</li>
                                        </ul>
                                    </div>
                                                                        
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="{{ route('news.detail') }}">How all this mistaken idea of denouncing
                                            pleasure and praising pain was.</a></h3>
                                    </div>
                                    <div class="wt-post-text ">
                                        <p>
                                            New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                        </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                        <a href="{{ route('news.detail') }}" class="site-button-link site-text-primary">Read More</a>
                                    </div>                                        
                                </div>                                
                            </div>

                        </div>
                        
                        <!--Block three-->
                        <div class="masonry-item col-lg-6 col-md-12 m-b30">
                            
                            <div class="blog-post blog-post-4-outer">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{ route('news.detail') }}"><img src="@assets('images/blog/latest/bg2.jpg')" alt=""></a>
                                </div>                                     
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><span>21</span> Aug</li>
                                        </ul>
                                    </div>
                                                                    
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="{{ route('news.detail') }}">Going forward, a new normal that has 
                                            evolved from generation.</a></h3>
                                    </div>
                                    <div class="wt-post-text ">
                                        <p>
                                            New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                        </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                        <a href="{{ route('news.detail') }}" class="site-button-link site-text-primary">Read More</a>
                                    </div>
                                </div>                                
                            </div>
                                
                        </div>
                        
                            <!--Block Four-->
                        <div class="masonry-item col-lg-6 col-md-12 m-b30">

                            <div class="blog-post blog-post-4-outer">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{ route('news.detail') }}"><img src="@assets('images/blog/latest-2/l-2.jpg')" alt=""></a>
                                </div>                                    
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><span>02</span>Aug</li>
                                        </ul>
                                    </div>
                                                                    
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="{{ route('news.detail') }}">At the end of the day, going forward, a
                                            new normal that has evolved from.</a></h3>
                                    </div>
                                    <div class="wt-post-text ">
                                        <p>
                                            New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                        </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                        <a href="{{ route('news.detail') }}" class="site-button-link site-text-primary">Read More</a>
                                    </div>                                        
                                </div>                                
                            </div>

                        </div>
                        
                        <!--Block Five-->
                        <div class="masonry-item col-lg-6 col-md-12 m-b30">
                            
                            <div class="blog-post blog-post-4-outer">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{ route('news.detail') }}"><img src="@assets('images/blog/latest/bg3.jpg')" alt=""></a>
                                </div>                                     
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><span>08</span> Aug</li>
                                        </ul>
                                    </div>
                                                                        
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="{{ route('news.detail') }}">How all this mistaken idea denouncing pleasure and praising pain was.</a></h3>
                                    </div>
                                    <div class="wt-post-text ">
                                        <p>
                                            New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                        </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                        <a href="{{ route('news.detail') }}" class="site-button-link site-text-primary">Read More</a>
                                    </div>                                        
                                </div>                                
                            </div>

                        </div>
                        
                        <!--Block Six-->
                        <div class="masonry-item col-lg-6 col-md-12 m-b30">
                            
                            <div class="blog-post blog-post-4-outer">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{ route('news.detail') }}"><img src="@assets('images/blog/latest-2/l-3.jpg')" alt=""></a>
                                </div>                                     
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><span>21</span> Aug</li>
                                        </ul>
                                    </div>
                                                                    
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="{{ route('news.detail') }}">Going forward, a new normal that has 
                                            evolved from generation.</a></h3>
                                    </div>
                                    <div class="wt-post-text ">
                                        <p>
                                            New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                        </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                        <a href="{{ route('news.detail') }}" class="site-button-link site-text-primary">Read More</a>
                                    </div>
                                </div>                                
                            </div>

                        </div>

                        <!--Block Seven-->
                        <div class="masonry-item col-lg-6 col-md-12 m-b30">
                            
                            <div class="blog-post blog-no-image">
                                <div class="wt-post-info">
                                    <div class="post-date"><span>02</span> Aug</div>
                                    <div class="wt-post-title ">
                                        <h3 class="post-title">
                                            <a href="{{ route('news.detail') }}">Go beyond logistics, make the world go round and revolutionize</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="wt-post-text ">
                                    <p>New chip traps clusters of migrating are tumor cells  asperiortenetur, blanditiis odit.</p>
                                </div>
                                <div class="wt-post-readmore ">
                                    <a href="{{ route('news.detail') }}" class="site-button-link site-text-white">Read More</a>
                                </div>
                                <span class="qt-light"><img src="images/quote-white.png" alt="#"></span>
                            </div>

                        </div>
                                                    
                    </div>

                    <div class="pagination-outer">
                        <div class="pagination-style1">
                            <ul class="clearfix">
                                <li class="prev"><a href="javascript:;"><span> <i class="fa fa-angle-double-left"></i> </span></a></li>
                                <li><a href="javascript:;">1</a></li>
                                <li class="active"><a href="javascript:;">2</a></li>
                                <li><a href="javascript:;">3</a></li>
                                <li><a class="javascript:;" href="javascript:;"><i class="fa fa-ellipsis-h"></i></a></li>
                                <li><a href="javascript:;">5</a></li>
                                <li class="next"><a href="javascript:;"><span> <i class="fa fa-angle-double-right"></i> </span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 rightSidebar side-bar">
                    {{-- <div class="widget search-bx">
                                                                    
                        <form role="search" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <button class="btn" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                            
                    </div> --}}

                    <div class="widget all_services_list">
                        <h4 class="section-head-small mb-4">Categories</h4> 
                        <div class="all_services m-b30">
                            <ul>
                                <li><a href="{{ route('news.index') }}">Land Transport</a></li>
                                <li><a href="{{ route('news.index') }}" class="active">Ocean Freight</a></li>
                                <li><a href="{{ route('news.index') }}">Strategy Tips</a></li>
                                <li><a href="{{ route('news.index') }}">Air Transport</a></li>
                                <li><a href="{{ route('news.index') }}">Warehousing</a></li>
                                <li><a href="{{ route('news.index') }}">Trade Advisory</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget recent-posts-entry">
                        <h4 class="section-head-small mb-4">Popular Post</h4>
                        <div class="section-content">
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="wt-post-media">
                                        <img src="@assets('images/blog/recent-blog/pic')1.jpg" alt="">
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <span class="post-date">January 08, 2022</span>
                                            <span class="post-title"> 
                                                <a href="{{ route('news.detail') }}">Equipment you can count on. People you can trust.</a>
                                            </span>
                                        </div>                                                    
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="wt-post-media">
                                        <img src="@assets('images/blog/recent-blog/pic')2.jpg" alt="">
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <span class="post-date">January 12, 2022</span>
                                            <span class="post-title">
                                                <a href="{{ route('news.detail') }}">Advanced Service Functions by Air Transport</a>
                                            </span>
                                        </div>                                                    
                                    </div>
                                </div>

                                <div class="widget-post clearfix">
                                    <div class="wt-post-media">
                                        <img src="@assets('images/blog/recent-blog/pic')3.jpg" alt="">
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <span class="post-date">January 16, 2022</span>
                                            <span class="post-title">
                                                <a href="{{ route('news.detail') }}">Proper arrangement for keeping the goods in the warehouse</a>
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
                                        <a class="elem" href="@assets('images/gallery/thumb/pic1.jpg')" title="Title 1" data-lcl-author="" data-lcl-thumb="@assets('images/gallery/thumb/pic1.jpg')">
                                            <img src="@assets('images/gallery/thumb/pic1.jpg')" alt="">
                                            <i class="fa fa-file-image-o"></i>     
                                        </a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tw-service-gallery-thumb">
                                        <a class="elem" href="@assets('images/gallery/thumb/pic2.jpg')" title="Title 2" data-lcl-author="" data-lcl-thumb="@assets('images/gallery/thumb/pic2.jpg')">
                                            <img src="@assets('images/gallery/thumb/pic2.jpg')" alt="">
                                            <i class="fa fa-file-image-o"></i>     
                                        </a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tw-service-gallery-thumb ">
                                        <a class="elem" href="@assets('images/gallery/thumb/pic3.jpg')" title="Title 3"  data-lcl-author="" data-lcl-thumb="@assets('images/gallery/thumb/pic3.jpg')">
                                            <img src="@assets('images/gallery/thumb/pic3.jpg')" alt="">
                                            <i class="fa fa-file-image-o"></i>     
                                        </a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tw-service-gallery-thumb">
                                        <a class="elem" href="@assets('images/gallery/thumb/pic4.jpg')" title="Title 4"  data-lcl-author="" data-lcl-thumb="@assets('images/gallery/thumb/pic4.jpg')">
                                            <img src="@assets('images/gallery/thumb/pic4.jpg')" alt="">
                                            <i class="fa fa-file-image-o"></i>     
                                        </a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tw-service-gallery-thumb">
                                        <a class="elem" href="@assets('images/gallery/thumb/pic5.jpg')" title="Title 5"  data-lcl-author="" data-lcl-thumb="@assets('images/gallery/thumb/pic5.jpg')">
                                            <img src="@assets('images/gallery/thumb/pic5.jpg')" alt="">
                                            <i class="fa fa-file-image-o"></i>     
                                        </a>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="tw-service-gallery-thumb">
                                        <a class="elem" href="@assets('images/gallery/thumb/pic6.jpg')" title="Title 6"  data-lcl-author="" data-lcl-thumb="@assets('images/gallery/thumb/pic6.jpg')">
                                            <img src="@assets('images/gallery/thumb/pic2.jpg')" alt="">
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
                            <a href="{{ route('news.index') }}">Logistics</a>
                            <a href="{{ route('news.index') }}">Company </a>
                            <a href="{{ route('news.index') }}">Business</a>                                            
                            <a href="{{ route('news.index') }}">Cargo </a>
                            <a href="{{ route('news.index') }}">Trucks</a>
                            <a href="{{ route('news.index') }}">Delivery vans</a>
                            <a href="{{ route('news.index') }}">Warehouse</a>
                            <a href="{{ route('news.index') }}">Ocean</a>
                            <a href="{{ route('news.index') }}">Transports</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <!-- OUR BLOG END -->
@endsection