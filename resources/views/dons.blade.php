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
						<!-- Sermon Section -->
                        <section id="section-sermon" class="sermon-section pad-bottom-45">
                        <div class="container">
							 <!-- Sermon Main Wrap -->
							<div class="sermon-main-wrap sermon-list sermon-grid-2 ">
								<!-- Row -->
								<div class="row">
									<!-- Col -->
                     
									<!-- Col -->
									<div class="col-lg-12">
										<div class="title-wrap margin-bottom-25">
											<div class="section-title">
												<span class="sub-title theme-color text-uppercase">{{ $pageTitle }}</span>
												<h2 class="section-title margin-top-5">CHAQUE DON COMPTE</h2>
												<span class="border-bottom"></span>
											</div>
											<div class="pad-top-15">
												<p class="margin-bottom-20">Vous voulez soutenir les activités de Semeur d’Avenir, veuillez nous écrire à l'adresse suivante : {{setting('site.ContactEmail4')}}</p>
												<p class="margin-bottom-20">
                                                Chaque don que vous faites à Semeur d’Avenir a un impact significatif. C’est bien plus qu’un simple don. C’est semer dans la destinée d’une multitude, participer à la transformation de vies et contribuer à la propagation de l’Évangile.
                                                </p>	
                                                <p class="margin-bottom-20">
                                                N’hésitez pas à communiquer avec nous pour toute autre information ou pour obtenir de l’aide au  +225 XX XX XX XX XX ou à {{setting('site.ContactEmail4')}}
                                                </p>								
											</div>
										</div> 
                                        									
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
            
@endsection