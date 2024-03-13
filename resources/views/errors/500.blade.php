@extends('landing-page.layouts.master')

@section('title', '500')
@section('content')

    <!-- CONTENT START -->
    <div class="page-content">

        <!-- Error SECTION START -->
        <div class="error-full-page bg-cover overlay-wraper bg-image-moving2" style="background-image:url(@assets('images/main-slider/slider3/bg-large3.jpg'))">
            <div class="overlay-main bg-sky-blue opacity-07"></div>
            <div class="container">
                <div class="error-full-page-inner">
                    <div class="error-full-page-inner-info">
                        <div class="row">
                            
                            <div class="col-lg-6 col-md-12">
                                <h3 class="title-style-2">Error 500</h3>
                                <strong>Uh oh!</strong>
                                <h4 class="title-style-2">
                                    Something Went Wrong
                                </h4>
                                <p>We’re sorry but we can’t seem to find the page you requested. This might be because you have typed the web address incorrectly.</p>
                                <a href="{{ route('index') }}" class="btn-half site-button"><span>Back To Home</span><em></em></a>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="error-media">
                                    <img src="@assets('images/main-slider/slider3/plane.png')" class="slide-top" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <!-- Error  SECTION END --> 
        

    </div>
    <!-- CONTENT END -->
@endsection