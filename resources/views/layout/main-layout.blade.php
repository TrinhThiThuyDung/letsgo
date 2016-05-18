<!DOCTYPE html>
<html lang="en">
<head>
<title>Let's Go | @yield('title')</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="{{url('favicon.ico')}}" />

 <!-- ===================== CSS ==================== -->
    <link rel="stylesheet" href="{{url('css/grid.css')}}">
    <link rel="stylesheet" href="{{url('fonts/latin.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('css/CSSupload/jquery.fileupload-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/CSSupload/jquery.fileupload.css')}}">
    
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="{{url('css/jquery.fileupload-noscript.css')}}"></noscript>  
    <noscript><link rel="stylesheet" href="{{url('css/jquery.fileupload-ui-noscript.css')}}"></noscript>

   
    <script src="{{url('js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>



 @yield('link')

</head>
<body id="imagePage" data-spy="scroll" data-target=".navbar" data-offset="50">

@yield('content')


</body>
</html>
<!-- ========================= JS ======================== -->
   <!--  <script src="{{url('js/jquery-1.12.0.min.js')}}"></script> -->
    <script type="text/javascript" src="{{url('js/jsUpload/vendor/jquery.ui.widget.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jsUpload/tmpl.min.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/load-image.all.min.js')}}"></script> 
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.blueimp-gallery.min.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/canvas-to-blob.min.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.iframe-transport.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.fileupload.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.fileupload-process.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.fileupload-image.js')}}"></script>
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.fileupload-validate.js')}}"></script> 
   <script type="text/javascript" src="{{url('js/jsUpload/jquery.fileupload-ui.js')}}"></script>
 
   
    <script src="{{url('js/jsUpload/main.js')}}"></script>
    
    <script type="text/javascript" src="{{url('js/api/main.js')}}"></script>
    <!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td style="padding: 18px; border-top: 1px solid #ddd; ">
            <span class="preview">
             <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="margin: 0px; height: 3px;"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>

            </span>
        </td>
        <td style="text-align: center; display: inline;">
            {% if (!i && !o.options.autoUpload) { %}
                <button class="start more" style="padding: 7px; width: 47%; border: none; background: rgba(240, 248, 255, 0);" disabled>
                    <span class="span-start" style=""></span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="cancel" style="padding: 7px; width: 47%; border: none; background: rgba(240, 248, 255, 0);">
                    <span class="span-cancel"></span>
                </button>
            {% } %}
        </td>
    </tr>
     
{% } %}

</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
  {% if (file.thumbnailUrl) { %}
    <tr class="template-download fade">
        <td style="display: inline-block;">
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}"  download="{%=file.name%}" data-gallery>
                      <img src="{%=file.thumbnailUrl%}"></a>
                  {% } %}
            </span>
        </td>
        <td style="width: 100%;">
            {% if (file.deleteUrl) { %}
                <button class="delete" style="padding: 7px; width: 47%; border: none; background: rgba(240, 248, 255, 0);" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <span class="span-delete"></span>
                </button>
                 <button class="cancel" style="padding: 7px; width: 47%; border: none; background: rgba(240, 248, 255, 0);">
                    <span class="span-cancel"></span>
                </button>
            {% } else { %}
                <button class="cancel" style="padding: 7px; width: 100%; border: none; background: rgba(240, 248, 255, 0);">
                    <span class="span-cancel"></span>
                </button>
            {% } %}
        </td>
    </tr>
      {% }else{ %}
         <tr class="template-download fade" style="width: 250px; height: 300px">
            <td style="display: inline-block; width: 100%; height: 100%; background: #A6AFB7;">
               <span class="error-upload" style="background: url(/images/icon/error.svg); background-position: center center; display: inline-block; width: 100%; height: 100%; background-size: 142px; background-repeat: no-repeat;">
               </span>
            </td>
            <td style="width: 100%; height: 50px;">
               <button class="cancel" style="padding: 7px; width: 100%; border: none; background: rgba(240, 248, 255, 0);">
                    <span class="span-cancel"></span>
                </button>
            </td>
        </tr>
        {% } %}
{% } %}
</script>
@yield('script')