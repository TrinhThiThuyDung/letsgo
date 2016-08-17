$(document).ready(function(){

  $('[data-toggle="tooltip"]').tooltip(); 
  
   $('#like-user').click(function(event){
      window.localStorage.setItem("click", "like-user");
   }); 
   $('#update-user').click(function(event){
      window.localStorage.setItem("click", "update-user"); 
   });
    $('#follow-user').click(function(event){
      window.localStorage.setItem("click", "follow-user");
   });

   if(window.localStorage.getItem("click") === 'like-user') {
      $('#like-user-tab').trigger('click'); 
      window.localStorage.removeItem("click");
   } 
   if(window.localStorage.getItem("click") === 'update-user') {
      $('#update-user-tab').trigger('click'); 
      window.localStorage.removeItem("click");
   } 
   if(window.localStorage.getItem("click") === 'follow-user') {
      $('#follow-user-tab').trigger('click'); 
      window.localStorage.removeItem("click");
   }
 /*==================== SIGNOUT =====================*/
	function signOut() {
		var signOut = $('#signout');
        if (signOut) {
            signOut.click(function(){
                window.localStorage.clear();
                window.sessionStorage.clear();
            });

        }
	}

 /*==================== AVATAR =====================*/
  
	$('input#avatar:file').change(function(event){
		 var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
       var url_current = window.location.href;

        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            swal("Có lỗi", "Định dạng ảnh của bạn bị sai, hãy chọn ảnh đúng định dạng  'jpeg', 'jpg', 'png', 'gif' hoặc 'bmp' :)", "error");
        }else{
          $('form#formUpdateAvatar').submit();
        }
});
/*====================== DELETE IMAGE =====================*/
$('.delete').click(function(event){
   var url = $(this).attr("href");
   var photo = $(this).parents(".photo");
   swal({   
      title: "Bạn có chắc muốn xóa nó đi?",   
      text: "Bạn sẽ không còn bức ảnh này trên Let's Go nữa!",   
      type: "warning",   
      showCancelButton: true,   
      confirmButtonColor: "#DD6B55",   
      confirmButtonText: "Phải, Hãy xóa nó đi!",   
      cancelButtonText: "Không, Tôi muốn giữ nó!",   
      closeOnConfirm: false,   
      closeOnCancel: false }, function(isConfirm){  
          if (isConfirm) {
            
          $.ajax({
            type: 'delete',
            url: url,
            success:function( result ){
              if ( result['status'] === "success") {
                  $(photo).fadeOut(700, function() {
                     $(photo).remove();
                  });
                  swal("Đã xóa!", "Bạn có thể đăng lại ảnh bất cứ lúc nào!.", "success");  
              }else if( result['status'] === 'error'){
               swal("Có lỗi xãy ra khi xóa", "Bức ảnh vẫn còn :)", "error");
              }
            }
         });     
            
      } else {    
       swal("Đã dừng lại", "Bức ảnh vẫn còn :)", "error");   } 
    });

   event.preventDefault();
   event.stopImmediatePropagation();
})
 /*==================== UPDATE PROFILE =====================*/
   $('form#formUpdateProfile').submit(function(event ){ 
   	 	var user = getAllDataOfForm();
   	 	var url = $(this).attr("action");
   	 	
   	 	$.ajax({
   	 		type: 'post',
   	 		data: {user: {      last_name: user['last_name'],
   	 		   	 				first_name: user['first_name'],
   	 		   	 				phone: user['phone'], 
   	 		   	 				address: user['address'],
   	 		   	 				birthday: user['birthday'],
   	 		   	 				position: user['position'],
   	 		   	 				gender: user['gender']}
   	 		   	 			},
   	 		url: url,
   	 		dataType: 'json',
   	 		success: function(result){

   	 			if (result['status'] === "nothing") {
   	 				$('#result').text("Không có gì để cập nhật");
   	 			}else if(result['status' === "error"]){
   	 				$('#result').text("cập nhật lỗi");
   	 			}else{
   	 				$('#result').text("Cập nhật thành công");
   	 				ressetAllInput();
   	 			}
   	 		},
   	 		error: function(xhr,status,error){
   	 			$('#result').val("Lỗi cập nhập");
   	 		}
   	 	});
   	 
   		event.preventDefault(); 
		event.stopImmediatePropagation();
   });

   var getAllDataOfForm = function(){
 	var user = [];
   	  user['last_name'] = $('input[name="last_name"]').val();
   	  user['first_name'] = $('input[name="first_name"]').val();
   	  user['phone'] = $('input[name="phone"]').val();
   	  user['address'] = $('input[name="address"]').val();
   	  user['birthday'] = $('input[name="birthday"]').val();
   	  user['position'] = $('input[name="position"]').val();
   	 
   	  user['gender'] = $('input[name="gender"]:checked').val();

   	  return user;
   }
   var ressetAllInput = function(){
   		$('form#formUpdateProfile')[0].reset();
    };

 /*==================== CATEGORY IMAGE PAGE =====================*/
    $('.category').click(function(){
       var href = $(this).children().attr("href");
       var category_name = href.substring(1, href.length );
       var href = window.location.href;
       var url = href.substring(0, 44)+category_name;

       $.ajax({
         type: 'post',
         data: {category_name: category_name},
         dataType: 'json',
         url: url,
         success: function(result){
          
            if (result) {
               var html = "";
               for (var i = 0; i < result.length; i++) {
                  var src = result[i]['url']+"/"+result[i]['resize_1'];
                  html+="<div class='well' style = 'max-width: 386px; display: inline-block; min-width: 365px;'>";
                  html+="<img style = 'width: 100%; height: 100%;' class='thumbnail img-responsive' alt="+result[i]['name']+" src='"+src+"' />";
                  html+="<div class='name' style='color: rgb(236, 108, 108); margin-left: 15px; font-style: italic; font-size: 17px;'>";
                  html+="<span>This photo of "+result[i]['user_lastname']+" "+result[i]['user_firstname']+"</span></div>";
                  html+="</div>";
               }
             $('#'+category_name).html(html);
             window.location = url;
         
            }
         }
       });
    });

 /*==================== DOWNLOAD =====================*/
 $('.download').click(function(event){
   var url = $(this).attr("href");
    $.ajax({
         type: 'get',
         url: url,
   });
  event.stopImmediatePropagation();
 });

 /*==================== SCROLL ===========================*/

 var offsetPixels = $('.right-photo').outerHeight() + 40;
 $(window).scroll(function() {
    if ($(window).scrollTop() > offsetPixels) {
      $( ".scroll" ).css({
        "position": "fixed",
        "top": "68px",
        "width" : "25%"
      });
    } else {
      $( ".scroll" ).css({
        "position": "relative",
        "width" : "100%"
      });
    }
  });

});