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
                                        <span class="current">Notre espace communautaire</span>
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
					<!-- Sermon Section -->
                    <section id="section-sermon" class="sermon-section">
                        <div class="container">
							 <!-- Sermon Main Wrap -->
							<div class="sermon-main-wrap sermon-list sermon-grid-2">
								<!-- Row -->
								<div class="row">
									<!-- Col -->
									<div class="col-lg-12">
										<!-- Row -->
										<div class="row">
                                        @foreach($res as $data)
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
											<!-- Col -->
											<div class="col-md-12">
												<!--Sermon Inner-->
												<div class="media sermon-inner margin-bottom-40 pad-tb-none relative">
													<!--Sermon Thumb-->
													<div class="sermon-thumb">
														<img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" class="img-fluid" alt="sermon-img" />
													</div>
													<div class="media-body pad-tb-20">
														<div class="sermon-details">
															<div class="sermon-play-list">
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
																<h4 class="margin-bottom-10"><a href="{{route('espace-communautaire.show', $data->slug)}}" class="sermon-name">{{$data->titre}}</a></h4>
															</div>															
															<div class="sermon-info mt-2 mb-3 pb-1">
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
															<div class="sermon-excerpt margin-bottom-30">
																<p><?php echo  $data->excerpt; ?></p>
															</div>
														</div>
														<div class="post-meta bottom-meta margin-top-20">
															<div class="sermon-link">
																<a target="_blank" href="{{route('espace-communautaire.show', $data->slug)}}">Lire la suite</a>
															</div>
														</div>
													</div>	
												</div>
												<!--Sermon Inner Ends-->
											</div>
											<!-- Col -->
                                            @endforeach							
											<!-- Col -->
                                    		<div class="col-lg-12">
												<div class="post-pagination-wrap margin-top-30">
                                                {{ $res->links('pagination.custom') }} 
												</div>
											</div>
											<!-- Col -->
										</div>
										<!-- row -->
									</div>									
                                    <!-- Col -->
								</div>
								<!-- Row -->
							</div>
							<!-- Sermon Main Wrap -->
						</div>
						<!-- Container -->
                    </section>
                    <!-- Sermon Section End -->
                </div>
            </div>
 

    @else

@include('layouts.404')
 
@endif

@endsection