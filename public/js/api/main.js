$(document).ready(function(){

	function signOut() {
		var signOut = $('#signout');
        if (signOut) {
            signOut.click(function(){
                window.localStorage.clear();
                window.sessionStorage.clear();
            });

        }
	}
	
	$('#changeAvatar').click(function(){

	})
	$('input#avatar:file').change(function(e){
		
		var image_name = e.target.files[0].name;
		
		$('span#avaNewName').html(image_name);

		$('#areaUpload').css("display", "none");
		$('#btnChange').css("display", "block");

	});

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
   	 				/*ressetAllInput();*/
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
             console.log(result);
            if (result) {
               var html = "";
               for (var i = 0; i < result.length; i++) {
                  var src = result[i]['url']+"/"+result[i]['resize_1'];
                  html+="<div class='well' style = 'max-width: 386px; display: inline-block; min-width: 365px;'>";
                  html+="<img style = 'width: 100%; height: 100%;' class='thumbnail img-responsive' alt="+result[i]['name']+" src='"+src+"' />";
                  html+="</div>";
               }
             $('#'+category_name).html(html);
            history.pushState({}, null, url);
            }
         }
       });
    });
});