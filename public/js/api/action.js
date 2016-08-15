$(document).ready(function(){
    /*====================== LIKE =========================*/
	$('.like').click(function(e){

		var data = {};
		data['image_id'] = $(this).parents(".like-photo").data("id");

		var urlPost = $(this).attr("href");

		if ($(e.target).hasClass("icon-like")) {
			loveAction(e, data, urlPost);
		}
		else if($(e.target).hasClass("icon-love")){
			unLoveAction( e, data, urlPost);
		}
		return false;
	});

	var loveAction = function (e, data, urlPost ){

       if ($(e.target).hasClass( 'icon-like')) {

        urlPost = urlPost+"/like";
        $.ajax({
            url: urlPost,
            data: { "data": data},
            type: 'post',
            dataType: 'json',
        })
        .done(function(  data ){
        
            $(e.target).removeClass("icon-like").addClass("icon-love");

            var photo = $(e.target).parents(".like-photo").children(".listLike");

            var user_id = data['user_id'];

            var temp = "<a href = '/web/user/profile/"+user_id+"' id = '"+user_id+"'>"+data['username']+"</a>";
              
            if (photo.children(".empty-like").length > 0) {

                photo.children(".empty-like").remove(); 
                photo.fadeIn(500).prepend(temp+" like this!!!");
            }
            else{
                photo.fadeIn(500).prepend(temp+" ");
            }
            
           var numLike = $(e.target).parents(".active-photo").siblings(".headerInfor").children().children(".icon-love");
           numLike.text(parseInt(numLike.text())+1);
        });
       }
    }
    var unLoveAction = function (e, data, urlPost ){
        if ($(e.target).hasClass('icon-love')) {

        urlPost = urlPost+"/dislike/"+data['image_id'];

        $.ajax({
            url: urlPost,
            type: 'delete',
            dataType: 'json',
        })
        .done(function(  data ){
            $(e.target).removeClass("icon-love").addClass("icon-like");

            var photo = $(e.target).parents(".like-photo").children(".listLike");

            var user_id = data;

            if (photo.children().length == 1) {
                photo.find("a#"+user_id).fadeOut(500).remove();
                photo.text("").append("<span class = 'empty-like'>Maybe no one has seen this =)))</span>");
            }

            else{
                photo.find("a#"+user_id).fadeOut(500).remove();
            }
            var numLike = $(e.target).parents(".active-photo").siblings(".headerInfor").children().children(".icon-love");
           numLike.text(parseInt(numLike.text())-1);
        });
       }
    }
    $('.noti').mouseenter(function(){
        var noti_id = $(this).data("noti_id");
        var urlPost = $(this).data("url");
        var noti = $(this);

        $.ajax({
            url: urlPost,
            type: 'post',
            data: {'noti_id': noti_id},
            dataType: 'json',
        })
        .done(function( data ){
            if (data.result === 'OK') {
                noti.removeClass("noti");
                noti.removeAttr("style");
            }
        });
    });
    /*====================== COMMENT ========================*/


    $('.commentPhoto').keypress(function(e){

        if (e.keyCode == 13) {

        var content =  $(this).val();

        var input = $(this);

        if (content != "") {

            var url = $(this).parents().attr("action");
            var image_id = $(this).parents(".add-comment").data("id");
             var data = {};
                data['content'] = content;
                data['image_id'] = image_id;

            $.ajax({
                url: url,
                type: 'post',
                data: {"data": data},
                dataType: 'json',
            })
            .done(function( data ){
             
             /*add more comment*/  
        var comment = "<div class = 'comment'><img class = 'ava-img' src = '"+data['avatar']+"'>";
            comment += "<a href = '/web/user/profile/"+data['user_id']+"'><span class= 'usernameComment'>"+data['username']+"</span></a>";
            comment += "<span class = 'contentComment'>"+data['content']+"</span><br>";
            comment += "<a class = 'remove-comment' href = '/web/photo/action/deleteComment/"+data['image_id']+"'> <span data-toggle='tooltip' title='delete comment!' class = 'delete-comment'> </span></a>";
            comment += "<time><span style = 'font-size: 11px; margin-left: 39px; color: #b2b7b4;'> just now</span> </time>";
            comment += "</div>";

            input.parents(".add-comment").fadeIn(500).after(comment);
            var numCom = input.parents(".active-photo").siblings(".headerInfor").children().children(".comment-icon");
            numCom.text(parseInt(numCom.text())+1);

            input.val("");
               

            });
        }
        return false;
        }
     
    });
 /*====================== COMMENT ========================*/

 $('.view-more').click(function(e){
    $(this).siblings(".comment").fadeIn(500).css("display", "block");
    $(this).siblings(".view-less").fadeIn().css("display", "block");
    $(this).fadeOut(1000).css("display", "none");
    
    return false;
 });

 $(".view-less").click(function(e){
     var comment = $(this).siblings(".comment");
     for (var i = 4; i < comment.length; i++) {
         $(comment[i]).fadeOut(1000).css("display", "none");
     }
     $(this).siblings(".view-more").fadeIn(1000).css("display", "block");
    $(this).fadeOut(1000).css("display", "none");
    
    return false;
 })
});
