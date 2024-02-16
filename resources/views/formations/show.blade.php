@extends('layouts.app')
@section('title', $detail->title ?? 'Page non trouvé')
@section('content')
 
@if(isset($detail))
<!--Breadcrumb Start-->
<header class="page-header" data-background="{{ asset('public/img/page-header.jpg') }}"">
        <div class="container">
          <h2>{{$pageTitle}}</h2>
          <div class="bosluk3"></div>
          <p><a href="{{url('') }}">Accueil</a> <i class="flaticon-right-chevron"></i> {{$pageTitle}}</p>
        </div>
        <!-- end container --> 
      </header> 
    <!--Breadcrumb End--> 
    <main>

        <!-- Start Courses Details Area -->
        <section class="courses-details-area pt-100 pb-70">
            <div class="container">
                <div class="courses-details-header">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="courses-title">
                                <h2>{{$detail->titre}}</h2>
                                <p>{{$detail->resume}}</p>
                            </div>

                            <div class="courses-meta">
                                <ul>
                                    <li>
                                        <i class='bx bx-folder-open'></i>
                                        <span>Categorie</span>
                                        <a href="#">{{ $detail->name}}</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar'></i>
                                        <span>Date de formation</span>
                                        <a href="#">{{ date('d/m/Y', strtotime($detail->date_formation))}}</a>
                                    </li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="courses-price">
                                <div class="courses-review">
                                     
                                </div>

                                <div class="price">{{ number_format($detail->prix,0,'',' ') }} FCFA</div>
                                <!-- <a href="#" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Postuler</span><i class="bx bx-paper-plane icon-arrow after"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="courses-details-image text-center">
                            <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$detail->image)) }}" alt="image">
                        </div>

                        <div class="courses-details-desc">
                            <h3>{{ $detail->titre}}</h3>
 <?php echo $detail->description; ?> 

                              
                        </div>
 
                    </div>

                    <div class="col-lg-4">
                        <div class="courses-sidebar-information">
                            <ul>
                                <li>
                                    <span><i class='bx bx-calendar'></i> Date de Fin d'inscription:</span>
                                    {{ date('d/m/Y', strtotime($detail->fin_inscription))}}
                                </li>
                                <li>
                                    <span><i class='bx bx-time'></i> Lieu:</span>
                                    {{$detail->lieu}}
                                </li>
                                <li>
                                    <span><i class='bx bx-tachometer'></i> Formateur:</span>
                                    {{$detail->formateur}}
                                </li>
                                <li>
                                    <span><i class='bx bxs-institution'></i> Entreprise:</span>
                                    <a href="#" class="d-inline-block">CLEAN ENERGY SERVICES</a>
                                </li>
                                <li>
                                    <span><i class='bx bxs-graduation'></i> Subject:</span>
                                    Design
                                </li> 
                                <li>
                                    <span><i class='bx bx-support'></i> Langue:</span>
                                    Français
                                </li>
                                 
                            </ul>
                        </div>
                        <div class="courses-sidebar-syllabus">
                            <h3>Contenu du cours</h3>

                            <div class="courses-list">
                                <?php echo $detail->cours; ?>
                            </div>
 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Courses Details Area -->
        <div class="bosluk3"></div>
   </main>
  
      @else 

@include('layouts.404')

@endif

@endsection


 