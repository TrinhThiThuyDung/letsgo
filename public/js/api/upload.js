$(document).ready(function(){

		var photo = $('#photo');
		var filters = $('#filters li a'),
			filterContainer = $('#filterContainer');
		var originalCanvas = null;
		var	maxWidth = 800, maxHeight = 800;
		var canvas = null;

	$('#upload-img').on("change", function(e){

		var file = this.files[0];

		var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];

		 if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
		 	document.getElementById("fileupload").reset();
            swal("Error", "Your image format is incorrect, select the correct image like format 'jpeg', 'jpg', 'png', 'gif' or 'bmp' :)", "error");
        }else{

		$('.upload-area').fadeOut();
		$('.table-addfile').fadeIn();
		$('.right-upload').fadeIn();
		$('.change-img').fadeIn();

		var  imgWidth, newWidth, imgHeight, newHeight, ratio;
		
		var img = new Image();
	
		photo.find('canvas').remove();
		filters.removeClass('active');

		img.onload = function() {
			imgWidth = this.width;
			imgHeight = this.height;
				// Calculate the new image dimensions, so they fit
					// inside the maxWidth x maxHeight bounding box

					if (imgWidth >= maxWidth || imgHeight >= maxHeight) {

						// The image is too large,
						// resize it to fit a 500x500 square!

						if (imgWidth > imgHeight) {

							// Wide
							ratio = imgWidth / maxWidth;
							newWidth = maxWidth;
							newHeight = imgHeight / ratio;

						} else {

							// Tall or square
							ratio = imgHeight / maxHeight;
							newHeight = maxHeight;
							newWidth = imgWidth / ratio;

						}

					} else {
						newHeight = imgHeight;
						newWidth = imgWidth;
					}
					originalCanvas = $('<canvas>');
				
					var originalContext = originalCanvas[0].getContext('2d');

					// Set the attributes for centering the canvas

					originalCanvas.attr({
						width: newWidth,
						height: newHeight
					});

					// Draw the dropped image to the canvas
					// with the new dimensions
					originalContext.drawImage(this, 0, 0, newWidth, newHeight);


					filterContainer.fadeIn();

					// Trigger the default "normal" filter
					filters.first().click();
			};

			img.src = URL.createObjectURL(e.target.files[0]);
		}
	});

	filters.click(function(e){

		e.preventDefault();

		var f = $(this);

		if(f.is('.active')){
			// Apply filters only once
			return false;
		}

		filters.removeClass('active');
		f.addClass('active');

		// Clone the canvas
		var clone = originalCanvas.clone();

		// Clone the image stored in the canvas as well
		clone[0].getContext('2d').drawImage(originalCanvas[0],0,0);


		// Add the clone to the page and trigger
		// the Caman library on it

	

		var effect = $.trim(f[0].id);

		

		Caman(clone[0],clone[0].toDataURL("image/jpeg;", 1.0), function () {

			// If such an effect exists, use it:

			if( effect in this){
				
				this[effect]();
				this.render();
				 
			}
		photo.find('canvas').remove().end().append(clone[0]);

		canvas = clone[0];

		});

	});

	// Use the mousewheel plugin to scroll
	// scroll the div more intuitively

	filterContainer.find('ul').on('mousewheel',function(e, delta){

		this.scrollLeft -= (delta * 50);
		e.preventDefault();

	});

	$('.change-img').click(function(e){

		photo.find("canvas").remove();
		filters.removeClass('active');
		originalCanvas = null;

		document.getElementById("fileupload").reset();

		$('.upload-area').fadeIn();
		$('.table-addfile').fadeOut();
		$('.right-upload').fadeOut();
		$('.change-img').fadeOut();

		e.preventDefault();
	});

	$('#button-upload').click(function(e){
		var data = {};
		    data.img = photo.find("canvas")[0].toDataURL("data:image/jpeg;base64,", 1.0 ),
			data.caption = $('#description').val(),
			data.kind = $('#image_kind').val(),
			data.location = $('#location').val();

		$.ajax({
			type: 'post',
			data: {data: data},
			url: $('#fileupload').attr("action"),
			dateType: 'json',
			success: function( result ){
				if (result.status === 'success') {
					document.location.href  = "/web/photo";
				}else{
					swal.showInputError("Error: "+result.content);
				}
			},
			error: function(xhr,status,error ){
				swal.showInputError("Trạng thái: "+status+"\n Lỗi: "+error);
			}
		});
        
		return false;
	});
});