@extends('layouts.app')
@section('title', $pageTitle ?? 'Page non trouvé')
@section('content')
 
@if(count($liste)) 
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
                                        <span class="current">A propos de nous</span>
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
                <!-- Team Section -->
					<section id="team-section" class="team-section pad-top-120 pad-bottom-70">
						<!-- Screan Reader Text -->
						<h2 class="screen-reader-text">Team</h2>
						<div class="container">
							<!-- Row -->
							<div class="row">
								<!-- Col -->
								<div class="col-md-12">
									<!--Team Main wrap-->
                                    @foreach ($liste as $categ) 

                                    <h3 class="margin-bottom-15"> <span class="theme-color">{{ $categ->name }}</span></h3>
									<div class="team-main-wrapper team-grid team-style-1">
										<div class="row">
											<!-- Col-md -->
                                            
                                            @foreach($categ->listeEquipe as $data)
                                            @php
											$image = array("contact_bg1.jpg", "contact_bg2.jpg", "contact_bg3.jpg");
											shuffle($image);  
											@endphp	
											<div class="col-md-4">
												<!--Team Inner-->	
												<div class="div-bg-img b-radius-20" data-bg="{{ asset('public/assets/images/contact/'.$image[0]) }}">
										<div class="f-box c-page text-center typo-white">
											<div class="feature-icon margin-bottom-10"> 
											</div>
											<div class="feature-content">
												<div class="feature-title">
												<a href="{{route('equipe.show', $data->slug)}}" class="client-name typo-white"><h5 class="mb-2">{{$data->titre}}</h5></a>
												</div>
												<p class="mb-0">{{$data->poste}}</p>
											</div>											
										</div>
									</div>			 
												<!--Team Inner Ends-->
											</div>
                                            @endforeach
											<!--Col-md Ends-->
											                                            
										</div>
										<!-- Team Row -->
									</div>
                                    @endforeach
									<!-- Team Main wrap Ends -->
								</div>
								<!-- Col -->
							</div>
							<!-- Row -->
						</div>
					</section>
					<!-- Team Section Ends -->
                </div>
            </div>

 
      @else 

@include('layouts.404')

@endif

@endsection


 