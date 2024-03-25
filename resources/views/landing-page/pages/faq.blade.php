@extends('landing-page.layouts.main')
@section('title', 'FAQ')

@section('page-content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
        <div class="overlay-main site-bg-sky opacity-08"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">FAQ</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="{{ route("home") }}">Home</a></li>
                            <li>FAQ</li>
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
                    <div>FAQ's</div>                                
                </div>
                <h2 class="wt-title">Frequently Ask Questions?</h2>
                <p class="section-head-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since the  when an printer took.</p>
            </div>                  
            <!-- TITLE END-->

            <div class="section-content">
                <div class="tw-faq-section">
                    <div class="accordion tw-faq" id="sf-faq-accordion">
                        <!--One-->
                        <div class="accordion-item">

                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ1" aria-expanded="false" >
                                What is GTA in transport?
                            </button>

                            <div id="FAQ1" class="accordion-collapse collapse" data-bs-parent="#sf-faq-accordion">
                                <div class="accordion-body">
                                A digital interface the person causing the movement of goods uploads the relevant information prior to the commencement of movement of goods and generates e-way bill on the GST portal. Best service are provide us. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                </div>
                            </div>

                        </div>

                        <!--Two-->
                        <div class="accordion-item">
                        
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ2" aria-expanded="false">
                                Is lorry receipt mandatory?
                            </button>

                            <div id="FAQ2" class="accordion-collapse collapse"  data-bs-parent="#sf-faq-accordion">
                                <div class="accordion-body">
                                    A digital interface the person causing the movement of goods uploads the relevant information prior to the commencement of movement of goods and generates e-way bill on the GST portal. Best service are provide us. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                </div>
                            </div>

                        </div>

                        <!--Three-->
                        <div class="accordion-item">
                            
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ3" aria-expanded="false">
                                What are e-way bills?
                            </button>

                            <div id="FAQ3" class="accordion-collapse collapse"  data-bs-parent="#sf-faq-accordion">
                                <div class="accordion-body">
                                    A digital interface the person causing the movement of goods uploads the relevant information prior to the commencement of movement of goods and generates e-way bill on the GST portal. Best service are provide us. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                </div>
                            </div>
                        </div>

                        <!--Four-->
                        <div class="accordion-item">
                            
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ4" aria-expanded="false">
                                Can we take input on transportation?
                            </button>

                            <div id="FAQ4" class="accordion-collapse collapse"  data-bs-parent="#sf-faq-accordion">
                                <div class="accordion-body">
                                    A digital interface the person causing the movement of goods uploads the relevant information prior to the commencement of movement of goods and generates e-way bill on the GST portal. Best service are provide us. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                </div>
                            </div>
                        </div>

                        <!--Five-->
                        <div class="accordion-item">
                            
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ5" aria-expanded="false">
                                What is unique number in e way Bill?
                            </button>

                            <div id="FAQ5" class="accordion-collapse collapse"  data-bs-parent="#sf-faq-accordion">
                                <div class="accordion-body">
                                    A digital interface the person causing the movement of goods uploads the relevant information prior to the commencement of movement of goods and generates e-way bill on the GST portal. Best service are provide us. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                </div>
                            </div>
                        </div>

                        <!--Six-->
                        <div class="accordion-item">
                            
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ6" aria-expanded="false">
                                What is consignee copy?
                            </button>

                            <div id="FAQ6" class="accordion-collapse collapse"  data-bs-parent="#sf-faq-accordion">
                                <div class="accordion-body">
                                    A digital interface the person causing the movement of goods uploads the relevant information prior to the commencement of movement of goods and generates e-way bill on the GST portal. Best service are provide us. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq Categories End -->
@endsection