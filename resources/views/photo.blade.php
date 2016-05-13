@extends('layout/main-layout')

@section('title','Nhà Ảnh')


@section('link')

  <link rel="stylesheet" href="{{url('css/style-home.css')}}">
  <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('css/albums.css')}}">

  <script src="{{url('js/albums.js')}}"></script>
  <script type="text/javascript" src="{{url('js/api/action.js')}}"></script>
  <script type="text/javascript" src="{{url('js/api/main.js')}}"></script>
   
@endsection


@section('content')

    <!-- ==================== HEADER LAYOUT ==================== -->
   <div id="header" class="welcome" style="height: 300px;">
        <div class="container">
          <div class="row">
       
          <div class="welcome-content">
           <div class="wel-img">
             <img src="{{url('/images/cat-logo1.png')}}">
           </div>
           <div class="wel-content"></div>
            </div>
      
      </div>
    </div>
 </div>
    <!-- ==================== HEADER LAYOUT ====================== -->

    <!-- ==================== CONTENT LAYOUT ==================== -->
  <div class="pageWidth">
    @include('layout/nagavition')
     <div class="pageContent">
     
 <div id="gallerry-images">
  <div class="container gallerry-image" >
      <div id="album " class="album-gal carouselGallery-col-60">
        <div class=" wrap-images  item-1 ">
          <div class="box-1">
            <div class="photo full carouselGallery-col-1 carouselGallery-carousel" data-index="0" data-id = '247' data-username="Dung Trinh" data-imagetext="Photographer: @conny_lundstrom" data-location="Hà Nội" data-imagepath="{{url('/images/home-images/photo-1.jpg')}}">
                <a class="photo-link" href="#"><img src="{{url('/images/home-images/photo-1.jpg')}}"></a>
                  <div class="action">
                    <div class="view">
                      <a href="{{url('web/photo/action')}}" class="like">
                        <span class="icon icon-like"></span>
                      </a>
                      <a href="" class="add-to-gal">
                          <span class="icon-add-gal"></span>
                      </a>
                    </div>
                        <div class="info">
                          <div class="inside">
                            <div class="about-img">
                              <span class="about-img">
                                <a href="" class="title-img"> Anh dep</a>
                                by
                                <a href="" class="by">Tieu Long Hoang</a>
                              </span>
                            </div>
                            <time>
                              <span class="hour" data-bind = "hour">1h ago</span>
                              <span class="t-detail" data-bind = "t-detail">20/03</span>
                            </time>
                          </div>
                        </div>
                    </div>
                  </div>

                </div>
              </div>
          <div class="wrap-images item-3">
             <div class="item-big">
                    <div class="box-1">
                      <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="1" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('/images/home-images/photo-9.jpg')}}" data-comment = "<?php $comment = array('name' => 'Thuy Dung', 'content' => 'test test test');?>" data-posturl="https://instagram.com/p/9_dViYwVWJ/">
                             <a class="photo-link" href="#"><img src="{{url('/images/home-images/photo-9.jpg')}}"></a>
                         <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
                 <div class="item-small">
                    <div class="small-1">
                      <div class="box-1">
                        <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="2" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('/images/home-images/photo-2.jpg')}}" data-comment = "<?php $comment = array('name' => 'Thuy Dung', 'content' => 'test test test'); ?>" data-posturl="https://instagram.com/p/9_dViYwVWJ/">
                             <a class="photo-link" href="#"><img src="{{url('/images/home-images/photo-2.jpg')}}">
                             </a>
                              <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="small-2">
                    <div class="box-1">
                      <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="3" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('/images/home-images/photo-3.jpg')}}" data-comment = "<?php $comment = array('name' => 'Thuy Dung', 'content' => 'test test test'); ?>" data-posturl="https://instagram.com/p/9_dViYwVWJ/">
                          <a class="photo-link" href="#"><img src="{{url('/images/home-images/photo-3.jpg')}}">
                          </a>
                          <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                      </div>
                    
                    </div>
                  </div>
                 </div>
              </div>
              <div class="wrap-images item-3" style="height: 300px;">

                <div class="medium m1">
                  <div class="box-1">
                     <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="4" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('/images/home-images/photo-4.jpg')}}" data-comment = "<?php $comment = array('name' => 'Thuy Dung', 'content' => 'test test test'); ?>" data-posturl="https://instagram.com/p/9_dViYwVWJ/">
                    <a class="photo-link" href="#"><img src="{{url('/images/home-images/photo-4.jpg')}}">

                    </a>
                    <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                  </div>
                  </div>
                </div>
                 <div class="medium m2">
                  <div class="box-1">
                     <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="5" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="Hà Nội" data-likes="3144" data-imagepath="{{url('/images/home-images/photo-5.jpg')}}" data-comment = "<?php $comment = array('name' => 'Thuy Dung', 'content' => 'test test test');?>" data-posturl="" >
                    <a class="photo-link" href="#"><img src="{{url('/images/home-images/photo-5.jpg')}}">
                    </a>
                    <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                  </div>
                  </div>
                </div>
                 <div class="medium m3">
                  <div class="box-1">
                     <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="6" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('/images/home-images/photo-6.jpg')}}" data-comment = "<?php $comment = array('name' => 'Thuy Dung', 'content' => 'test test test');  ?>" data-posturl="https://instagram.com/p/9_dViYwVWJ/">
                    <a class="photo-link"  href=""><img src="{{url('/images/home-images/photo-6.jpg')}}">
                    </a>
                    <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                  </div>
                  </div>
                </div>
              </div>
                <div class=" wrap-images item-2">
                   <div class="item-big">
                    <div class="box-1">
                       <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="7" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('/images/home-images/photo-7.jpg')}}" data-comment = "<?php $comment = array('name' => 'Thuy Dung', 'content' => 'test test test'); ?>" data-posturl="https://instagram.com/p/9_dViYwVWJ/">
                    <a class="photo-link"  href="#"><img src="{{url('/images/home-images/photo-7.jpg')}}">
                    </a>
                    <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                  </div>
                    </div>
                   </div>
                 <div class="item-small">
                    <div class="box-1">
                      <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="8" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('/images/home-images/photo-8.jpg')}}" data-comment = "<?php $comment = array('name' => 'Thuy Dung', 'content' => 'test test test');  ?>" data-posturl="https://instagram.com/p/9_dViYwVWJ/">
                        <a class="photo-link" href="#"><img src="{{url('/images/home-images/photo-4.jpg')}}">
                        </a>
                        <div class="action">
                              <div class="view">
                                  <a href="" class="like">
                                    <span class="icon icon-like"></span>
                                    <span class="icon icon-love"></span>
                                  </a>
                                  <a href="" class="add-to-gal">
                                    <span class="icon-add-gal"></span>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="inside">
                                  <div class="about-img">
                                  <span class="about-img">
                                      <a href="" class="title-img"> Anh dep</a> by
                                    <a href="" class="by">Tieu Long Hoang</a>
                                  </span>
                                  </div>
                                  <time>
                                      <span class="hour" data-bind = "hour">1h ago</span>
                                      <span class="t-detail" data-bind = "t-detail">20/03</span>
                                  </time>
                                </div>
                              </div>
                          </div>
                      </div>
                    </div>
                 </div>
                </div>
                <div class="wrap-images "></div>
            </div>
          </div>
        </div>  
    </div>
  </div>
  @include('layout/footer-layout')

  @endsection

  @section('script')
  

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
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
@endsection