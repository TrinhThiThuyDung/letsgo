$(document).ready(function(){


	$('.photo-link').click(function(){

		
		var this_img = $(this).data("href");

		setOverlay(this_img);
		$('.overlay').slideDown("slow");

		sliderAlbum();

		$('.close-btn').on("click", function(){
		
			$('.overlay').slideUp(600);
			
			setTimeout(function(){ 
				DeleteOverlay();
			    $('.overlay').remove();

			}, 600);
			
		});
		return false;
	});



	function getListImages(this_link){
		


	}

	function setOverlay(this_img){
		$('#myNav').css("display" , "none");
		$('#imagePage').css("overflow" , "hidden");


		$('#imagePage').append(setAlbumLayout(this_img));
	}
	function DeleteOverlay(){
		$('#myNav').css("display" , "block");
		$('#imagePage').removeAttr("style");
	}
	function setAlbumLayout(this_img){
		
		
		var overlay_start = "<div class = 'overlay'> ";

		var slide = "<div  id='myCarousel'  class = ' carousel slide' data-ride='carousel' data-interval='false' style = 'width: 100%; height: 100%;'>";
		var panel = setPanelAlbum();

		var images = sliderImages(this_img);

		var album = slideImagesAlbum(this_img);

		var overlay_end = "</div></div>";

		return overlay_start + slide + panel  + images +album+ overlay_end;

	}

	function setPanelAlbum(){
		var panel = "<div class = 'album_panel'>" + 
						"<div class = 'panel-button'> " + 
						 	"<ul style ='text-align: center;'>"+ 
						 			"<li style = 'position: relative; right: 142px;'> <a class = 'carousel-control' href='#myCarousel' role='button' data-slide='prev' style = ' display:inline-block; width: 100%; height: 100%;'>"+
                          			 			"<span class = 'prev'> </span>"+
                          			 		"</a>"+
                          			"</li>"+
						 			"<li style = 'margin-left: 55px;'> <a href='#' style = 'width: 100%; height: 100%;'>"+
                            				"<span class='icon-like' style = 'background-size: 25px 25px;display: inline-block;background-repeat: no-repeat;width: 100%;height: 100%;'></span>"+
                            				"<span class='icon-love' style = 'background-size: 25px 25px;display: none;background-repeat: no-repeat;width: 100%;height: 100%;'></span>"+
                          				"</a>"+
                          			"</li>"+
                          			"<li> 	<a href = '#'>"+
                          						"<span class='icon-add-gal'></span>"+
                          					"</a>"+
                          			"</li>"+
                          			"<li> 	<a href='#' style = 'display:inline-block; width: 100%; height: 100%;'>"+
                          						"<span class = 'facebook'></span>"+
                          					"</a>"+
                          			"</li>"+
                          			"<li> <a href='#' style = ' display:inline-block; width: 100%; height: 100%;'> "+
                          						"<span class = 'twitter'></span>"+
                          					"</a>"+
                          			"</li>"+
                          			"<li style ='position: relative; left: 213px;'> <a class = 'carousel-control' href='#myCarousel' role='button' data-slide='next'  style = ' display:inline-block; width: 100%; height: 100%;'>"+
                          						"<span class = 'next'> </span>"+
                          					"</a>"+
                          			"</li>"+
                          			"<li style ='float: right;'> <a href='#' class = 'close-btn'  style = ' display:inline-block; width: 100%; height: 100%;'>"+
                          						"<span class = 'close'> </span>"+
                          					"</a>"+
                          			"</li>"+
                          			" </ul> </div> </div>";
		return panel;
	}

	function sliderAlbum(this_img){
		
		$('.next').on("click", function(){

		var img = $('.album').find("div.album-image");

		var img_active = $('.album').find('div.active-img').data('slide');
		var img_active_link = $('.album_show').find('div.active').data('href');

		var next_img = getNextImg(img, img_active);
			
		changeActivePhoto(next_img);  /*To album*/
		nextToNextPhoto(img_active_link); /*Photo show*/

		});

		$('.prev').on("click", function(){
			var img = $('.album').find("div.album-image");

			var img_active = $('.album').find('div.active-img').data('slide');

			var prev_img = getPrevImg(img, img_active);
			changeActivePhoto();
			
		})

	}
	function getNextImg(arr_img, img, this_img){
		var count = 0;

		while(count < arr_img.length){
			var data = $('.album-content').find(arr_img[count]).data("slide");

			if(data == img+1){
				return arr_img[count];
			}
			count++;
		}
		return arr_img[0];
	}
	function getPrevImg(arr_img, img){
		var count = 0;

		while(count < arr_img.length){
			var data = $('.album-content').find(arr_img[count]).data("slide");

			if(data == img-1){
				return arr_img[count];
			}
			count++;
		}
		return arr_img[count-1];
	}
	function sliderImages(this_img){
		var images = "<div class = 'album_show carousel-inner' role='listbox'>"+
					"<div class = 'item active' data-href='"+this_img+"'><img src = '"+this_img+"'style = 'display: inline-block; width: 100%; height:100%;' ></div>"+
					"</div>";

		return images;
	}

	function slideImagesAlbum(this_img){
		var album =  "<div class = 'album'><div class = 'album-content'>";
		var images = "";

		var arr_img_link = getAllPhoto();
		var count = index_curr = arr_img_link.indexOf(this_img);
		
		if(arr_img_link.length < 8){
			var total = arr_img_link.length;
		}
		else{
			var total = 8;
		}
		while(count < total){
			
			if(count==index_curr) {
				var active = "active-img";
			}
			else{
				var active = "";
			}
			images += "<div data-slide = '"+count+"' class = 'album-image "+active+"'> <a href = '#' style = 'display: inline-block; width: 100%; height:100%;'> <img src='"+arr_img_link[count]+"'></a></div>";
			
			count++;
		}
		 					
		var album_end =  "</div></div>";
		return album + images + album_end;
	}

	function getAllPhoto(){
		var arr_img = $('a.photo-link');
		var arr_img_link = [];
		var count = 0;

		while(count < arr_img.length){

			var img = $('.photo').find(arr_img[count]).data('href');
			arr_img_link.push(img);

			count++;
			}
			return arr_img_link;
	}
	function nextPhoto(this_img){
		var arr_img_link = getAllPhoto();
		var index_curr = arr_img_link.indexOf(this_img);

		if(index_curr == arr_img_link.length - 1){
			return arr_img_link[0];
		}else if(index_curr < arr_img_link.length - 1){
			return arr_img_link[index_curr+1];
		}
		
	}
	function prevPhoto(this_img){
		var arr_img_link = getAllPhoto();
		var index_curr = arr_img_link.indexOf(this_img);

		return arr_img_link[index_curr-1];
	}
	function changeActivePhoto(img){
		$('.album').find("div.active-img").removeClass("active-img");
			$('.album-content').find(img).addClass("active-img");
	}

	function nextToNextPhoto(this_img){
		var images = "<div class = 'item'> <img src = '"+nextPhoto(nextPhoto(this_img))+"'style = 'display: inline-block; width: 100%; height:100%;' ></div>";
		$('.album_show').append(images);
	}	
});
