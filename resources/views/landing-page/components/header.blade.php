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