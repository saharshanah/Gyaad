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
    <link rel="icon" href="{{url('frontend/ar/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{url('frontend/ar/images/favicon.png')}}" />
    
    <!-- PAGE TITLE HERE -->
    <title>Contruction-New</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="{{url('frontend/ar/js/html5shiv.min.js')}}"></script>
        <script src="{{url('frontend/ar/js/respond.min.js')}}"></script>
	<![endif] -->
    
    <!-- BOOTSTRAP STYLE SHEET -->

    <link rel="stylesheet" type="text/css" href="{{url('frontend/ar/css/bootstrap-rtl.min.css')}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/ar/css/fontawesome/css/font-awesome.min.css')}}" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/ar/css/flaticon.min.css')}}">
    <!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="{{url('frontend/ar/css/animate.min.css')}}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/ar/css/owl.carousel.min.css')}}">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/ar/css/bootstrap-select.min.css')}}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/ar/css/magnific-popup.min.css')}}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/ar/css/loader.min.css')}}">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/ar/css/style.css')}}">
    <!-- RTL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/ar/css/rtl.css')}}">    
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{url('frontend/ar/css/skin/skin-1.css')}}">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/ar/css/custom.css')}}">
    

    
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/ar/plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/ar/plugins/revolution/revolution/css/navigation.css')}}">
    
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=maidan" />    
</head>

<body>

	<div class="page-wraper"> 
       	
        <!-- HEADER START -->
        @include('frontend.ar.layouts.header')
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content">
        @yield('content')    
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        @include('frontend.ar.layouts.footer')
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop" ><i class=" fa fa-arrow-up"></i></button>
        
    </div>
 



<!-- JAVASCRIPT  FILES ========================================= --> 
<script   src="{{url('frontend/ar/js/jquery-1.12.4.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script   src="{{url('frontend/ar/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->

<script   src="{{url('frontend/ar/js/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script   src="{{url('frontend/ar/js/jquery.bootstrap-touchspin.min.js')}}"></script><!-- FORM JS -->

<script   src="{{url('frontend/ar/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->

<script   src="{{url('frontend/ar/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script   src="{{url('frontend/ar/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script   src="{{url('frontend/ar/js/waypoints-sticky.min.js')}}"></script><!-- COUNTERUP JS -->

<script  src="{{url('frontend/ar/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->

<script   src="{{url('frontend/ar/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->

<script   src="{{url('frontend/ar/js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   --> 
<script   src="{{url('frontend/ar/js/scrolla.min.js')}}"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script   src="{{url('frontend/ar/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script   src="{{url('frontend/ar/js/shortcode.js')}}"></script><!-- SHORTCODE FUCTIONS  -->

 

<!-- REVOLUTION JS FILES -->
<script  src="{{url('frontend/ar/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script  src="{{url('frontend/ar/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
<script  src="{{url('frontend/ar/plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script >

    var tpj = jQuery;
    var revapi1014;
	
    tpj(document).ready(function() {
        if (tpj("#rev_slider_1014_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1014_1");
        } else {
            revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "hermes",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">title</div>	</div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        }
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%",
                    presize: false
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1240, 1240, 800],
                gridheight: [700, 700, 700, 700],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                    type: "mouse",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>






 


</body>

</html>
