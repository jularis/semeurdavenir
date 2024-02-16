<html lang="fr">
    <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="<?php echo setting('site.MetaDescription') ?? ''; ?>" /> 
<meta name="Robots" CONTENT="All">
<meta name="keywords" content="<?php echo setting('site.MetaKeywords') ?? ''; ?>" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="<?php echo setting('site.google-site-verification')?? ''; ?>" /> 
<title><?php echo setting('site.title')?? ''; ?> | @yield('title')</title>
        <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/app/public/'.setting('admin.icon_image')) }}"> 
    <!-- Google Fonts -->  
    <link rel="stylesheet" href="{{ asset('public/css/icon-font.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">   
        <link rel="stylesheet" href="{{ asset('public/css/fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/odometer.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('public/lightgallery/css/lightgallery.min.css') }}" /> 
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo setting('site.google_analytics_tracking_id'); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo setting('site.google_analytics_tracking_id'); ?>');
</script>
    </head>
    <body> 
    
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.11&appId=<?php echo setting('site.FacebookAppID'); ?>';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="loadwraps">
            <div class="dot"></div>
            <div class="outline"><span></span></div>
         </div>
        <aside class="side-widget">
            <div class="inner">
            <!-- Logo Menu Mobile -->
              <div class="logo"> <a href="{{ url('') }}"><img src="{{ asset('storage/app/public/'.setting('site.LogoBlanc')) }}" alt="Image"></a> </div>
              <div class="hide-mobile">
                <h6 class="widget-title">INFO CONTACTS</h6>
                <address class="address">
                <p>{{setting('site.ContactPhone')}}<br>
                  <a href="#">{{setting('site.ContactEmail')}}</a></p>
                </address>
              </div>
              <div class="show-mobile">
                <div class="site-menu">
                {{ menu('front-menu','menu-mobile') }}
                  </div>
              </div>
              <small><?php echo setting('site.Copyright'); ?> <a href="<?php echo setting('site.UrlConcepteur'); ?>">JBK Technologies</a></small> </div>
          </aside>
          <nav class="navbar">
            <div class="container">
            <!-- Logo Menu Desktop -->
              <div class="logo"> <a href="{{ url('') }}"><img src="{{ asset('storage/app/public/'.setting('site.LogoBlanc')) }}" alt="Image"></a> </div>
              <div class="site-menu">
              {{ menu('front-menu','menu') }}
              </div>
              <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div>
              <div class="navbar-button"> <a href="#"><i class="flaticon-headphones iconp"></i>&nbsp;&nbsp;&nbsp;{{setting('site.ContactPhone')}}</a> </div>
            </div>
          </nav>
 
             @yield('content')
  <!--Footer Alanı-->
  <footer class="footer">
                <div class="container">
                    <div class="row">
                      <div class="col-xl-3 col-lg-4">
                        <div class="logo wow fadeInUp" data-wow-delay="0.3s"> <img src="{{ asset('storage/app/public/'.setting('site.LogoBlanc')) }}" alt="Image"> </div>
                        <!-- end logo -->
                        <div class="footer-info wow fadeInUp" data-wow-delay="0.4s">
                            <p><i class="flaticon-call iconpfooter"></i>&nbsp;&nbsp;&nbsp;{{setting('site.ContactPhone')}}</p><br>
                            <div class="bosluk04"></div>
                            <p><i class="flaticon-email iconpfooter"></i>&nbsp;&nbsp;&nbsp;{{setting('site.ContactEmail')}}</p><br>
                            <p><i class="flaticon-flag iconpfooter"></i>{{setting('site.ContactAdresse')}}</p><br>
                        </div>
                        <!-- end footer-info -->
                        <ul class="footer-social wow fadeInUp" data-wow-delay="0.5s">
                            <li><a href="{{setting('site.SocialFacebook')}}"><img width="25" height="25" src="{{ asset('public/img/facebook.png') }}" alt="Facebook"></a></li>
                            <li><a href="{{setting('site.SocialTwitter')}}"><img width="25" height="25" src="{{ asset('public/img/twitter.png') }}" alt="Twitter"></a></li>
                        </ul>
                      </div>
                      <!-- end col-3 -->
                      <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                        <h6 class="widget-title">Clean Energy Services</h6>
                        <p class="footerp">{{setting('site.description')}}
                        </p><br>

                        <a href="{{route('contactez-nous.index')}}" class="custom-button">CONTACTEZ-NOUS</a> </div>
                      <!-- end col-4 -->
                      <div class="col-lg-3 offset-xl-1 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <h6 class="widget-title">Nos Services</h6>
                        {{ menu('footer-menu','menu-footer') }}  
                      </div>
                      <!-- end col-2 -->
                      <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                        <h6 class="widget-title">Accès rapides</h6>
                        {{ menu('footer-menu2','menu-footer2') }}  
                      </div>
                      <!-- end col-2 -->
                      <div class="col-12 wow fadeInUp" data-wow-delay="0.9s">
                        <p class="copyright"><?php echo setting('site.Copyright'); ?> <a href="<?php echo setting('site.UrlConcepteur'); ?>">JBK Technologies</a></p>
                      </div>
                      <!-- end col-12 --> 
                    </div>
                    <!-- end row --> 
                  </div>
                <div id="top" style="cursor: pointer;">
                    <img width="50" height="50" src="{{ asset('public/img/go-top.png') }}" alt=""/>
                </div>
                
            </footer>
  <script src="https://maps.googleapis.com/maps/api/js?key={{ setting('site.googleApi') }}"></script> 
  <script src="{{ asset('public/js/team.js') }}"></script>
  
                <script src="{{ asset('public/js/jquery.min.js') }}"></script> 
                <script src="{{ asset('public/js/bootstrap.min.js') }}"></script> 
                <script src="{{ asset('public/js/fancybox.min.js') }}"></script> 
                <script src="{{ asset('public/lightgallery/js/lightgallery-all.js') }}"></script>
                <script src="{{ asset('public/js/swiper.min.js') }}"></script> 
                <script src="{{ asset('public/js/odometer.min.js') }}"></script> 
                <script src="{{ asset('public/js/wow.min.js') }}"></script> 
                <script src="{{ asset('public/js/scripts.js') }}"></script>
                <script src="{{ asset('public/js/3d.jquery.js') }}"></script>
                <script src="{{ asset('public/js/pointer.js') }}"></script>
                
   
                <!--Cursor Script-->                    
                <script>
                    init_pointer({
                        
                    })
                </script> 
                 <script type="text/javascript">
    $(document).ready(function() {
        $("#lightgallery").lightGallery({ 
                selector : '.check-km',
                loop:true,
                thumbnail:true,
                exThumbImage: 'data-exthumbimage'
        }); 
    });
</script>
<script type="text/javascript">
        /*-------------------------------------
        Google Map
    -------------------------------------*/
    $(document).ready(function(){
    if ($("#googleMap").length) {
        window.onload = function () {
            var styles = [{
                featureType: 'water',
                elementType: 'geometry.fill',
                stylers: [{
                    color: '#b7d0ea'
                }]
            }, {
                featureType: 'road',
                elementType: 'labels.text.fill',
                stylers: [{
                    visibility: 'off'
                }]
            }, {
                featureType: 'road',
                elementType: 'geometry.stroke',
                stylers: [{
                    visibility: 'off'
                }]
            }, {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{
                    color: '#c2c2aa'
                }]
            }, {
                featureType: 'poi.park',
                elementType: 'geometry',
                stylers: [{
                    color: '#b6d1b0'
                }]
            }, {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#6b9a76'
                }]
            }];
            var options = {
                mapTypeControlOptions: {
                    mapTypeIds: ['Styled']
                },
                center: new google.maps.LatLng(<?php echo setting('site.googleMaps'); ?>),
                scrollwheel: false,
                zoom: 17,
                zoomControl: true,
                mapTypeControl: false,
                streetViewControl: false, 
                disableDefaultUI: true,
                mapTypeId: 'Styled'
            };
            var div = document.getElementById('googleMap');
            var map = new google.maps.Map(div, options);
            var styledMapType = new google.maps.StyledMapType(styles, {
                name: 'Styled'
            });
            map.mapTypes.set('Styled', styledMapType);

            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation: google.maps.Animation.BOUNCE,
                icon: '{{ asset("public/img/map-marker.png") }}',
                map: map
            });
        };
    }
});
    </script>
 
    </body>
</html>