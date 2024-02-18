@extends('layouts.app')
@section('title', $pageTitle)
@section('content') 
<?php 
 use Illuminate\Support\Str;
 ?>
@if($res->count())
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
                                        <span class="current">Nos évènements</span>
                                    </div>
                                    <h1 class="page-title mb-0">{{$pageTitle}}</h1>
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
                    <!-- Events Section -->
                    <section id="events-section" class="events-section pad-top-120 pad-bottom-70">
                        <!-- Screan Reader Text -->
                        <h2 class="screen-reader-text">Events 3</h2>
                        <div class="container">
                            <!-- Row -->
                            <div class="row">
                                <!-- Col -->
                                <div class="col-md-12">
                                    <!--events Main wrap-->
                                    <div class="events-main-wrapper events-grid events-style-4">
                                        <div class="row">
										@foreach($res as $data)
                                            <!-- Col-md -->
                                            <div class="col-lg-4 col-md-6">
                                                <!--events Inner-->
                                                <div class="events-inner margin-bottom-30">
                                                    <!--events Thumb-->
													<div class="events-thumb mb-0 relative" style="height: 235px; overflow:hidden;">
														<img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" class="img-fluid thumb w-100" width="768" height="456" alt="events-img"/>
													</div>
                                                    <!--events details-->
                                                    <div class="events-details pad-30">
														<div class="event-date margin-bottom-15">{{ date('d M', strtotime($data->date_debut))}}<span class="event-time">{{ $data->heure_debut }}</span>
														</div>
                                                        <div class="event-title mb-3">
															<h5><a href="{{ route('agenda.show', $data->slug)}}"><?php echo Str::limit($data->titre,90); ?></a></h5>
														</div>
														<div class="event-excerpt mb-3">
															<p><?php echo Str::limit($data->resume,130); ?></p>
														</div>
														<div class="read-more">
															<a href="{{ route('agenda.show', $data->slug)}}">Voir le detail</a>
														</div>                                                        
                                                    </div>
                                                    <!--events details-->
                                                </div>
                                                <!--events Inner Ends-->
                                            </div>
                                            <!--Col-md Ends-->

											@endforeach							
											<!-- Col -->
                                    		<div class="col-lg-12">
												<div class="post-pagination-wrap margin-top-30">
                                                {{ $res->links('pagination.custom') }} 
												</div>
											</div>
											<!-- Col -->
                                            <!--Col-md Ends-->                                                                                     

                                        </div>
                                        <!-- events Row -->
                                    </div>
                                    <!-- events Main wrap Ends -->
                                </div>
                                <!-- Col -->
                            </div>
                            <!-- Row -->
                        </div>
                    </section>
                    <!-- events Section Ends -->
                </div>
            </div>
         
    @else

@include('layouts.404')
 
@endif

@endsection