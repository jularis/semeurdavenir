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
                                        <a href="{{route('mediatheque.show', $detail->slugcat)}}" class="theme-color"><span class="current">{{$detail->name}}</span></a>
                                        
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
                    <!-- Sermon Single Section -->
                    <section id="single-sermon" class="single-sermon pad-bottom-80">
                        <div class="container">
                            <div class="single-sermon-wrap">
                                <!-- Row -->
                                <div class="row">
                                    <!-- Col -->
                                    <div class="col-md-12">
                                        <!-- sermon img -->
                                        <div class="zoom-gallery">
                                            <div class="sermons-thumb relative">
                                                <a class="popup-img" href="{{ asset('storage/app/public/'.str_replace('\\','/',$detail->image)) }}" title="{{$detail->titre}}">
                                                    <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$detail->image)) }}" class="img-fluid single-sermon-img b-radius-10" width="1170" height="694" alt="{{$detail->titre}}" />
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
                                    <div class="col-md-12"> 
                                        <!-- sermons-view-wrap -->
                                        @php
												$pdf = $audio = '';
												if(isset($detail->fichier_pdf) && $detail->fichier_pdf !=null)
												{
												$pdf = json_decode($detail->fichier_pdf); 
												$pdf = isset($pdf[0]) ? asset('storage/app/public/'.$pdf[0]->download_link) : ''; 
												}
												
  												if(isset($detail->audio) && $detail->audio !='[]')
												{
												$audio = json_decode($detail->audio);
												$audio = isset($audio[0]) ? asset('storage/app/public/'.$audio[0]->download_link) : '';
												}

												@endphp
										<div class="sermon-view-wrapper">
											<div class="row">
												<div class="col-md-6">
													<h4 class="sermon-subtitle typo-white margin-bottom-20">Regardez</h4>
													<ul class="sermon-play-list">
														<li>
															<a href="{{ $detail->video }}" class="popup-youtube" title="Video" download=""><i class="ti-control-play"></i></a>
														</li>
														<li>
															<a href="{{ $audio }}" class="popup-audio" title="Audio" download=""><i class="ti-music"></i></a>
														</li>
														<li>
															<a href="{{ $pdf }}" class="sermon-pdf" title="PDF" ><i class="ti-book"></i></a>
														</li>
													</ul>
												</div>
												<div class="col-md-6">
													<h4 class="sermon-subtitle text-right typo-white margin-bottom-20 text-right">Téléchargez</h4>
													<ul class="sermon-tool-list text-right">
														<li>
															<a href="{{ $audio }}" class="sermon-audio-link" title="Audio" download><i class="ti-headphone"></i></a>
														</li>														
														<li>
															<a href="{{ $pdf }}" class="sermon-pdf-link" title="PDF" download><i class="ti-book"></i></a>
														</li> 
													</ul>
												</div>
											</div>
										</div>
										<!-- sermons-info-wrap -->
                                        <div class="sermon-info margin-bottom-15">
											<ul>
                                            <li>
																		<span class="title">Catégorie:</span> <a href="#">{{ $detail->name}}</a>
																	</li>
																	<li>
																		<span class="title">Date:</span>
																	</li>
																	<li class="ms-2">
																		<a href="#"><i class="ti-time me-2"></i>{{ date('d M Y', strtotime($detail->created_at))}}</a>
																	</li>
												 
											</ul>
										</div>
                                        <div class="sermons-title-wrap pt-1 margin-top-30">
                                            <div class="sermons-content">
                                                <div class="sermons-title pad-none margin-none">
                                                    <h3 class="margin-bottom-15"> <span class="theme-color">{{ $detail->titre}}</span></h3>
                                                </div> 
                                                <?php echo $detail->description; ?> 
                                                <div class="row mb-20" id="lightgallery">
                                        <?php  
                                                              if($detail->galeries)
                                                              {
                                        $i=0; 
                                        $images = json_decode($detail->galeries);  
                                        foreach($images as $datas)
                                  {
                                          ?>
                                                  <!-- Item 1 -->
                                                  <div class="col-sm-4 col-md-4"> 
                                                                  
                                                                  <span data-exthumbimage="{{asset('storage/app/public/'.$datas)}}" data-src="{{asset('storage/app/public/'.$datas)}}" class="icon-bx-xs check-km" title="<?php echo stripslashes($pageTitle);?>">        
                                                                        <a href="javascript:void(0);" class=""> <img src="{{asset('storage/app/public/'.$datas)}}" alt="images" ></a>
                                                                      </span> 
                                                      </div>
                                                  <?php
                                          $i++; 
                                          }
                                      }
                                              ?>
                                        </div>
                                            </div>
                                        </div>
                                        <!-- sermons-title-wrap -->
                                    </div>
                                     <!-- Col -->                                    
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


 