@extends('layouts.app')
@section('title', $detail->title ?? 'Page non trouvé')
@section('content')
 
@if(isset($detail))
<!--Breadcrumb Start-->
<header class="page-header" data-background="{{ asset('public/img/page-header.jpg') }}"">
        <div class="container">
          <h2>{{$pageTitle}}</h2>
          <div class="bosluk3"></div>
          <p><a href="{{url('') }}">Accueil</a> <i class="flaticon-right-chevron"></i> <a href="{{route('projets-realises.index')}}">Nos projets réalisés</a>  </p>
        </div>
        <!-- end container --> 
      </header> 
    <!--Breadcrumb End--> 
    <main>
        <!--About Info Alanı-->
        <div class="boslukhm"></div> 
        <section class="hizmetlerr-bolumu">
        <div class="h-yazi-ozel h-yazi-margin-ozel">           
        </div>
        <div class="container">
        <div class="row">
            
                <div class="col-lg-8">
                <div class="bosluk333"></div>
                <div class="galeri wow fadeInRight" data-wow-delay="0.7s">
                    <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$detail->image)) }}" alt="<?php echo $detail->title; ?>" class="galeri__gorsel galeri__gorsel--3">
                </div>
                <div class="bosluk3"></div>
                <h2 class="h2-baslik-anasayfa-ozel-services wow fade"> <?php echo $detail->title; ?></h2>
                <div class="bosluk333"></div>
           <?php echo $detail->body; ?>
           <div class="row mb-20" id="lightgallery">
                                        <?php  
                                    if($detail->galerie)
                                    {
              $i=0; 
              $images = json_decode($detail->galerie);  
              foreach($images as $datas)
			  {
                ?>
                        <!-- Item 1 -->
                         <div class="col-sm-4 col-md-4"> 
                                        
                                        <span data-exthumbimage="{{asset('storage/app/public/'.$datas)}}" data-src="{{asset('storage/app/public/'.$datas)}}" class="icon-bx-xs check-km" title="<?php echo stripslashes($pageTitle);?>">        
                                              <a href="javascript:void();" class=""> <img src="{{asset('storage/app/public/'.$datas)}}" alt="images" ></a>
                                            </span> 
                            </div>
                        <?php
                $i++; 
                }
            }
                    ?>
                                        </div>
                <div class="bosluk333"></div>
                <div class="bosluk3"></div>
            </div>

            <div class="col">
            @include('sidebar')
               
                </div>
                
        </div>
    </div>
        </section>
   </main>
  
      @else 

@include('layouts.404')

@endif

@endsection


 