  @extends('layouts.app')
 @section('title', $pageTitle)
@section('content') 

 <?php 
 use Illuminate\Support\Str;
 ?>
 <!-- Slider -->
 @if($slide->count())
 <header class="slider">
            <div class="main-slider">
            <div class="swiper-wrapper">
            @foreach($slide as $data)
                <div class="swiper-slide">
                    <div class="slide-image" data-background="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}"></div>
                    <div class="container">
                        <h1><br> <strong><?php echo $data->titre; ?><br></strong></h1>
                        <p><?php echo $data->description; ?></p>
                        @if($data->url)
                        <a href="{{$data->url}}">Lire la suite &rarr;</a> 
                        @endif
                    </div>
                </div>
                @endforeach
                
                <!-- end container --> 
                </div>
            </div>
            <div class="button-prev">❮</div>
            <div class="button-next">❯</div>
            <div class="swiper-pagination"></div>
            </header>
            @endif
            <!--Info Top-->
            <!--Info 1-->
            <section class="info-top">
                    <div class="tabloozellik">
                        <div class="tablo--1-ve-4">
                            <div class="paketler wow fadeInLeft" data-wow-delay="0.5s" onclick="location.href='#';" style="cursor:pointer;">
                                <div class="hizmet-kutu">
                                    <div class="kutu-duzen">
                                        <h3><a href="#"> Haute technologie </a></h3>
                                        <div class="boslukicon"></div>
                                        <div class="icon-box">
                                            <span class="border-layer"></span>
                                            <i class="flaticon-sun-1"></i>
                                        </div>
                                        <p>Nous sommes la 1ère entreprise d'installation de systèmes solaires avec des produits utilisant les dernières technologies.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Info 2-->
                        <div class="tablo--1-ve-4">
                            <div class="paketler wow fadeInLeft" data-wow-delay="0.6s" onclick="location.href='#';" style="cursor:pointer;">
                                <div class="hizmet-kutu">
                                    <div class="kutu-duzen">
                                        <h3><a href="#"> Projection </a></h3>
                                        <div class="boslukicon"></div>
                                        <div class="icon-box">
                                            <span class="border-layer"></span>
                                            <i class="flaticon-idea"></i>
                                        </div>
                                        <p>Nous fournissons le développement de projets clés en main, la configuration et la livraison de l'installation de panneaux solaires.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Info 3-->
                        <div class="tablo--1-ve-4">
                            <div class="paketler wow fadeInRight" data-wow-delay="0.7s" onclick="location.href='#';" style="cursor:pointer;">
                                <div class="hizmet-kutu">
                                    <div class="kutu-duzen">
                                        <h3><a href="#"> Installation </a></h3>
                                        <div class="boslukicon"></div>
                                        <div class="icon-box">
                                            <span class="border-layer"></span>
                                            <i class="flaticon-solar-panel-in-sunlight-1"></i>
                                        </div>
                                        <p>Nous fournissons l'installation des panneaux à temps avec des matériaux de première classe et un travail de qualité.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Info 4-->
                        <div class="tablo--1-ve-4">
                            <div class="paketler wow fadeInRight" data-wow-delay="0.8s" onclick="location.href='#';" style="cursor:pointer;">
                                <div class="hizmet-kutu">
                                    <div class="kutu-duzen">
                                        <h3><a href="#"> Service </a></h3>
                                        <div class="boslukicon"></div>
                                        <div class="icon-box">
                                            <span class="border-layer"></span>
                                            <i class="flaticon-innovation"></i>
                                        </div>
                                        <p>Notre service d'entretien, de réparation et de service technique se poursuit après l'installation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
          <!--About Top-->
            <section class="services-top">
                <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                    <h2 class="h2-baslik-hizmetler-2 wow fadeInUp" data-wow-delay="0.3s">Qui sommes-nous <strong style="font-size: 5rem; color: #278B72;"> ?</strong> </h2>
                </div>
                <div class="bosluk3"></div>
                <div class="tablo">
                    <div class="tablo--1-ve-2 wow zoomIn" data-wow-delay="0.5s">
                        <div class="galeri1">
                         <img class="imagerotate" src="{{ asset('public/img/sun.png') }}" alt="" >
                        </div>
                        <div class="galeri wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms" data-tilt>
                            <img src="{{ asset('public/img/solar-energy.png') }}" alt="Solaren Energy" class="galeri__gorsel galeri__gorsel--3 zimage">
                        </div>
                    </div>           
                    <!--Galeri Görsel Alanı-->
                    <div class="tablo--1-ve-3 wow fadeInUp" data-wow-delay="0.5s">
                        <h2 class="h2-baslik-anasayfa-ozel1 wow fadeInRight" data-wow-delay="0.6s">Service professionnel <strong>de l'approvisonnement </strong>en énergie durable</h2>
                        <div class="bosluk333"></div>
                       <p class="paragraf wow fadeInRight" data-wow-delay="0.7s">
                       {{$entreprise->excerpt}}
                       </p>
                         <div class="bosluk333"></div>
                        <img class="divider" width="120" height="15" title="divider" alt="divider" src="{{ asset('public/img/divider.jpg') }}">
                        <div class="bosluk333"></div>
                        <h2 class="h2-baslik-anasayfa-ozel1 wow fadeInRight" data-wow-delay="0.8s">Expérience <strong>Compétente</strong></h2>
                        <div class="bosluk333"></div>
                       <p class="paragraf wow fadeInRight" data-wow-delay="0.9s">
                       Notre équipe de professionnels vous accompagnera sur la route de l'avenir dans les systèmes d'énergie solaire, en combinant l'expérience et les connaissances avec l'excitation et la passion, en portant la synergie au plus haut niveau et en gardant le sens des responsabilités pour l'entreprise au premier plan.
                       </p>
                        <div class="bosluk333"></div>
                        <a href="{{route('a-propos-de-nous.index')}}" class="custom-button wow fadeInRight" data-wow-delay="1s">Lire la suite →</a>
                         <div class="bosluk3rh"></div>
                    </div>
                </div>  
            </section>

                        <!-- Tabs -->
<section class="tabs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="season_tabs">
                        <div class="season_tab">
                            <input type="radio" id="tab-1" name="tab-group-1" checked>
                            <label for="tab-1">A propos de nous</label>
                            <div class="season_content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$entreprise->image)) }}" alt="">
                                        </div>
                                        <div class="col-lg-7">
                                            <p class="listtext">
                                            {{$entreprise->excerpt}}
                                            <div class="bosluk3"></div> 
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="season_tab">
                            <input type="radio" id="tab-2" name="tab-group-1" checked>
                            <label for="tab-2">Notre Mission & Vision</label>
                            <div class="season_content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$mission->image)) }}" alt="">
                                        </div>
                                        <div class="col-lg-7">
                                            <p class="listtext">
                                            {{$mission->excerpt}}
                                            </p>
                                            <div class="bosluk3"></div> 
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        
                        <div class="season_tab">
                            <input type="radio" id="tab-4" name="tab-group-1" checked>
                            <label for="tab-4">Notre équipe</label>
                            <div class="season_content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$equipe->image)) }}" alt="">
                                        </div>
                                        <div class="col-lg-7">
                                            <p class="listtext">
                                            {{$equipe->excerpt}}
                                            </p>
                                            <div class="bosluk3"></div> 
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
            <!--Service Alanı-->
            @if($services->count())
           <section class="services1 wow fadeInUp" data-wow-delay="0.3s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                            <h2 class="h2-baslik-hizmetler-21 wow fadeInUp" data-wow-delay="0.4s"> Qu'est-ce que nous faisons <strong style="font-size: 5rem; color: #ffffff;">?</strong> </h2> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="bosluk3"></div>
            <div class="tabloservices">
            @foreach($services as $data) 
                <div class="tablo--1-ve-3 wow fade">
                    <div class="paketler2 wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="paketler2__on paketler2__on--onyazi">
                            <div class="paketler2__gorsel paketler2__gorsel--1">
                                <div class="paketler2__icerik">
                                    <div class="iconw"><i class="flaticon-solar-panel-in-sunlight"></i></div>
                                    <h3 class="baslik-3white h-yazi-margin-kucuk">{{ Str::limit($data->title, 55)}}</h3>
                                    <p class="services-kutu2--yazi wow fade">
                                    <?php echo Str::limit($data->excerpt,90); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="paketler2__on paketler2__on--arkayazi paketler2__on--arkayazi-1" style="background: linear-gradient(to right bottom, rgba(39, 139, 114, 0.842), rgba(87, 126, 183, 0.835)), transparent url({{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}) center center/cover no-repeat scroll;">
                            <div class="paketler2__pr">
                                <div class="paketler2__pr-kutu">
                                    <h3 class="baslik-sol h-yazi-margin-kucuk">{{ Str::limit($data->title, 55)}}</h3>
                                    <p class="services-kutu2--yazi wow fade">
                                    <?php echo Str::limit($data->excerpt,90); ?>
                                    </p>
                                </div>
                                <a href="{{route('nos-services.show', $data->slug)}}" class="buton buton--beyaz">Voir la suite &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Service 2--> 
            </div>
      
            </section>
            @endif
            <!--Projeler-->
            @if($projetsrealises->count())
            <section class="projeler">
                <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                    <h2 class="h2-baslik-hizmetler-2 wow fadeInUp" data-wow-delay="0.3s">Qu'avons-nous fait <strong style="font-size: 5rem; color: #278B72;"> ?</strong> </h2>
                </div>
                <div class="bosluk3"></div>
                <div class="container">  
                    <div class="carousel-classes">
                        <div class="swiper-wrapper">
                        @foreach($projetsrealises as $data) 
                            <div class="swiper-slide">
                                <div class="component-systemTabs">
                                    <div id="tab-1" data-tab-title="Web Design" class="tab-content current wow fade">
                                        <div class="cards">
                                            <div class="card wow zoomIn" data-wow-delay="0.5s" onclick="window.location.href='{{route("projets-realises.show", $data->slug)}}'">
                                                <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" alt="Project">
                                                <div class="cardContent">
                                                    <h2>{{$data->title}}</h2>
                                                    <button onclick="window.location.href='{{route("projets-realises.show", $data->slug)}}'">Tout Voir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        <!-- end swiper-slide --> 
                         
                    </div>
                    <!-- end swiper-wrapper -->
                    <div class="swiper-pagination"></div>
                    <!-- end swiper-pagination -->
                    </div>
                </div> 
            </section>
            @endif
         <!--Markalar Alanı-->
         @if($partenaires->count())
        <section class="markalar">
            <div class="h-yazi-ortalama h-yazi-margin-client">
                <h2 class="h2-baslik-hizmetler-21 wow fadeInUp" data-wow-delay="0.5s"> Ceux qui nous préfèrent <strong style="font-size: 5rem; color: #ffffff;">?</strong> </h2> 
                <div class="bosluk3"></div>
            </div>
            <div class="h-yazi-ortalama h-yazi-margin-kucuk-21 wow fadeInUp" data-wow-delay="0.6s">
              <?php $i=1; ?>
            @foreach($partenaires as $data) 
                <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" alt="{{ $data->nom}}" class="marka">
               @if($i==5) <div class="bosluk333"></div><?php $i=0; ?> @endif
                <?php $i++; ?>
                @endforeach
                 
                
            </div>
        </section>   
        @endif
           <!--Count-->
           <section class="content-section" data-background="#fafafa">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0.5s">
                   <div class="icon"><i class="flaticon-employee-1"></i></div>
                  <div class="counter-box wow fade">
                    <span class="odometer" data-count="{{setting('site.equipe') ? setting('site.equipe') : 0 }}" data-status="yes">{{setting('site.equipe') ? setting('site.equipe') : 0 }}</span>
                    <h6>Notre équipe</h6>
                  </div>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
                    <div class="icon"><i class="flaticon-networking"></i></div>
                  <div class="counter-box wow fade">
                    <span class="odometer" data-count="{{setting('site.client') ? setting('site.client') : 0 }}" data-status="yes">{{setting('site.client') ? setting('site.client') : 0 }}</span>
                    <h6>Clients satisfaits</h6>
                  </div>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="0.7s">
                    <div class="icon"><i class="flaticon-solar-panels-couple-in-sunlight"></i></div>
                  <div class="counter-box wow fade">
                    <span class="odometer" data-count="{{setting('site.termine') ? setting('site.termine') : 0 }}" data-status="yes">{{setting('site.termine') ? setting('site.termine') : 0 }}</span>
                    <h6>Projets terminés</h6>
                  </div>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="0.8s">
                    <div class="icon"><i class="flaticon-ecological-solar-panels-couple-in-sunlight"></i></div>
                    <div class="counter-box wow fade">
                      <span class="odometer" data-count="{{setting('site.encours') ? setting('site.encours') : 0 }}" data-status="yes">{{setting('site.encours') ? setting('site.encours') : 0 }}</span>
                      <h6>Projets en cours</h6>
                    </div>
                  </div>
                  <!-- end col-4 -->  
              </div>
            </div>
          </section>
        <!--Yorumlar-->
        @if($temoignages->count())
        <section class="yorumlar-alani-sayfa wow fadeInUp" data-wow-delay="0.3s">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                    <h2 class="h2-baslik-hizmetler-2 wow fadeInUp" data-wow-delay="0.4s">Qu'ont-ils dit <strong style="font-size: 5rem; color: #278B72;"> ?</strong> </h2>
                </div>
                <div class="bosluk3ps"></div>
            </div>
                <div class="col-12">
                <div class="carousel-classes">
                        <div class="swiper-wrapper">
                        @foreach($temoignages as $data) 
                    <div class="swiper-slide wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="class-box">
                        <div class="testimonial-card">
                            <div class="testimon-text">
                                {{ $data->message}}
                                <i class="fas fa-quote-right quote"></i>
                            </div>
                            <div class="testimonialimg">
                                <div class="testimonimg"><img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" alt="">
                                </div>
                                <h3 class='person'>{{ $data->nom}}</h3>
                            </div>
                            </div>
                            </div>
                            </div>
                            @endforeach
                            <!-- end swiper-slide --> 
                    </div>
                    <!-- end swiper-wrapper -->
                    <div class="swiper-pagination"></div>
                    <!-- end swiper-pagination -->
                    </div>
                </div>
                <!-- end col-12 -->
            </div>
        </div>
        </section>     
        @endif
            <!--Posts-->
            @if($formations->count())
            <section class="yorumlar-alani-sayfa wow fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <div class="row">
                <div class="col-12">
                    <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                        <h2 class="h2-baslik-hizmetler-2 wow fadeInUp" data-wow-delay="0.5s">Nos <strong>Formations</strong> </h2>
                    </div>
                </div>
                    <div class="col-12">
                    <div class="carousel-classes">
                            <div class="swiper-wrapper">
                            @foreach($formations as $data) 
                        <div class="swiper-slide wow fadeInLeft" data-wow-delay="0.6s" data-tilt>
                            <div class="post-kutu" onclick="location.href='{{route("nos-formations.show", $data->slug)}}';" style="cursor:pointer;">
                                <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" alt="Haber 1" class="haber-gorsel">
                                <div class="datesection"><span class="date"></span>&nbsp;<span class="tt">-</span>&nbsp;<span class="category">{{$data->name}}</span></div>
                                <h3 class="baslik-3 h-yazi-margin-kucuk">{{ $data->titre}}</h3>
                                <p class="post-kutu--yazi">
                                <?php echo $data->resume; ?>
                                </p>
                                <div class="h-yazi-ortalama h-yazi-margin-4">
                                    <a href="{{route('nos-formations.show', $data->slug)}}" class="custom-button">Voir la suite</a>
                                </div>
                            </div>
                                </div>
                                @endforeach
                                <!-- end swiper-slide -->
                          
                                <!-- end swiper-slide -->
                        </div>
                        <!-- end swiper-wrapper -->
                        <div class="swiper-pagination"></div>
                        <!-- end swiper-pagination -->
                        </div>
                    </div>
                    <!-- end col-12 -->
                </div>
            </div>
            <img src="{{ asset('public/img/section-bg.png') }}" class="absoluteimg2" alt="">
            </section>    
            @endif
 
  @endsection