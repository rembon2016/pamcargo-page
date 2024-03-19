@extends('landing-page.layouts.main')
@section('title', 'Rate Request')

@section('page-content')


    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
        <div class="overlay-main site-bg-sky opacity-08"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Rate Request</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Rate Request</li>
                        </ul>
                    </div>
                
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <div class="section-full p-t120 p-b120">   
        <div class="section-content">
            <div class="container">

                <div class="contact-one">
                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer mb-4 text-center">
                        <h2 class="wt-title mb-2">Rate Request – Quick, Easy and Competitive</h2>
                        <p class="mb-0">
                            You need a freight rate from us quickly? Write us and you will receive our offer shortly.
                        </p>
                    </div>
                    <!-- TITLE END--> 

                    <!-- CONTACT FORM-->
                    <div class="contact-one-inner">
                        <div class="row">

                            <div class="col-md-12">
                                <form  class="cons-contact-form d-flex flex-column gap-y-10" method="post" action="form-handler2.php">
                                    <div class="contact-form-outer site-bg-sky-blue-light">
                                        <h3 class="mb-4">Contact Information</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="name" type="text" required class="form-control" placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="company_name" type="text" required class="form-control" placeholder="Company Name">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="company_phone" type="text" class="form-control" required placeholder="Company Phone">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="company_country" type="text" class="form-control" required placeholder="Company Country">
                                                </div>
                                            </div>
                                
                                        </div>
                                    </div>

                                    <div class="contact-form-outer site-bg-sky-blue-light">
                                        <h3 class="mb-4">Shipment Information</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="incoterm" type="text" required class="form-control" placeholder="Incoterm">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="volume" type="text" required class="form-control" placeholder="Volume">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="weight" type="text" class="form-control" required placeholder="Weight">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="Comodity" type="text" class="form-control" required placeholder="Comodity">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="contact-form-outer site-bg-sky-blue-light">
                                        <h3 class="mb-4">Measurement</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="width" type="text" required class="form-control" placeholder="Width">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="length" type="text" required class="form-control" placeholder="Length">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="height" type="text" class="form-control" required placeholder="Height">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="pieces" type="text" class="form-control" required placeholder="Pieces">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="contact-form-outer site-bg-sky-blue-light">
                                        <h3 class="mb-4">Route</h3>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <input name="origin" type="text" required class="form-control" placeholder="Origin">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <input name="destination" type="text" required class="form-control" placeholder="Destination">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input name="via" type="text" class="form-control" required placeholder="Via">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="contact-form-outer site-bg-sky-blue-light">
                                        <h3 class="mb-4">Misc.</h3>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="ready_date" class="form-label">Ready Date</label>
                                                    <input name="ready_date" type="date" required class="form-control" placeholder="Ready Date">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="delivery_address" class="form-label">Delivery Address</label>
                                                    <input name="delivery_address" id="delivery_address" type="text" required class="form-control" placeholder="Delivery Address">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="remark" class="form-label">Remark</label>
                                                    <textarea name="remark" class="form-control" rows="3" placeholder="Remark" id="remark" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12 w-full d-flex justify-content-end">
                                        <button type="submit" class="btn-half site-button">
                                            <span>Submit Now</span>
                                            <em></em>
                                        </button>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
@endsection