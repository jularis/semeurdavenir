@extends('layouts.app')
@section('title', $pageTitle)
@section('content') 
<?php 
 use Illuminate\Support\Str;
 ?>
@if($res->count())

<!--Breadcrumb Start-->
<header class="page-header" data-background="{{ asset('public/img/page-header.jpg') }}"">
        <div class="container">
          <h2>{{$pageTitle}}</h2>
          <div class="bosluk3"></div>
          <p><a href="{{url('') }}">Accueil</a> <i class="flaticon-right-chevron"></i> Nos formations</p>
        </div>
        <!-- end container --> 
      </header> 
    <!--Breadcrumb End--> 
<!-- Start Courses Area -->
<section class="courses-area ptb-100">
            <div class="container">
            <div class="h-yazi-ortalama h-yazi-margin-orta-3">
            <h2 class="h2-baslik-hizmetler-2 wow fadeInUp" data-wow-delay="0.4s">Qu'est-ce que nous faisons <strong style="font-size: 5rem; color: #365F9B;"> ?</strong> </h2>
        </div>

                <div class="row">
                   
                    @foreach($res as $data)
                    <div class="col-lg-4 col-md-4">
                        <div class="single-courses-item mb-30">
                            <div class="courses-image" style="height: 225px;">
                                <a href="{{route('nos-formations.show', $data->slug)}}" class="d-block"><img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" alt="image"></a>
                            </div>

                            <div class="courses-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="course-author d-flex align-items-center">
                                        <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" class="shadow" alt="image">
                                        <span>{{ $data->formateur }}</span>
                                    </div>
 
                                </div>

                                <h3 style="height: 60px;"><a href="{{route('nos-formations.show', $data->slug)}}" class="d-inline-block">{{ Str::limit($data->titre, 55)}}</a></h3>
                                <p><?php echo Str::limit($data->resume,110); ?></p>
                            </div>

                            <div class="courses-box-footer">
                                <ul> 
                                <li class="students-number">
                                        <i class="bx bx-calendar"></i> Date : {{ date('d-m-Y', strtotime($data->date_formation))}}
                                    </li>
                                    <li class="courses-price" style="max-width: 50% !important;
    flex: 0 0 50% !important;">
                                    {{ number_format($data->prix,0,'',' ') }} FCFA
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
@endforeach
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center"> 
                        <div class="bosluk3"></div>
                        {{ $res->links('pagination::bootstrap-4') }}  
                        <div class="bosluk3"></div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- End Courses Area -->
    @else

@include('layouts.404')
 
@endif

@endsection