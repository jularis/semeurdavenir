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
          <p><a href="{{url('') }}">Accueil</a> <i class="flaticon-right-chevron"></i> {{$pageTitle}}</p>
        </div>
        <!-- end container --> 
      </header> 
    <!--Breadcrumb End--> 
    <main>
    <div class="bosluk3"></div>
    <div class="tabloozellik">
        <div class="component-systemTabs">
            <div class="tabs-container">
            <div id="tab-1" data-tab-title="Nos projets réalisés" class="tab-content current wow fadeInUp">
                <div class="cards">
                @foreach($res as $data)
                <div class="card wow zoomIn" data-wow-delay="0.5s" onclick="window.location.href='{{route("projets-realises.show", $data->slug)}}'">
                <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$data->image)) }}" alt="Project">
                <div class="cardContent">
                    <h2>{{$data->title}}</h2>
                    <button onclick="window.location.href='{{route("projets-realises.show", $data->slug)}}'">Tout Voir</button>
                </div>
                </div>
                 @endforeach
            </div>
            </div>
            </div>
        </div>
    </div>

    </main>
 
    @else

@include('layouts.404')
 
@endif

@endsection