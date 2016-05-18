@extends('layout/main-layout')


@section('title')
Photo
@endsection
 @section('link')

    <link rel="stylesheet" href="{{url('css/style-home.css')}}">
    <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">
 @endsection

@section('content')
  @include('layout/nagavition')
  <div class="photo-show">
  	
  </div>
  <div class="photo-detail"></div>
   @include('layout/footer-layout')
@endsection