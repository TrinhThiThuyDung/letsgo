@extends('layout/main-layout')


@section('title')
Photo
@endsection
 @section('link')

    <link rel="stylesheet" href="{{url('css/style-home.css')}}">
    <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">

    <script type="text/javascript" src="{{url('js/api/main.js')}}"></script>
 @endsection

@section('content')
  
  @include('layout/nagavition')

  <div class="photo-show">
  	
  </div>
  <div class="photo-detail"></div>
 
   @include('layout/footer-layout')
@endsection