  @extends('layouts.app')
 @section('title', $pageTitle)
@section('content') 

 <?php 
 use Illuminate\Support\Str;
 ?>
 @include('slider')
            <!-- Page Content -->
            <div class="content-wrapper pad-none">
                <div class="content-inner">					
		 
			<!-- Contact Section -->
			<section class="contact-form-section typo-white section-bg-img o-visible pad-bottom-50" data-bg="{{ asset('public/assets/images/bg/bg-5.jpg') }}">						
				<div class="shape-bottom" data-negative="false">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
						<path class="shape-fill" d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9"></path>
					</svg>
				</div>           
			</section>
			<!-- Contact Form Section End -->
			<!-- About Section -->
			<section id="section-about" class="section-about pad-bottom-none">
				<div class="container">
					<!-- Row -->
					<div class="row d-flex align-items-center">                                
						<!-- Col -->
						<div class="col-lg-6">
							<div class="title-wrap margin-bottom-25">
								<div class="section-title">
									<span class="sub-title theme-color text-uppercase">Qui sommes-nous?</span>
									<h2 class="section-title margin-top-5">Nous formons une famille spirituelle dont les liens permettent de briser toutes les barrières sociales, ethniques, religieuses.</h2>
									<span class="border-bottom"></span>
								</div>
								<div class="pad-top-15">
									<p class="margin-bottom-20">Semeur d’avenir est une organisation chrétienne dont les fondements demeurent la foi en Jésus-Christ, unique sauveur de l’humanité.</p>
								</div>
								<div class="icons-list">
									<div class="row">
										<div class="col-md-6">
											<ul>
												<li class="mb-2"><span class="theme-color fa fa-star me-2"></span>Famille chrétienne chaleureuse</li>
												<li class="mb-2"><span class="theme-color fa fa-star me-2"></span>Semence pour le bien-être de l’humanité</li>
												<li><span class="theme-color fa fa-star me-2"></span>Transforme la destinée céleste des hommes</li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul>
												<li class="mb-2"><span class="theme-color fa fa-star me-2"></span>Tous sont égaux</li>
												<li class="mb-2"><span class="theme-color fa fa-star me-2"></span>Semer la parole de Dieu dans la vie des hommes</li>
												<li><span class="theme-color fa fa-star me-2"></span>Fondements demeurent la foi en Jésus-Christ</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="button-section margin-top-35">
									<a class="btn btn-default" href="{{ url('a-propos-de-nous/qui-sommes-nous') }}" title="Lire la suite">Lire la suite</a>
								</div>
							</div>																										
						</div>
						<!-- Col -->
						<!-- Col -->
						<div class="col-lg-6 ps-lg-5">
							<!-- about wrap -->
							<div class="about-wrap relative">
								<div class="about-wrap-inner">
									<!-- about details -->
									<div class="about-wrap-details">
										<!-- about button -->
										<div class="text-center">
											<div class="about-img">
												<img src="{{ asset('public/assets/images/about-us/famille-chretienne.png') }}" class="ct-br-img" alt="Famille Chretienne">
											</div>
											<!-- .col -->
										</div>
									</div>
									<!-- about details End-->
								</div>
							</div>
							<!-- about wrap end -->
							<div class="about-img-overflow"> 
							</div>
						</div>
						<!-- .col -->
					</div>
					<!-- Row -->
				</div>
				<!-- Container -->
			</section>
			<!-- About Section End -->
			<br>
			@if($events->count())
						<!-- Day Counter Section -->
						<section id="Day-Counter-section" class="Day-Counter-section section-bg-img pad-none" data-bg="{{ asset('public/assets/images/bg/bg-6.jpg') }}">     
							<!-- Row -->
							<div class="row">								
								<!-- Col -->
								@php
									$lastContent = end($events);
									 
								@endphp
								<div class="col-lg-6 bg-1 pad-tb-100 pad-lr-50 d-flex justify-content-center">
									<div class="day-counter-wrap align-self-center">
										<div class="title-wrap text-center">
											<div class="section-title">												
												<h2 class="section-title margin-top-5 typo-white">Evènements à venir</h2>
												<span class="border-bottom center"></span>
											</div> 
										</div>
										<!-- Day Counter -->
										<div class="day-counter-wrapper pt-3 day-counter-2 day-counter-transparent text-center">
											<div class="day-counter day-counter-progress" data-date="{{ date('Y/m/d', strtotime($event->date_debut))}}" data-size="120">
												<div class="counter-elements counter-day rounded">
													<div class="counter-item">
														<div class="day-count-details">
															<h3 class="count-view theme-color mb-2">Number</h3>
															<span>Jour(s)</span>
														</div>
													</div>
												</div>
												<!-- .counter-day -->
												<div class="counter-elements counter-hour rounded">
													<div class="counter-item">
														<div class="day-count-details">
															<h3 class="count-view theme-color mb-2">Number</h3>
															<span>Heure(s)</span>
														</div>
													</div>
												</div>
												<!-- .counter-hour -->
												<div class="counter-elements counter-min rounded">
													<div class="counter-item">
														<div class="day-count-details">
															<h3 class="count-view theme-color mb-2">Number</h3>
															<span>Minute(s)</span>
														</div>
													</div>
												</div>
												<!-- .counter-min -->
												<div class="counter-elements counter-sec rounded">
													<div class="counter-item">
														<div class="day-count-details">
															<h3 class="count-view theme-color mb-2">Number</h3>
															<span>Seconde(s)</span>
														</div>
													</div>
												</div>
												<!-- .counter-sec -->
											</div>
											<!-- .day-counter -->
										</div>
										<!-- .day-counter-wrapper -->
										<div class="button-section text-center margin-top-35">
											<a class="btn btn-default" href="events.html" title="Learn More">Voir tous les évènements</a>
										</div>
									</div>
								</div>
								<!-- Col -->
								<div class="col-lg-6 bg-2 pad-100 justify-content-center">
									<div class="row events-style-1">
										<!--Col-->

										@foreach($events as $data)
										<div class="col-md-12">										
											<!--Events Inner-->
											<div class="events-inner">
												<div class="events-item">
													<div class="media">
														<div class="event-date me-4">{{ date('d M', strtotime($data->date_debut))}}<span class="event-time">{{ $data->heure_debut }}</span>
														</div>
														<div class="media-body align-self-center">
															<!-- Ministries Content -->
															<div class="event-content">
																<div class="event-title"><h5><a href="event-details.html"><?php echo Str::limit($data->titre,90); ?></a></h5></div>
																<div class="read-more"><a href="event-details.html">Voir le Details</a></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--Events Inner Ends-->										
										</div>	
										<!--Col-->
										@endforeach
									 
									</div>
								</div>
							</div>
							<!-- Row -->                        
						</section>
						@endif
						<!-- Day Counter Section End -->
						<!-- Ministries Section -->
						@if($activites->count())
						<section id="ministries-section" class="ministries-section pad-top-95 pad-bottom-90">
							<div class="container">
								<!-- Row -->
								<div class="row">
									<div class="offset-md-2 col-md-8">
										<div class="title-wrap text-center">
											<div class="section-title">
												<span class="sub-title theme-color text-uppercase">Semeur d'Avenir</span>
												<h2 class="section-title margin-top-5">Nos activités</h2>
												<span class="border-bottom center"></span>											
											</div>
										</div>
									</div>
									<!--Ministries Main Slider-->
									<div class="owl-carousel ministries-main-wrapper" data-loop="1" data-nav="1" data-dots="0" data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000" data-smartspeed="1000" data-margin="30" data-items="3" data-items-tab="2" data-items-mob="1">
										<!--Item-->
  									@foreach ($activites as $data) 
										<div class="item">
											<div class="ministries-box-style-2">
												<!-- Ministries Inner -->
												<div class="ministries-inner">
													<div class="ministries-thumb">
														<img class="img-fluid squared w-100" src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" width="360" height="240" style="height: 250px; overflow:hidden" alt="{{$data->titre}}">
													</div>
													<div class="ministries-icon-img-wrap">
														<img decoding="async" src="{{ asset('storage/app/public/'.setting('site.LogoFavicon')) }}" class="img-fluid ministries-icon-img" width="80" height="80" alt="{{$data->titre}}">
													</div>
													<!-- Ministries Content -->
													<div class="ministries-content pad-lr-30 pad-top-25 pad-bottom-30">
														<div class="ministries-title">										
															<h4 class="text-center mb-0"><a href="{{ route('nos-activites.show',$data->slug)}}" class="ministries-link">{{ Str::limit($data->titre, 55)}}</a></h4>
														</div>													
													</div>
												</div>
												<!-- Ministries Inner Ends -->
											</div>
										</div>
										@endforeach
										<!--Item Ends-->
										 

									</div>
									<!--Ministries Owl Slider-->
									<div class="button-section text-center">
										<a class="btn btn-default" href="{{ route('nos-activites.index')}}" title="Lire la suite">Voir toutes nos activités</a>
									</div>
								</div>
								<!-- Row -->
							</div>
							<!-- Container -->
						</section>
						@endif
						<!-- Ministries Section End -->

						<!-- Subscribe Section -->
						<section class="subscribe-form-section form-with-img">
							<div class="container">
								<div class="row">
									<!-- col -->
									<div class="col-lg-6 pe-0">
										<div class="subscribe-form-wrap bg-theme pad-60 section-bg-img" data-bg="{{ asset('public/assets/images/about-us/subscribe-box-img2.jpg') }}">
											<div class="title-wrap margin-bottom-25">
												<div class="section-title typo-white">
													<span class="sub-title text-uppercase">Semeur d'Avenir</span>
													<h2 class="section-title margin-top-5">Dévenir Membre</h2>
													<span class="border-bottom bg-white"></span>											
												</div>
												<div class="pad-top-">
													<p class="margin-bottom-20 typo-white">Vous souhaitez rejoindre Semeur d’Avenir en tant que membre, nous vous invitons officiellement à signifier votre appartenance et nous permettre d’assurer un meilleur suivi spirituel auprès de vous.</p>
												</div>
											</div>
											<!-- subscribe form -->
											<div class="button-section text-center">
										<a class="btn btn-warning" href="formulaire.html" title="Lire la suite">Cliquez ici pour accéder au formulaire</a>
									</div>
										</div>	
									</div>
									<!-- .col -->
									<div class="col-lg-6 ps-0">
										<div class="subscribe-img">
											<img class="img-fluid" src="{{ asset('public/assets/images/about-us/subscribe-box-img.jpg') }}" width="768" height="550" alt="Subscribe Img">
										</div>
									</div>
									 <!-- Col -->
								</div>
							</div>
						</section>
						<!-- Subscribe Form Section End -->
						@if($equipes->count())
						<!-- Team Section -->
						<section id="team-section" class="team-section pad-top-120 section-bg-img" data-bg="{{ asset('public/assets/images/bg/footer-bg.jpg') }}">
							<span class="theme-overlay"></span>
							<div class="container">
								<!-- Row -->
								<div class="row">
									<div class="offset-md-2 col-md-8">
										<div class="title-wrap text-center">
											<div class="section-title">
												<span class="sub-title theme-color text-uppercase">Semeur d'Avenir</span>
												<h2 class="section-title typo-white margin-top-5">Notre équipe</h2>
												<span class="border-bottom center"></span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="testimonial-img relative">
											<img class="img-fluid" src="{{ asset('public/assets/images/team/team-side.jpg') }}" width="485" height="730" alt="Testimonial Img">
										</div>
									</div>
									<div class="col-md-8">
										<!--Team Main Slider-->
										<div class="owl-carousel team-main-wrapper" data-loop="1" data-nav="1" data-dots="0" data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000" data-smartspeed="1000" data-margin="30" data-items="2" data-items-tab="2" data-items-mob="1">
											<!--Item-->
											@foreach($equipes as $data)	
											<div class="item">
												<div class="team-style-1">
													<!--Team Inner-->	
																					
													<div class="team-inner margin-bottom-20">												
														<div class="team-thumb mb-0 relative">
															<img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" class="img-fluid thumb w-100" width="480" height="485" alt="team-img" />														
														</div>												
														<div class="team-details text-center pad-30">
															<div class="team-name">
																<h3 class="mb-0"><a href="#" class="client-name typo-white">{{ $data->titre}}</a></h3>
															</div>
															<div class="team-designation mb-3"><p class="mb-0">{{$data->poste}}</p></div>
															<div class="team-social social-icons">
																<a href="{{$data->facebook}}"><span class="ti-facebook"></span></a> 				
																<a href="{{$data->youtube}}"><span class="ti-youtube"></span></a>	
																<a href="{{$data->linkedin}}"><span class="ti-linkedin"></span></a>
															</div>
														</div>
													</div>
													<!--Team Inner Ends-->
												</div>
											</div>
											<!--Item Ends-->
											@endforeach
											 
										</div>
										<!--Team Owl Slider-->
									</div>
								</div>
								<!-- Row -->
							</div>
							<!-- Container -->
						</section>
						@endif
						<!-- Team Section End -->
						<section class="contact-form-section typo-white section-bg-img o-visible pad-top-80 pad-bottom-160" data-bg="{{ asset('public/assets/images/bg/bg-2.jpg') }}" style="background-image: url({{ asset('public/assets/images/bg/bg-2.jpg') }});">
                        <div class="shape-bottom" data-negative="false"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                                <path class="shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
                                <path class="shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
                                <path class="shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
                            </svg> </div>
                        <div class="container">
                            <div class="row">
                                <!-- col -->
                                <div class="col-xl-4 pe-xl-4 pb-5 pb-xl-0">
                                    <div class="flip-box broken-top-115 verticalMove">
                                        <div class="flip-box-inner imghvr-flip-3d-horz">
                                            <div class="flip-box-front">
                                                <div class="flip-box-icon margin-bottom-40"><span class="text-center flip-icon-middle ti-headphone-alt"></span></div>
                                                <h3 class="flip-box-title margin-bottom-30">Appelez-nous</h3>
                                                <div class="flip-content">
                                                    <p>{{setting('site.ContactAdresse')}}</p>
                                                    <p><a href="tel:+8(123)985789">{{setting('site.ContactPhone')}}</a></p>
                                                    <p><a href="mailto:{{setting('site.ContactEmail')}}">{{setting('site.ContactEmail')}}</a></p>
                                                </div>
                                            </div>
                                            <div class="flip-box-back">
                                                <h3 class="flip-box-title">Call Us</h3>
                                                <div class="flip-content">
                                                    <p>{{setting('site.ContactAdresse')}}</p>
                                                    <p><a href="tel:+8(123)985789">{{setting('site.ContactPhone')}}</a></p>
                                                    <p><a href="mailto:{{setting('site.ContactEmail')}}">{{setting('site.ContactEmail')}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- col -->
                                <div class="col-xl-8 ps-xl-4">
                                    <div class="section-title-wrapper">
                                        <div class="title-wrap mb-0">
                                            <div class="section-title"> <span class="sub-title theme-color text-uppercase">Semeur d'Avenir</span>
                                                <h2 class="section-title margin-top-5">N'hésitez pas à nous contacter</h2> <span class="border-bottom"></span>
                                            </div>
                                            <div class="pad-top-15">
                                                <p class="margin-bottom-10">Vous avez besoin de prière, d’une assistance particulière, ou vous souhaitez parler à un leader spirituel spirituel, 
Appelez-nous ou écrivez-nous ! Nous serons heureux de vous servir !
</p>
                                            </div>
                                        </div>
                                        <div class="button-section margin-top-25"> <a class="btn btn-default" href="{{route('contactez-nous.index')}}" title="Learn More">Contactez-nous</a> </div>
                                    </div>
                                </div> <!-- .col -->
                            </div>
                        </div>
                    </section>
						<!-- Sermon Section -->
						@if($predications->count())
						<section id="section-sermon" class="sermon-section section-bg-img bg-align-left bg-theme pad-bottom-70" data-bg="{{ asset('public/assets/images/bg/bg-7.jpg') }}">
							<div class="shape-bottom" data-negative="false">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
									<path class="shape-fill" d="M500,98.9L0,6.1V0h1000v6.1L500,98.9z"></path>
								</svg>
							</div> 
							<div class="container">
								 <!-- Sermon Main Wrap -->
								<div class="sermon-main-wrap sermon-grid sermon-grid-2">
									<!-- Row -->
									<div class="row">
										<!-- Col -->
										<div class="col-lg-12">										
											<div class="title-wrap">
												<div class="section-title">
													<span class="sub-title theme-color text-uppercase">Semeur d'Avenir</span>
													<h2 class="section-title margin-top-5">Nos prédications</h2>
													<span class="border-bottom"></span>											
												</div>
											</div>
											<!-- Row -->
											<div class="row">
												<!-- Col -->
												@foreach($predications as $data)

												@php
												$pdf = $audio = '';
												if(isset($data->fichier_pdf) && $data->fichier_pdf !=null)
												{
												$pdf = json_decode($data->fichier_pdf); 
												$pdf = isset($pdf[0]) ? asset('storage/app/public/'.$pdf[0]->download_link) : ''; 
												}
												
  												if(isset($data->audio) && $data->audio !='[]')
												{
												$audio = json_decode($data->audio);
												$audio = isset($audio[0]) ? asset('storage/app/public/'.$audio[0]->download_link) : '';
												}

												@endphp
												<div class="col-md-4">
													<!--Sermon Inner-->
													<div class="sermon-inner mb-5">
														<!--Sermon Thumb-->
														<div class="sermon-thumb">
															<img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" class="img-fluid" alt="sermon-img" />													
														</div>
														<div class="sermon-details relative">
															<div class="sermon-play-list margin-bottom-20">
																<ul>
																	<li>
																		<a href="{{ $data->video }}" class="popup-youtube" title="Video" download=""><i class="ti-control-play"></i></a>
																	</li>
																	<li>
																		<a href="{{ $audio }}" class="popup-audio" title="Audio" download=""><i class="ti-music"></i></a>
																	</li>
																	<li>
																		<a href="{{ $pdf }}" class="sermon-pdf" title="PDF" target="_blank"><i class="ti-book"></i></a>
																	</li>
																</ul>													    
															</div>												
															<div class="sermon-title">
																<h4 class="margin-bottom-10"><a href="{{route('espace-communautaire.show', $data->slug)}}" class="sermon-name">{{ Str::limit($data->titre, 55)}}</a></h4>
															</div>
															<div class="sermon-info mt-2 pb-1">
																<ul>
																	<li>
																		<span class="title">Catégorie:</span> <a href="#">{{ $data->name}}</a>
																	</li>
																	<li>
																		<span class="title">Date:</span>
																	</li>
																	<li class="ms-2">
																		<a href="#"><i class="ti-time me-2"></i>{{ date('d M Y', strtotime($data->created_at))}}</a>
																	</li>
																</ul>
															</div>
														</div>
														<div class="post-meta bottom-meta margin-top-20">
															<div class="sermon-link">
																<a target="_blank" href="{{route('espace-communautaire.show', $data->slug)}}" class="link theme-color">Lire la suite</a>
															</div>
														</div>
													</div>
													<!--Sermon Inner Ends-->
												</div>
												@endforeach
												<!-- Col -->
												
											</div>
									<!-- Row -->
								</div>
								<!-- Sermon Main Wrap -->
							</div>
							<!-- Container -->
						</section>
						@endif
						<!-- Sermon Section End -->
						<!-- Blog Section -->
						@if($actualites->count())
						<section class="blog-section pad-top-none">
							<div class="container">
								<!-- Blog Wrap -->
								<div class="row">
									<div class="col-md-12">
										<div class="title-wrap text-center">
											<div class="section-title">
												<span class="sub-title theme-color text-uppercase">Semeur d'Avenir</span>
												<h2 class="section-title margin-top-5">Nos actualités</h2>
												<span class="border-bottom center"></span>											
											</div>
										</div>
										<div class="row">
											<!--Blog Main Slider-->
											<div class="owl-carousel blog-main-wrapper blog-style-1" data-loop="1" data-nav="0" data-dots="1" data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000" data-smartspeed="1000" data-margin="30" data-items="3" data-items-tab="2" data-items-mob="1">
												<!--Item-->
												@foreach ($activites as $data) 
												<div class="item">
													<!--Blog Inner-->
													<div class="blog-inner">
														<div class="blog-thumb relative">
															<img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" class="img-fluid" width="768" height="600" alt="blog-img" style="height: 280px; overflow:hidden;" />
															<div class="top-meta">
																<ul class="top-meta-list">
																<li><div class="post-date"><a href="blog.html"><i class="ti-calendar"></i>{{ date('d M Y', strtotime($data->created_at))}}</a></div></li>
																</ul>
															</div>
														</div>
														<div class="blog-details">
															<div class="blog-title">
																<h4 class="margin-bottom-10"><a href="blog.html" class="blog-name">{{ Str::limit($data->titre, 55)}}</a></h4>
															</div>
															<div class="entry-content">
                                                            <p><?php echo Str::limit($data->resume,130); ?></p>
                                                        </div>
															<div class="post-desc mt-2">
																<div class="blog-link">
																	<a target="_blank" href="blog.html" class="link font-w-500">Lire la suite</a>
																</div>
															</div>
														</div>
													</div>
													<!--Blog Inner Ends-->
												</div>
												@endforeach
												<!--Item Ends-->
									                                           
											</div>
										</div>
									</div>
								</div>
								<!-- Blog Wrap -->
							</div>
						</section>
						@endif
						<!-- Blog Section End -->
                </div>
            </div>
 
  @endsection