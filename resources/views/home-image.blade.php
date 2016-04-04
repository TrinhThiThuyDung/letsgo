@extends('layout/main-layout')

@section('title','Nhà Ảnh')


@section('link')

  <link rel="stylesheet" href="{{url('css/style-home.css')}}">
  <link rel="stylesheet" href="{{url('css/gallery-image.css')}}">

  <script src="{{url('js/albums.js')}}"></script>
   
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
  <!--   <div class="row" style=" margin-top: 15px; margin-bottom: 30px;"> -->
      <!-- <div class="col-md-12"> -->
           <div id="album " class="album-gal carouselGallery-col-60" title="Album title">
              <div class=" wrap-images  item-1 ">
                <div class="box-1">
                  <div class="photo full carouselGallery-col-1 carouselGallery-carousel" data-index="0" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-1.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-1.jpg')}}'); background-position: 50% 50%;">
                 <!--    <a class="photo-link" data-href = "{{url('../images/home-images/photo-1.jpg')}}" data-slide='9' href="{{url('../images/home-images/photo-1.jpg')}}">

                    </a> -->
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
                      <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="1" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-9.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-9.jpg')}}'); background-position: 50% 50%;">
                           <!--   <a class="photo-link" data-href = "{{url('../images/home-images/photo-9.jpg')}}" data-slide='8' href="{{url('../images/home-images/photo-9.jpg')}}">
                             </a> -->
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
                        <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="2" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-2.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-2.jpg')}}'); background-position: 50% 50%;">
                           <!--   <a class="photo-link" data-href = "{{url('../images/home-images/photo-2.jpg')}}" data-slide='7' href="{{url('../images/home-images/photo-2.jpg')}}">
                             </a> -->
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
                      <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="3" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-3.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-3.jpg')}}'); background-position: 50% 50%;">
                        <!--   <a class="photo-link" data-href = "{{url('../images/home-images/photo-3.jpg')}}" data-slide='6' href="{{url('../images/home-images/photo-3.jpg')}}">
                          </a> -->
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
                     <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="4" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-4.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-4.jpg')}}'); background-position: 50% 50%;">
                  <!--   <a class="photo-link" data-href = "{{url('../images/home-images/photo-4.jpg')}}" data-slide='5' href="{{url('../images/home-images/photo-4.jpg')}}">

                    </a> -->
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
                     <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="5" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-5.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-5.jpg')}}'); background-position: 50% 50%;">
                   <!--  <a class="photo-link" data-href = "{{url('../images/home-images/photo-5.jpg')}}" data-slide = '4' href="{{url('../images/home-images/photo-5.jpg')}}">
                    </a> -->
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
                     <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="6" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-6.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-6.jpg')}}'); background-position: 50% 50%;">
                  <!--   <a class="photo-link" data-href = "{{url('../images/home-images/photo-6.jpg')}}" data-slide = '5'  href="{{url('../images/home-images/photo-6.jpg')}}">
                    </a> -->
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
                       <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="7" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-7.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-7.jpg')}}'); background-position: 50% 50%;">
                  <!--   <a class="photo-link" data-href = "{{url('../images/home-images/photo-7.jpg')}}" data-slide = '6'  href="{{url('../images/home-images/photo-7.jpg')}}">
                    </a> -->
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
                      <div class="photo carouselGallery-col-1 carouselGallery-carousel" data-index="8" data-username="visitsweden" data-imagetext="Photographer: @conny_lundstrom" data-location="" data-likes="3144" data-imagepath="{{url('../images/home-images/photo-8.jpg')}}" data-posturl="https://instagram.com/p/9_dViYwVWJ/"  style="background-image: url('{{url('../images/home-images/photo-8.jpg')}}'); background-position: 50% 50%;">
                     <!--    <a class="photo-link" data-href = "{{url('../images/home-images/photo-8.jpg')}}" data-slide = '7'  href="{{url('../images/home-images/photo-4.jpg')}}">
                        </a> -->
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
@endsection