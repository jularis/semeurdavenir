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
                                        <a href="{{ url('a-propos-de-nous/notre-equipe/')}}" class="theme-color"><span class="current">Notre Equipe</span></a>
                                        
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
                                         
										<div class="sermon-view-wrapper">
											<div class="row">
												<div class="col-md-6">
													<h4 class="sermon-subtitle typo-white margin-bottom-20">Suivez-moi</h4>
													<ul class="sermon-play-list">
														<li>
                                                        <a href="{{$detail->facebook}}"><i class="ti-facebook"></i></a> 
														</li>
														<li>
                                                        <a href="{{$detail->youtube}}"><i class="ti-youtube"></i></a>	
														</li>
														<li>
                                                        <a href="{{$detail->linkedin}}"><i class="ti-linkedin"></i></a>
														</li>
													</ul>
												</div>
												<div class="col-md-6"> 
												</div>
											</div>
										</div>
										<!-- sermons-info-wrap -->
                                        <div class="sermon-info margin-bottom-15">
											 
										</div>
                                        <div class="sermons-title-wrap pt-1 margin-top-30">
                                            <div class="sermons-content">
                                                <div class="sermons-title pad-none margin-none">
                                                    <h3 class="margin-bottom-15"> {{ $detail->titre}} :<span class="theme-color"> {{ $detail->poste}}</span></h3>
                                                </div> 
                                                <?php echo $detail->description; ?> 
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


 