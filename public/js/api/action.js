$(document).ready(function(){
	$('.like').click(function(e){

		var data = {};
		data['image_id'] = $(this).parents(".photo").data("id");
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
        	console.log(data);
            $(e.target).removeClass("icon-like").addClass("icon-love");
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
        });
       }
    }

});