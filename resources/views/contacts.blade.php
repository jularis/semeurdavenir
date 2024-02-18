@extends('layouts.app')
@section('title', $pageTitle)
@section('content')
<style type="text/css">
    .error{
  color: #e72121;
  font-size: 12px;
}
</style>
   <!-- page-header -->
   <div class="page-title-wrap typo-white">
                <div class="page-title-wrap-inner section-bg-img" data-bg="{{ asset('public/assets/images/page-title.jpg') }}">
					<span class="theme-overlay"></span>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="page-title-inner">
									<div id="breadcrumb" class="breadcrumb margin-bottom-10">
                                        <a href="{{ url('') }}" class="theme-color">Accueil</a> 
                                    </div>
                                    <h1 class="page-title mb-0">{{$pageTitle}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-header -->
            <div class="content-wrapper pad-none">
                <div class="content-inner">
					<!-- Contact Section -->
                    <section id="contact-section" class="contact-section pad-bottom-none">
                        <div class="container">
                            <!-- Row -->
                            <div class="row">
                                <!-- Col -->
                                <div class="col-lg-4 mb-lg-0 mb-4">
									<div class="div-bg-img b-radius-20" data-bg="{{ asset('public/assets/images/contact/contact_bg1.jpg') }}">
										<div class="f-box c-page text-center typo-white">
											<div class="feature-icon margin-bottom-10">
												<i class="ti-location-pin"></i>
											</div>
											<div class="feature-content">
												<div class="feature-title">
													<h5 class="mb-2">Localisation</h5>
												</div>
												<p class="mb-0">{{setting('site.ContactAdresse')}}</p>
											</div>											
										</div>
									</div>
                                </div>
                                <!-- Col -->
                                <div class="col-lg-4 mb-lg-0 mb-4">
                                    <div class="div-bg-img b-radius-20" data-bg="{{ asset('public/assets/images/contact/contact_bg2.jpg') }}">
										<div class="f-box c-page text-center typo-white">
											<div class="feature-icon margin-bottom-10">
												<i class="ti-headphone-alt"></i>
											</div>
											<div class="feature-content">
												<div class="feature-title">
													<h5 class="mb-2">Contacts</h5>
												</div>
												<a href="tel:{{setting('site.ContactPhone')}}">{{setting('site.ContactPhone')}}</a>
												<br>
												<a href="tel:{{setting('site.ContactMobile')}}">{{setting('site.ContactMobile')}}</a>
											</div>											
										</div>
									</div>
                                </div>
                                <!-- Col -->
                                <div class="col-lg-4">
                                    <div class="div-bg-img b-radius-20" data-bg="{{ asset('public/assets/images/contact/contact_bg3.jpg') }}">
										<div class="f-box c-page text-center typo-white">
											<div class="feature-icon margin-bottom-10">
												<i class="ti-email"></i>
											</div>
											<div class="feature-content">
												<div class="feature-title">
													<h5 class="mb-2">Email</h5>
												</div>
												<a href="mailto:{{setting('site.ContactEmail')}}">{{setting('site.ContactEmail')}}</a>
												<br>
												<a href="mailto:{{setting('site.ContactEmail2')}}">{{setting('site.ContactEmail2')}}</a>
                                                <br>
												<a href="mailto:{{setting('site.ContactEmail3')}}">{{setting('site.ContactEmail3')}}</a>
											</div>											
										</div>
									</div>
                                </div>
                            </div>
                            <!-- Row -->
                        </div>
						<!-- Container -->
                    </section>
                    <!-- Contact Section End -->
					<!-- Contact Section -->
                    <section class="contact-form-section form-with-img">
                        <div class="container">
                            <div class="row">
                                <!-- col -->
                                <div class="col-lg-8 pe-0">                                    
                                    <!-- Contact Form -->
                                    <div class="contact-form-4 bg-white">
                                        <!-- Form -->
                                        <div class="contact-form-wrap">
                                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <div>
                                        @foreach ($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                            </div>
                                </div>
                            @endif
			@if(session()->has('error'))
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session()->get('error') }}                   
                </div>
                @endif 
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session()->get('success') }}
                </div>
              
                @endif
                                            <!-- form inputs -->
                                            <form id="contactForm" class="contact-form" action="<?php echo route('contactez-nous.store') ?>" enctype="multipart/form-data">
                                            @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- form group -->
                                                        <div class="form-group">
                                                            <input id="nom" class="form-control" name="nom" placeholder="Votre nom & prénoms..." type="text" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <!-- form group -->
                                                        <div class="form-group">
                                                            <input id="email" class="form-control" name="email" placeholder="Votre adresse Email..." type="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <!-- form group -->
                                                        <div class="form-group">                                                            
															<input id="objet" class="form-control" name="objet" placeholder="L'objet du message..." type="text" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="contact-message">
                                                            <!-- form group -->
                                                            <div class="form-group">
                                                                <textarea id="message" class="form-control textarea" rows="5" name="message" placeholder="Votre message..." required></textarea>
                                                            </div>
                                                        </div> 
														<!-- form group --> 
                                                        <input type="hidden" name="to" value="{{ setting('site.ContactEmail') }}">
                                                        <!-- form button -->
                                                        <button type="submit" id="contact-submit" class="btn btn-default mt-0 theme-btn">Envoyer</button>
                                                    </div>
                                                </div>
                                                <span class="clearfix"></span>
                                                
                                            </form>
											 
                                            <!-- form inputs end --> 
                                            <div class="contact-result"></div>
                                        </div>
                                        <!-- Form End-->
                                    </div>
                                    <!-- contact-form-1 -->
                                </div>
                                <!-- .col -->
                                <div class="col-lg-4 pad-none">
                                    <div class="contact-img">
                                        <img class="img-fluid" src="{{ asset('public/assets/images/contact/contact_bg4.jpg') }}" width="752" height="888" alt="Contact Map">
                                    </div>
                                </div>
                                 <!-- Col -->
                            </div>
                        </div>
                    </section>
                    <!-- Contact Form Section End -->					
					<!-- Contact Map -->
					<section class="contact-map pad-top-none">
						<div class="container">
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-12"> 
									<!-- Screan Reader Text -->
									<h2 class="screen-reader-text">Map</h2>
									<!-- Container Fluid -->
									<div class="container-fluid pad-none">
										<!-- Map -->
										<div class="map mt-0">
											<div id="googleMap" class="b-radius-0" style="width:100%;height:400px;"  ></div>
										</div>
										<!-- Map -->
									</div>
									<!-- Container Fluid -->
								</div>
								<!-- col -->
							</div>
						</div>	
					</section>
					<!-- Contact Map End -->									
                </div>
            </div>
            <script type="text/javascript">

$(function () {
    /*==========  Contact Form validation  ==========*/
    var contactForm = $("#contactForm"),
        contactResult = $('.contact-result');
    contactForm.validate({

      rules: {
        nom: {
      required: true, 
    },
    objet: {
      required: true, 
    },
    message: {
      required: true, 
    },
    email: {
      required: true,
      email: true
    }
  },
  messages: {
    nom: "Le champ Nom est obligatoire. *",
    objet: "Le champ Objet est obligatoire. *",
    message: "Le champ Message est obligatoire. *",
    email: "Le champ Email est obligatoire et doit être une adresse valide. *"
  }, 
  debug:false,
        submitHandler: function (contactForm) {
            $(contactResult, contactForm).html('<img src="<?php echo url('') ?>/public/img/loading.gif" style="width: 110px;">');
            $.ajax({
                type: "POST",
                url: '<?php echo route('contactez-nous.store') ?>',
                data: $(contactForm).serialize(),
                timeout: 20000,
                success: function (msg) {
                  $(contactForm)[0].reset();
                    $(contactResult, contactForm).html('<div class="alert alert-success" role="alert"><strong>Merci votre message a été envoyé avec succès.</strong></div>').delay(5000).fadeOut(4000);
                },
                error: $('.thanks').show()
            });
            return false;
        }
    });
  });
 
</script> 
<script src="https://maps.googleapis.com/maps/api/js?key={{ setting('site.googleApi') }}"></script> 
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

@endsection