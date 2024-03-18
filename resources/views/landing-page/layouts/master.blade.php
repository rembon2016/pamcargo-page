<!DOCTYPE html>
<html lang="en">

<head>
	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>{{ config('app.name') }} - @yield('title')</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/bootstrap.min.css')" />
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/font-awesome.min.css')" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/owl.carousel.min.css')">
    <!-- SLICK CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/slick.min.css')">
    <!-- SLICK CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/slick-theme.css')">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/magnific-popup.min.css')">
    <!-- SWIPER SLIDER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/swiper-bundle.min.css')" />
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/style.css')">
    <!-- Lc light box popup -->
    <link rel="stylesheet" href="@assets('css/lc_lightbox.css')" />     
    <!-- Price Range Slider -->
    <link rel="stylesheet" href="@assets('css/bootstrap-slider.min.css')" />
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="@assets('css/custom.css')">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="@assets('plugins/revolution/revolution/css/settings.css')">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="@assets('plugins/revolution/revolution/css/navigation.css')">
    
    @stack('head')
</head>

<body>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div id="outer-barG">
            <div id="front-barG" class="bar-animationG">
                <div id="barG_1" class="bar-lineG"></div>
                <div id="barG_2" class="bar-lineG"></div>
                <div id="barG_3" class="bar-lineG"></div>
            </div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

	<div class="page-wraper">
      
        <!-- CONTENT START -->
        @yield('content')
        <!-- CONTENT END -->

 	</div>



<!-- JAVASCRIPT  FILES ========================================= --> 
<script src="@assets('js/jquery-3.6.0.min.js')"></script><!-- JQUERY.MIN JS -->
<script src="@assets('js/popper.min.js')"></script><!-- POPPER.MIN JS -->
<script src="@assets('js/bootstrap.min.js')"></script><!-- BOOTSTRAP.MIN JS -->
<script src="@assets('js/magnific-popup.min.js')"></script><!-- MAGNIFIC-POPUP JS -->
<script src="@assets('js/waypoints.min.js')"></script><!-- WAYPOINTS JS -->
<script src="@assets('js/counterup.min.js')"></script><!-- COUNTERUP JS -->
<script src="@assets('js/waypoints-sticky.min.js')"></script><!-- STICKY HEADER -->
<script src="@assets('js/isotope.pkgd.min.js')"></script><!-- MASONRY  -->
<script src="@assets('js/imagesloaded.pkgd.min.js')"></script><!-- MASONRY  -->
<script src="@assets('js/owl.carousel.min.js')"></script><!-- OWL  SLIDER  -->
<script src="@assets('js/slick.min.js')"></script><!-- SLICK  Slider  -->
<script src="@assets('js/theia-sticky-sidebar.js')"></script><!-- STICKY SIDEBAR  -->
<script src="@assets('js/jquery.bootstrap-touchspin.js')"></script><!-- FORM JS -->
<script src="@assets('js/lc_lightbox.lite.js')" ></script><!-- IMAGE POPUP -->
<script src="@assets('js/bootstrap-slider.min.js')"></script><!-- Form js -->
<script src="@assets('js/swiper-bundle.min.js')"></script><!-- Swiper js -->
<script src="@assets('js/jquery.bgscroll.js')"></script><!-- BACKGROUND SCROLL -->
<script src="@assets('js/custom.js')"></script><!-- CUSTOM FUCTIONS  -->
<script src="@assets('js/main.js')"></script><!-- CUSTOM FUCTIONS  -->

<!-- REVOLUTION JS FILES -->

<script src="@assets('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')"></script>
<script src="@assets('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script src="@assets('plugins/revolution/revolution/js/extensions/revolution-plugin.js')"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script src="@assets('js/rev-script-1.js')"></script>

@stack('script')

</body>

</html>
