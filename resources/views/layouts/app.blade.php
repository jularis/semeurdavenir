<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo setting('site.MetaDescription') ?? ''; ?>" /> 
<meta name="Robots" CONTENT="All">
<meta name="keywords" content="<?php echo setting('site.MetaKeywords') ?? ''; ?>" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="<?php echo setting('site.google-site-verification')?? ''; ?>" /> 
<title><?php echo setting('site.title')?? ''; ?> | @yield('title')</title>
      <!--Favicon-->
      <link rel="icon" type="image/x-icon" href="{{ asset('storage/app/public/'.setting('site.LogoFavicon')) }}"> 
    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/font-awesome.min.css') }}">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/simple-line-icons.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/themify-icons.css') }}">
    <!-- Owl Slider -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/owl.theme.default.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/magnific-popup.css') }}">
	 <!-- Revolution Slider -->
	 <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
	 <!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/rs-plugin/css/settings.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/rs-plugin/css/home-2/rs6.css') }}">
	<!-- Color Panel -->
    <link href="{{ asset('public/assets/css/color_panel.css') }}" rel="stylesheet" type="text/css" /> 
    <link rel="stylesheet" href="{{ asset('public/assets/css/color-schemes/orange.css') }}" id="changeable-colors"> 
    <link rel="stylesheet" href="{{ asset('public/lightgallery/css/lightgallery.min.css') }}" /> 
	<!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}" class="main-style">
        <!-- jQuery Lib -->
        <script src="{{ asset('public/js/jquery.min.js') }}"></script> 
        <script src="{{ asset('public/js/jquery.validate.js') }}"></script>
        <script src="{{ asset('public/js/messages_fr.js') }}"></script>
    <style>	#rev_slider_6_1_wrapper .tp-loader.spinner1{ background-color: #FFFFFF !important; } </style>
	<style>.rs-layer.Concept-Content a,.rs-layer.Concept-Content a:visited{color:#fff !important; border-bottom:1px solid #fff !important; font-weight:700 !important}.rs-layer.Concept-Content a:hover{border-bottom:1px solid transparent !important}.rs-layer.Concept-Content-Dark a,.rs-layer.Concept-Content-Dark a:visited{color:#000 !important; border-bottom:1px solid #000 !important; font-weight:700 !important}.rs-layer.Concept-Content-Dark a:hover{border-bottom:1px solid transparent !important}@media only screen and (max-width:575px){rs-layer.res-slide-btn{padding:7px 16px !important;  font-size:13px !important}}#rev_slider_2_1_wrapper .uranus.tparrows{width:50px; height:50px; background:rgba(255,255,255,0)}#rev_slider_2_1_wrapper .uranus.tparrows:before{width:50px; height:50px; line-height:50px; font-size:40px; transition:all 0.3s;-webkit-transition:all 0.3s}#rev_slider_2_1_wrapper .uranus.tparrows.rs-touchhover:before{opacity:0.75}</style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo setting('site.google_analytics_tracking_id'); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo setting('site.google_analytics_tracking_id'); ?>');
</script>
</head>
<!--Body Start-->
<body data-res-from="1025">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.11&appId=<?php echo setting('site.FacebookAppID'); ?>';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!--Page Loader-->
	<div class="page-loader"></div>
    <!--Zmm Wrapper-->
    <div class="zmm-wrapper">
        <a href="#" class="zmm-close close"></a>
        <div class="zmm-inner bg-white typo-dark">
            <div class="text-center mobile-logo-part margin-bottom-30">
                 <a href="{{ url('') }}" class="img-before"><img src="{{ asset('storage/app/public/'.setting('site.logo')) }}" class="img-fluid changeable-dark" width="170" height="51" alt="Logo"></a>
            </div>
            <div class="zmm-main-nav">
            </div>      
        </div>
    </div>
    <!-- Overlay Search -->
  
    <!-- Main wrapper-->
    <div class="page-wrapper">
        <div class="page-wrapper-inner">
            @include('layouts.header')
            <!-- header -->
@yield('content')
        </div>
        <!-- .page-wrapper-inner -->
    </div>
    <!--page-wrapper-->

    <!-- Footer -->
    <footer id="footer" class="footer footer-1 footer-bg-img" data-bg="{{ asset('public/assets/images/bg/footer-bg.jpg') }}">
        <!--Footer Widgets Columns Posibilities 4-->
        <div class="footer-widgets">
            <div class="footer-middle-wrap footer-overlay-dark">
				<div class="color-overlay"></div>
                <div class="container">
                    <div class="row">
                         <div class="col-lg-12 widget text-widget">
							<div class="footer-logo mb-4">
								 <a href="index.html" class="logo-general"><img src="{{ asset('storage/app/public/'.setting('site.logoBlanc')) }}" id="changeable-light" class="img-fluid" width="166" height="50" alt="Logo"></a>
                            </div>
                            <!-- Text -->
                            <div class="footer-text text-center">
								<p>Envoyez-nous votre demande de prière ou votre témoignage de louange par message ou par e-mail à <a claas="theme-color" href="mailto:{{setting('site.ContactEmail')}}">{{setting('site.ContactEmail')}}</a></p>
							</div>
							<div class="img-gallery margin-top-20">
								
							</div>
							<div class="copyright-section margin-top-20">
								<ul class="footer-bottom-items text-center">
									<li class="nav-item">
										<div class="nav-item-inner">
                                        <p class="copyright"><?php echo setting('site.Copyright'); ?> <a href="<?php echo setting('site.UrlConcepteur'); ?>">JBK Technologies</a></p>

										</div>
									</li>
								</ul>
							</div>	
                        </div>						
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer --> 

    <!-- Bootstrap Js -->
    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Easing Js -->
    <script src="{{ asset('public/assets/js/jquery.easing.min.js') }}"></script>
    <!-- Carousel Js Code -->
    <script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Isotope Js -->
    <script src="{{ asset('public/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Magnific Popup Js -->
    <script src="{{ asset('public/assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- Day Counter Js -->
    <script src="{{ asset('public/assets/js/jquery.countdown.min.js') }}"></script>
	<!-- Circle Progress Js -->
    <script src="{{ asset('public/assets/js/jquery.circle.progress.min.js') }}"></script>
	<!-- Validator Js -->
    <script src="{{ asset('public/assets/js/validator.min.js') }}"></script>
    <!-- Smart Resize Js -->
    <script src="{{ asset('public/assets/js/smartresize.min.js') }}"></script>
    <!-- Appear Js -->
    <script src="{{ asset('public/assets/js/jquery.appear.min.js') }}"></script>
    <!-- Theme Custom Js -->
   
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>
	<!-- REVOLUTION JS FILES -->
	<script src="{{ asset('public/assets/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('public/assets/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script src="{{ asset('public/assets/rs-plugin/js/home-2/rbtools.min.js') }}"></script>
	<script src="{{ asset('public/assets/rs-plugin/js/home-2/rs6.min.js') }}"></script>
	<script src="{{ asset('public/assets/rs-plugin/js/home-2/home-2.js') }}"></script>
	<!-- Color Switche-->	
        <script src="{{ asset('public/assets/js/color-panel.js') }}"></script>
        <script src="{{ asset('public/lightgallery/js/lightgallery-all.js') }}"></script>
        <script type="text/javascript">
    
        $("#lightgallery").lightGallery({ 
                selector : '.check-km',
                loop:true,
                thumbnail:true,
                exThumbImage: 'data-exthumbimage'
        });  
</script>
 
</body>
<!-- Body End -->
</html>