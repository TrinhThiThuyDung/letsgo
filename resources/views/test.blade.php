<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />

  <title>Instagram-like Filters with jQuery | Tutorialzine Demo</title>
  <link href="{{url('css/filer/style.css')}}" rel="stylesheet" />

  <!-- Include the Yanone Kaffeesatz font -->
  <link href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200" rel="stylesheet" />

</head>
<body>

  <h1>Instagram <b>Filters</b></h1>
  <div id="photo"></div>

  <div id="filterContainer">
    <ul id="filters">
      <li> <a href="#" id="normal">Normal</a> </li>
      <li> <a href="#" id="vintage">Vintage</a> </li>
      <li> <a href="#" id="lomo">Lomo</a> </li>
      <li> <a href="#" id="clarity">Clarity</a> </li>
      <li> <a href="#" id="sinCity">Sin City</a> </li>
      <!-- 14 More filters go here -->
    </ul>
  </div>

  <!-- Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="{{url('js/filer/filereader.min.js')}}"></script>
  <script src="{{url('js/filer/caman.full.js')}}"></script>
  <script src="{{url('js/filer/jquery.mousewheel.min.js')}}"></script>
  <script src="{{url('js/filer/script.js')}}"></script>

</body>
</html>