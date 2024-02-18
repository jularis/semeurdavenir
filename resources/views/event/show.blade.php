@extends('layouts.app')
@section('title', $detail->titre ?? 'Page non trouvé')
@section('content')
 
@if(isset($detail))
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
                                        <span class="current">Agenda</span>
                                        
                                    </div>
                                    <h1 class="page-title mb-0">{{ $detail->titre }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-header -->
                        <!-- Page Content -->
                        <div class="content-wrapper pad-none">
                <div class="content-inner">
                    <!-- Event Single Section -->
                    <section id="single-event" class="single-event">
                        <div class="container">
                            <div class="single-event-wrap">
                                <!-- Row -->
                                <div class="row">
                                    <!-- Col -->
                                    <div class="col-md-12">
                                        <!-- event img -->
                                        <div class="zoom-gallery mb-5">
                                            <div class="events-thumb relative">
                                                <a class="popup-img" href="#" title="Single Portfolio">
                                                    <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$detail->image)) }}" class="img-fluid single-event-img b-radius-10" alt="events-img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Col -->
                                </div>
                                <!-- Row -->
                                <!-- Row 2 -->
                                <div class="row">
                                    <!-- Col -->
                                    <div class="col-lg-8">
										<!-- events-title-wrap -->
                                        <div class="events-title-wrap pt-1 margin-bottom-35">
                                            <div class="events-content">
                                                <?php echo $detail->description; ?>
                                            </div>
                                        </div>
                                        <!-- events-title-wrap --> 
										 
                                    </div>
                                     <!-- Col -->
                                    <!-- Sidebar -->
                                     <!-- Col -->
                                    <div class="col-lg-4">
                                        <div class="event-details-wrap">
											<div class="event-info pad-bottom-30">
												<h4>Event Details</h4>
												<p class="event-organizer">
													<span class="event-subtitle"><strong>Organisateur : </strong></span><span class="event-organizer-designation"> {{$detail->organisateur}}</span>
												</p>
												<p class="event-start-date">
													<span class="event-subtitle"><strong>Date de début: </strong></span>{{ date('d/m/Y', strtotime($detail->date_debut))}}
												</p>
												<p class="event-end-date">
													<span class="event-subtitle"><strong>Date de fin: </strong></span>{{ date('d/m/Y', strtotime($detail->date_fin))}}
												</p>
												<p class="event-time">
													<span class="event-subtitle"><strong>Heure de début : </strong></span>{{$detail->heure_debut}}
												</p>	
												<p class="event-cost">
													<span class="event-subtitle"><strong>Coût : </strong></span>@if (isset($detail->prix) && is_numeric($detail->prix)) 
                                                    {{ number_format($detail->prix,0,'',' ') }} FCFA
                                                    @else

                                                    @endif
												</p> 
												<p class="event-address"><span class="event-subtitle"><strong>Adresse : </strong></span>
                                                {{$detail->adresse}}<a class="zegen-popup-gmaps theme-color" href="https://maps.google.com?daddr={{ __($detail->localisation_gps) }}"><span class="ti-location-pin"></span></a>
												</p>
												<p class="event-email"><span class="event-subtitle"><strong>E-mail : </strong></span>
                                                {{$detail->email}}
												</p>
												<p class="event-phone"><span class="event-subtitle"><strong>Téléphone : </strong></span>
                                                {{$detail->telephone}}
												</p> 
											</div> 
											<!-- contact-form-7 -->		
										</div>
                                    </div>
                                     <!-- Sidebar -->
                                </div>
                                <!-- Row 2 --> 
                            </div>
                            <!-- Portfolio Single Wrap -->
                        </div>
                    </section>
                    <!-- Portfolios Section End -->
                </div>
            </div>
      @else 

@include('layouts.404')

@endif

@endsection


 