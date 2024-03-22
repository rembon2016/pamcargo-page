@extends('landing-page.layouts.main')
@section('title', 'Detail News')

@section('page-content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(@assets('images/banner/1.jpg'));">
        <div class="overlay-main site-bg-sky opacity-08"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Detail News</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.html">Home</a></li>
                            <li>Detail News</li>
                        </ul>
                    </div>
                
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->



    <!-- OUR BLOG START -->
    <div class="section-full  p-t120 p-b90 bg-white">
        <div class="container">
        
            <!-- BLOG SECTION START -->
            <div class="section-content">
                <div class="row d-flex justify-content-center">
                
                    <div class="col-lg-8 col-md-12">
                        <!-- BLOG START -->
                        <div class="blog-post-single-outer">
                            <div class="blog-post-single bg-white">                                    

                                <div class="wt-post-info">
                    
                                    <div class="wt-post-media m-b30">
                                        <img src="@assets('images/blog/blog-single/1.jpg')" alt="">
                                    </div>
                                    
                                    <div class="wt-post-title ">
                                        <div class="wt-post-meta-list">
                                            <div class="wt-list-content post-date">February 08, 2022</div>
                                            <div class="wt-list-content post-comment">Comment 20</div>
                                            <div class="wt-list-content post-view">Views 250</div>
                                        </div> 
                                        <h3 class="post-title">Go beyond logistics, make the world go round and  revolutionize business.</h3>
                                        
                                    </div>
                                    
                                    <div class="wt-post-discription">

                                        <p>
                                            But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, expound actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounte  consequences that are extremely painful. Nor again is there anyone.
                                        </p>
                                        
                                        <p>
                                            Master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because pleasure, but because those who do not know how to pursue pleasure rationally encounterconsequences that are extremely painful. Nor again is there anyone.
                                        </p>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="one-column1 mb-3">
                                                    <div class="wt-media">
                                                        <img src="@assets('images/blog/blog-single/thumb/pic1.jpg')" alt="" class="img-responsive">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="one-column2 mb-3">
                                                    <div class="wt-media">
                                                        <img src="@assets('images/blog/blog-single/thumb/pic2.jpg')" alt="" class="img-responsive">
                                                    </div>
                                                </div>
                                            </div>
    
                                        </div>

                                        <p>
                                            No one rejects, dislikes, or avoids pleasure itself, because pleasure, but because those who do not know how to pursue. ho do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
                                        </p>
                                        
                                    </div> 
                                    

                                    <div class="post-single-list">
                                        <ul class="description-list">
                                            <li>
                                                <i class="fa fa-angle-right"></i>
                                                Go beyond logistics, make the world go round and revolutionize business.
                                            </li>
                                            <li>
                                                <i class="fa fa-angle-right"></i>
                                                Imagination what we can easily see is only a small percentage of what is possible.
                                            </li>
                                            <li>
                                                <i class="fa fa-angle-right"></i>
                                                Quality never goes out of style. safety, quality, professionalism.
                                            </li>
                                            <li>
                                                <i class="fa fa-angle-right"></i>
                                                Logistics through innovation, dedication, and technology. ready, set, done.
                                            </li>
                                            <li>
                                                <i class="fa fa-angle-right"></i>
                                                We take pride in serving our customers safely. together with passion.
                                            </li>
                                            <li>
                                                <i class="fa fa-angle-right"></i>
                                                The quality shows in every move we make where business lives.
                                            </li>
                                        </ul>
                                        
                                    </div>
                                    
                                    <div class="wt-post-discription">
                                        <blockquote>
                                            <img src="@assets('images/quote-dark.png')" alt="#">
                                            <p>Laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. nemo
                                                enim ipsam voluptatem quia voluptas.
                                            </p>
                                        </blockquote>
                                    </div> 
                                    
                                </div>

                                

                            </div>

                            <div class="post-area-tags-wrap">
                                <div class="row">
                                    <div class="col-lg-7 col-md-12">
                                        <div class="tw-sidebar-tags-wrap">
                                            <h4 class="section-head-small mb-4">Releted Tags</h4>
                                            <div class="tagcloud">
                                                <a href="{{ route('news.index') }}">Logistics</a>
                                                <a href="{{ route('news.index') }}">Company </a>
                                                <a href="{{ route('news.index') }}">Business</a>                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12">
                                        <div class="post-social-icons-wrap">
                                            <h4 class="section-head-small mb-4">Post Share</h4>
                                            <ul class="post-social-icons">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-youtube-play"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="post-navigation m-t30">
                                <div class="post-nav-links">
                                    <div class="post-nav-item nav-post-prev">
                                        <div class="nav-post-arrow"> 
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                        </div>
                                        <div class="nav-post-meta"> 
                                            <label>Prev Post</label> 
                                            <a href="javascript:;">The wise man therefore always holds in these matters to this principle</a>
                                        </div>
                                    </div>
                                    <div class="post-nav-item nav-post-next">
                                        <div class="nav-post-arrow"> 
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                        <div class="nav-post-meta"> 
                                            <label>Next Post</label> 
                                            <a href="javascript:;">Rejects pleasures to secure other greater pleasures</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                

                            <div class="clear" id="comment-list">
                                <div class="comments-area" id="comments">
                                    <h3 class="section-head-small mb-4">02 Comments</h3>
                                    <div>
                                        <!-- COMMENT LIST START -->
                                        <ol class="comment-list">
                                            <li class="comment">
                                                <!-- COMMENT BLOCK -->
                                                <div class="comment-body">

                                                    <div class="comment-author">
                                                        <img class="avatar photo" src="@assets('images/testimonials/pic1.jpg')" alt="">
                                                        <div class="comment-meta">
                                                            <a href="javascript:void(0);">08 Jan 2022</a>
                                                        </div>
                                                    </div>
                                                    <div class="comment-info">                                                
                                                        <cite class="fn">Rosalina Kelian</cite>
                                                        <div class="reply">
                                                            <a href="javscript:;" class="comment-reply-link">Reply</a>
                                                        </div>                                        
                                                        <p>No one rejects, dislikes, or avoids pleasure itself, because pleasure, but 
                                                            because those who do not know how to pursue. ho do not know how to pursue 
                                                            pleasure rationally encounter consequences.
                                                        </p>
                                                    </div>

                                                </div>
                                                <!-- SUB COMMENT BLOCK -->
                                                <ol class="children">
                                                    <li class="comment odd parent">
                                                    
                                                        <div class="comment-body">

                                                            <div class="comment-author">
                                                                <img class="avatar photo" src="@assets('images/testimonials/pic2.jpg')" alt="">
                                                                <div class="comment-meta">
                                                                    <a href="javascript:void(0);">16 Jan 2022</a>
                                                                </div> 
                                                                
                                                            </div> 
                                                            <div class="comment-info">  
                                                                <cite class="fn">Fumio</cite>

                                                                <div class="reply">
                                                                    <a href="javscript:;" class="comment-reply-link">Reply</a>
                                                                </div>

                                                                <p>Minim veniam, quis nostrud exercitation ullamco lab lorem
                                                                ipsum dolor sit amet consectetur oris nisi ut aliquip ex ea
                                                                commodo consequat.
                                                                </p>
                                                            </div>

                                                        </div>                                                        
                                                        
                                                    </li>
                                                </ol>
                                            </li>
                                                                                        
                                        </ol>
                                        <!-- COMMENT LIST END -->
                                        
                                        <!-- LEAVE A REPLY START -->
                                        <div class="comment-respond m-t30" id="respond">
            
                                            <h2 class="comment-reply-title section-head-small mb-4" id="reply-title">Leave a comment
                                                <small>
                                                    <a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a>
                                                </small>
                                            </h2>
            
                                            <form class="comment-form" id="commentform" method="post">
                                                <div class="row">
                                                    <div class="comment-form-author col-md-6 mb-3">
                                                        <label>Name <span class="required">*</span></label>
                                                        <input class="form-control" type="text" value="" name="user-comment" placeholder="Author" id="author">
                                                    </div>
                                                    
                                                    <div class="comment-form-email col-md-6 mb-3">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input class="form-control" type="text" value="" name="email" placeholder="Email">
                                                    </div>
                                                                                                        
                                                    <div class="comment-form-comment col-md-12 mb-4">
                                                        <label>Comment</label>
                                                        <textarea class="form-control" rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
                                                    </div>
                                                    
                                                    <div class="form-submit">
                                                        <button type="submit" class="btn-half site-button"><span>Submit</span><em></em></button>
                                                    </div>
                                                </div>
                                                
                                            </form>
            
                                        </div>
                                        <!-- LEAVE A REPLY END -->
                                </div>
                                </div>
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
                                            <img src="@assets('images/blog/recent-blog/pic1.jpg')" alt="">
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
                                            <img src="@assets('images/blog/recent-blog/pic2.jpg')" alt="">
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
                                            <img src="@assets('images/blog/recent-blog/pic3.jpg')" alt="">
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
                                            <a class="elem" href="@assets('images/gallery/thumb/pic1.jpg')" title="Title 1"  data-lcl-author="" data-lcl-thumb="@assets('images/gallery/thumb/pic1.jpg')">
                                                <img src="@assets('images/gallery/thumb/pic1.jpg')" alt="">
                                                <i class="fa fa-file-image-o"></i>     
                                            </a>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="tw-service-gallery-thumb">
                                            <a class="elem" href="@assets('images/gallery/thumb/pic2.jpg')" title="Title 2"  data-lcl-author="" data-lcl-thumb="@assets('images/gallery/thumb/pic2.jpg')">
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
        
    </div>   
    <!-- OUR BLOG END -->   
@endsection