@extends('landing-page.layouts.main')
@section('title', 'Privacy Policy')

@section('page-content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
        <div class="overlay-main site-bg-sky opacity-08"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Privacy Policy</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    
        <!-- Faq Section -->
        <div class="section-full p-t120 p-b90 tw-faq-area">
        <div class="container">

            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div>Privacy Policy</div>                                
                </div>
                <h2 class="wt-title">Our Privacy Policy</h2>
            </div>                  
            <!-- TITLE END-->

            <div class="section-content text-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, impedit facere corporis, praesentium sapiente exercitationem possimus nihil assumenda provident saepe error culpa distinctio nemo odio eaque. Sint eum minus, optio architecto fugiat commodi placeat, doloribus unde labore cumque iusto quam laborum veniam ipsam iure ex et voluptas quaerat molestiae aspernatur illum velit rerum. Nemo doloremque in quis quo amet, repellat, ducimus eos eum nobis inventore consectetur, nihil similique eveniet tenetur neque quaerat? Aspernatur officiis quam nulla eligendi, officia totam dolorum possimus. Voluptas reiciendis minus officiis odit sunt quos facilis iure aspernatur doloribus dolorum eum soluta, fugiat veritatis ad corrupti veniam!</p>
            </div>
        </div>
    </div>
    <!-- Faq Categories End -->
@endsection