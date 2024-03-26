<!-- HEADER START -->
<header class="site-header header-style-3 mobile-sider-drawer-menu">

    <div class="sticky-header main-bar-wraper  navbar-expand-lg">
        <div class="main-bar">  
                            
            <div class="container clearfix"> 
        
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="{{ route('home') }}">
                            <img src="@assets('images/logo/pamcargo-logo.png')" alt="Pamcargo Logo">
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
                <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-end">
                    
                    <ul class=" nav navbar-nav">
                        {{-- <li class="has-child"><a href="javascript:;">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home-1</a></li>
                                <li><a href="index-2.html">Home-2</a></li>
                                <li><a href="index-3.html">Home-3</a></li>
                                <li><a href="index-4.html">Home-4</a></li>
                            </ul>                                                                 
                        </li> --}}
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">About</a>
                        </li>
                        <li class="has-child"><a href="javascript:;">Services</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('sea-air') }}">Sea Air Service</a></li>
                                <li><a href="{{ route('land-air') }}">Land Air Service</a></li>
                            </ul>                                                                 
                        </li>
                        <li>
                            <a href="{{ route('rate-request') }}">Rate Request</a>
                        </li>
                        <li>
                            <a href="{{ route('office') }}">Offices</a>
                        </li>
                        <li>
                            <a href="{{ route('news.index') }}">News</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>

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