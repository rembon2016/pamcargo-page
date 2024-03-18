
<!-- FOOTER START -->
<footer class="footer-dark">

    <div class="ftr-bg">
        <!-- FOOTER BLOCKES START -->  
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        
                        <div class="widget widget_about">
                            <div class="logo-footer clearfix">
                                <a href="{{ route('home') }}">
                                    <img src="@assets('images/logo/pamcargo-logo.png')" alt="Pamcargo Logo">
                                </a>
                            </div>
                            <p>Many desktop publishing packages and web page editors now use are dolra Ipsum as their default .</p>
                            <ul class="social-icons">
                                <li><a href="https://www.linkedin.com/company/pam-cargo/" class="fa fa-linkedin" target="_blank"></a></li>
                                <li><a href="https://www.instagram.com/pam_cargo/" class="fa fa-instagram" target="_blank"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            </ul>
                        </div>                            
                        
                    </div>                        
                
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_services ftr-list-center">
                            <h3 class="widget-title">Quick Links</h3>
                            <ul>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="services-1.html">Rate Request</a></li>
                                <li><a href="blog-grid.html">News</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_services ftr-list-center">
                            <h3 class="widget-title">Services</h3>
                            <ul>
                                <li><a href="services-detail.html">Sea Air</a></li>
                                <li><a href="services-detail.html">Land Air</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">  
                        <div class="widget widget_services ftr-list-center">
                            <h3 class="widget-title">Other</h3>
                            <ul>
                                <li><a href="about-1.html">FAQ</a></li>
                                <li><a href="about-1.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div> 

                </div>

            </div>
        </div>
        <!-- FOOTER COPYRIGHT -->
                            
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-info">
                
                    <div class="footer-copy-right">
                        <span class="copyrights-text">Copyright © {{ now()->year }}, All Right Reserved by <span class="site-text-primary">{{ config('app.name') }}</span>.</span>
                    </div>
                    
                </div>
            </div>   
        </div>
    </div>

</footer>
<!-- FOOTER END -->