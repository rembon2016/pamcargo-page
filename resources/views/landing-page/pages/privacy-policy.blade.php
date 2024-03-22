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
                <h2 class="wt-title">Data Protection Declaration</h2>
            </div>                  
            <!-- TITLE END-->

            <div class="section-content text-center">
                <p>
                    PAM INTERNATIONAL (LLC) would like to point out that personal data is stored exclusively within the framework of the execution of the contract and with the receipt of the order. We are entitled to process and use the inventory data of our customers insofar as this is necessary for advising the customers, for the execution of the contract and for the demand-oriented design of services. Upon request, the customer will be provided at any time with complete and free information about the stored data, insofar as it concerns him, and the storage can be objected to at any time. The collection, processing and use of personal data is carried out exclusively in compliance with the applicable data protection regulations (EU GDPR and German DSGVO).
                </p>
            </div>
        </div>
    </div>
    <!-- Faq Categories End -->
@endsection