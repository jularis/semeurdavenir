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
                                        <span class="current">Nos actualités</span>
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
					<!-- Blog Section -->
                    <section id="blog-section" class="blog-section pad-bottom-70">
                        <div class="container">
							<!-- Blog Main Wrap -->
							<div class="blog-main-wrap blog-grid">
								<!-- Row -->
								<div class="row">
									<!-- Col -->
									<div class="col-lg-12">
										<!-- Row -->
										<div class="row">
											<!-- Col -->
											@foreach($res as $data)
											<div class="col-md-4">
												<div class="blog-style-1">
													<!--Blog Inner-->
													<div class="blog-inner">
														<div class="blog-thumb relative">
															<img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" class="img-fluid" width="768" height="600" alt="blog-img" />
															<div class="top-meta">
																<ul class="top-meta-list">
																<li><div class="post-date"><a href="#"><i class="ti-calendar"></i> {{ date('d M Y', strtotime($data->created_at))}}</a></div></li>
																</ul>
															</div>
														</div>
														<div class="blog-details">
															<div class="blog-title">
																<h4 class="margin-bottom-10"><a href="{{route('actualites.show', $data->slug)}}" class="blog-name">{{ Str::limit($data->titre, 50)}}</a></h4>
															</div>
															<div class="entry-content">
                                                            <p><?php echo Str::limit($data->resume,130); ?></p>
                                                        </div>
															<div class="post-desc mt-2">
																<div class="blog-link">
																	<a href="{{route('actualites.show', $data->slug)}}" class="link font-w-500">Lire la suite</a>
																</div>
															</div>
														</div>
													</div>
													<!--Blog Inner Ends-->
												</div>
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
							<!-- Blog Main Wrap -->
						</div>
						<!-- Container -->
                    </section>
                    <!-- Blog Section End -->
                </div>
            </div>
         
    @else

@include('layouts.404')
 
@endif

@endsection