jQuery(function($) {

    var updateArrows = function(){
        $('.carouselGallery-right').removeClass('disabled');
        $('.carouselGallery-left').removeClass('disabled');
        var curIndex = $('.carouselGallery-carousel.active').data('index');
        updateArrows.nbrOfItems = updateArrows.nbrOfItems || $('.carouselGallery-carousel').length -1;

        curIndex === updateArrows.nbrOfItems && $('.carouselGallery-right').addClass('disabled');
        curIndex === 0 && $('.carouselGallery-left').addClass('disabled');
    }
    $('.carouselGallery-carousel').on('click', function(e){
        scrollTo = $('body').scrollTop();
        $('body').addClass('noscroll');
        $('body').css('position', 'fixed');
        $('.carouselGallery-col-1, .carouselGallery-col-2').removeClass('active');
        $(this).addClass('active');
        showModal($(this));
        updateArrows();
    });

    $('body').on('click', '.carouselGallery-right, .carouselGallery-left', function(e){
        if($(this).hasClass('disabled')) return;
        var curIndex = $('.carouselGallery-carousel.active').data('index');
        var nextItemIndex = parseInt(curIndex+1);
        if($(this).hasClass('carouselGallery-left')){
            nextItemIndex-=2;
        }
        var nextItem = $('.carouselGallery-carousel[data-index='+nextItemIndex+']');
       // console.log(nextItemIndex);
        if(nextItem.length > 0){
            $('.carouselGallery-col-1, .carouselGallery-col-2').removeClass('active');
            $('body').find('.carouselGallery-wrapper').remove();
            showModal($(nextItem.get(0)));
            nextItem.first().addClass('active');
        }
        updateArrows();
    });

    var modalHtml = '';
    showModal = function(that){
    /*   console.log(that);*/
        var username = that.data('username'),
        location = that.data('location'),
        imagetext = that.data('imagetext'),
        imagepath = that.data('imagepath'),
        carouselGalleryUrl = that.data('url');
        avatar = that.data("avatar");
        maxHeight = $(window).height()-100;
        var image_id = that.data('id'),
            idMe = that.data("idme"),
            time = that.data("time"),
            user_id = that.data("user_id");

        if ($('.carouselGallery-wrapper').length === 0) {
            if(typeof imagepath !== 'undefined') {
                modalHtml = "<div class='carouselGallery-wrapper'>";
                modalHtml += "<div class='carouselGallery-modal'><span class='carouselGallery-left'><span class='icons icon-arrow-left6'></span></span><span class='carouselGallery-right'><span class='icons icon-arrow-right6'></span></span>";
                modalHtml += "<div class='container'>";
                modalHtml += "<span class='icons iconscircle-cross close-icon'></span>";
                modalHtml += "<div class='carouselGallery-scrollbox' style='max-height:"+maxHeight+"px'><div class='carouselGallery-modal-image'>";
                modalHtml += "<img src='"+imagepath+"' alt='carouselGallery image'>";
                modalHtml += "</div>";
                modalHtml += "<div class='carouselGallery-modal-text'><input  type = 'hidden' class = 'image_id' value ='"+image_id+"' >";
                modalHtml += "<div style ='overflow-y: auto; display: block;height: 100%; overflow-x: hidden; border-radius: 3px;'> <div class = 'gallerryImgHeader'><img class = 'avatar' src = '"+avatar+"'><div class='baseInforImg'><span class='carouselGallery-modal-username'><a href='/web/user/profile/"+user_id+"'>"+username+"</a> </span>"
                modalHtml += "<span class='carouselGallery-modal-location'>"+time+" "+location+"</span></div><a class = 'flow' href = '/web/photo/action/' data-user_id = '"+user_id+"'>"+getFlow(image_id)+"</a></div>";
                modalHtml += "<div class = 'likeTextShare' style = 'display: inline-block;'> <div > <span class='carouselGallery-item-modal-likes' style = ' display: inline-block;'>";
                modalHtml += "<a href = '/web/photo/action' class = 'love' ><span class='icons icon-heart "+getClassForLoveAction(image_id)+"'></span>";
                modalHtml += ""+getTotalLike(image_id)+"</a>";
                modalHtml += "</span><span class = 'share' style = 'float: right; padding: 8px;'></span></div>";
                modalHtml += "<span class='carouselGallery-modal-imagetext'>";
                modalHtml += "<p>"+imagetext+"</p>";
                modalHtml += "</span></div>";
                modalHtml += "<form id = 'formComment' method = 'post' action = '/web/photo/action/comment'><div class = 'comment form-group'><label class = 'comment' for = 'comment'>Add new comment</label><input class='inputTextComment' type = 'text' id='comment' placeholder='comment here!' style = 'font-size:15px;'></div></form> ";
                modalHtml += getCommentImage( image_id , idMe);
                modalHtml += "</div></div></div></div></div></div>";
                $('body').append(modalHtml).fadeIn(2500);
            }
        }
    };

    $('body').on( 'click','.carouselGallery-wrapper', function(e) {
        if($(e.target).hasClass('.carouselGallery-wrapper')){
            removeModal();
        }
    });
    $('body').on('click', '.carouselGallery-modal .iconscircle-cross', function(e){
        removeModal();
    });

    var removeModal = function(){
        $('body').find('.carouselGallery-wrapper').remove();
        $('body').removeClass('noscroll');
        $('body').css('position', 'static');
        $('body').animate({scrollTop: scrollTo}, 0);
    };

    // Avoid break on small devices
    var carouselGalleryScrollMaxHeight = function() {
        if ($('.carouselGallery-scrollbox').length) {
            maxHeight = $(window).height()-100;
            $('.carouselGallery-scrollbox').css('max-height',maxHeight+'px');
        }
    }
    $(window).resize(function() { // set event on resize
        clearTimeout(this.id);
        this.id = setTimeout(carouselGalleryScrollMaxHeight, 100);
    });
    document.onkeydown = function(evt) {
        evt = evt || window.event;
        if (evt.keyCode == 27) {
            removeModal();
        }
    };
    /*==============================================================
                            Event Like, Comment and Flow
    ===============================================================*/

/*===========================================================================
                            LIKE 
=============================================================================*/
    var getTotalLike = function ( image_id ){
        var url = "/web/photo/action/getLike";

        var data = {};
        data['image_id'] = image_id;

        request= $.ajax({
            url: url,
            data: {'data': data},
            type: 'post',
            dataType: 'json',
            async: false,
        });
        if (request.responseJSON.total) {
            var like = request.responseJSON.total;
            var user_like = "";
            for (var i = 0; i < like.length; i++) {
                user_like += "<a class='userName' data-user_id = '"+like[i].user_id+"' href = '/web/user/profile/"+like[i].user_id+"'><span style='display: inline-block;    font-size: 14px;'>"+like[i].user_lastname+" "+like[i].user_firstname+"</span></a>"+" ";
            }
            return user_like;
        }
        return "";
    }
    var getClassForLoveAction = function(image_id){

        var url = "/web/photo/action/checkLike";

        var data = {};
        data['image_id'] = image_id;

        request= $.ajax({
            url: url,
            data: {'data': data},
            type: 'post',
            dataType: 'json',
            async: false,
        });
        if (!request.responseJSON.love) {
            return "loveHeart"
        }
        return "loved";
    }

    $('body').on('click','.love', function (e){

        var data = {};
            
        data['image_id'] = $('input.image_id').val();

        var urlPost = $(e.target).parent().attr('href');

        if ($(e.target).hasClass('loveHeart')) {
            loveAction(e, urlPost, data);
        }
        else if($(e.target).hasClass('loved')){
            unLoveAction(e,  urlPost, data);
        }
        /*e.stopPropagation();*/
        e.preventDefault();
    });
    var loveAction = function (e,  urlPost, data){
       if ($(e.target).hasClass( 'loveHeart')) {

        urlPost = urlPost+"/like";
        $.ajax({
            url: urlPost,
            data: { "data": data},
            type: 'post',
            dataType: 'json',
        })
        .done(function(  data ){
            $(e.target).removeClass("loveHeart").addClass("loved");
            
            var temp = "<a class='userName' data-user_id = '"+data.user_id+"' href='/web/user/profile/"+data.user_id+"'><span style='display: inline-block;    font-size: 14px;'>"+data.username+"<span></a>"+" ";
            
            $(e.target).after(temp);
        });
       }
    }
    var unLoveAction = function (e , urlPost, data){
        if ($(e.target).hasClass('loved')) {

        urlPost = urlPost+"/dislike/"+data['image_id'];

        $.ajax({
            url: urlPost,
            type: 'delete',
            dataType: 'json',
        })
        .done(function(  data ){

            var name = $('.carouselGallery-item-modal-likes').find("a.userName");

            $(e.target).removeClass("loved").addClass("loveHeart");
            
            for (var i = 0; i < name.length; i++) {
                var id = parseInt( $(name[i]).data("user_id") );
                if(  id == data ){
                    $(name[i]).remove();
                }
            }
           
        });
       }
    }
/*===========================================================================
                            FOLLOW 
=============================================================================*/
    var getFlow = function (image_id) 
    {
        var url = "/web/photo/action/checkFollow";
        var data = {};

        data['image_id'] = image_id;

        request= $.ajax({
            url: url,
            data: {'data': data},
            type: 'post',
            dataType: 'json',
            async: false,
        });
        if ( request.responseJSON.follow === "follow") {
            return "<button class = 'follow'> Follow </button>";
        }
        else if( request.responseJSON.follow  === "following" ){ 
            return "<button class = 'following'>Following</button>";
        }
        else if( request.responseJSON.follow === "duplicate id"){
            return "";
        }

    }
    $('body').on('mouseenter','.following' , function (e){
        $(this).removeClass("following").addClass("unfollow");
        $(this).text("Unfollow");
    });
    $('body').on('mouseleave','.unfollow' , function (e){
        $(this).removeClass("unfollow").addClass("following");
        $(this).text("Following");
    });

        $('body').on('click','.follow', function (e){

            var data = {};
                
            data['follow_to_user_id'] = $(e.target).parents().data("user_id");

            var urlPost = $(e.target).parent().attr('href');

            followAction(e, urlPost, data);

            e.preventDefault();
        });

        $('body').on('click','.unfollow', function (e){

            var data = {};
                
            data['follow_to_user_id'] = $(e.target).parents().data("user_id");

            var urlPost = $(e.target).parent().attr('href');

            unfollowAction(e, urlPost, data);
            
            e.preventDefault();
        });
      var followAction = function (e, urlPost, data) {
          
        urlPost = urlPost+"follow"; //urlPost = /web/photo/action/follow
        $.ajax({
            url: urlPost,
            data: { "data": data},
            type: 'post',
            dataType: 'json',
        })
        .done(function(  data ){
            $(e.target).removeClass("follow").addClass("following");
            $(e.target).text("Following");
            $('#numFollow').text( parseInt ( $('#numFollow').text()) + 1 );
        });
       }

       var unfollowAction = function (e, urlPost, data) {

        urlPost = urlPost+"unfollow/"+data['follow_to_user_id'];
        $.ajax({
            url: urlPost,
            type: 'delete',
            dataType: 'json',
        })
        .done(function(  data ){
            if ($(e.target).hasClass("unfollow")) {
                $(e.target).removeClass("unfollow").addClass("follow");
            }
            if ($(e.target).hasClass("following")) {
                $(e.target).removeClass("following").addClass("follow");
            }
             $('#numFollow').text( parseInt ( $('#numFollow').text()) - 1 );
            $(e.target).text("Follow");
        });
       }
/*===========================================================================
                            COMMENT
=============================================================================*/

var getCommentImage = function ( image_id , idMe ) {

    var url = "/web/photo/action/getComment";
    var data = {};

    data['image_id'] = image_id;

    request = $.ajax({
            url: url,
            data: {'data': data},
            type: 'post',
            dataType: 'json',
            async: false,
    });
    if (request.responseJSON.comment) {
        var all_comment = request.responseJSON.comment;
        var comment = '';

        for (var i = 0; i < all_comment.length; i++) {
            comment += "<div class = 'otherComment'><img src = '"+all_comment[i]['avatar']+"'>";
            comment += "<a href = '#'><span class= 'usernameComment'>"+all_comment[i]['last_name']+" "+all_comment[i]['first_name']+"</span></a>";
            comment += "<span class = 'contentComment'>"+all_comment[i]['content']+"</span>";
            if (all_comment[i]['user_id'] == idMe ) {
                comment += "<a href = '/web/photo/action/deleteComment/"+all_comment[i]['id']+"' class = 'remove-comment'> <span data-toggle='tooltip' title='delete comment!' class = 'delete-comment' style = 'margin-top: 3px !important;'> </span></a>";
            }
            comment += "</div>";
        }
        return comment;
    }
}


$('body').on('submit', '#formComment', function(e){

    var data = {};
    data['content'] = $('input#comment').val();
    data['image_id'] = $('input.image_id').val();
    
 if (data['content'] != "") {
       var urlPost = $(this).attr("action");
    var url = urlPost;

    $.ajax({
        url: url,
        type: 'post',
        data: {"data": data},
        dataType: 'json',
    })
    .done(function( data ){
        addComment( data );
    });
 }
    
  e.preventDefault();
});

var addComment = function (data) {
  
    var comment = "<div class = 'otherComment'><img src = '"+data['avatar']+"'>";
            comment += "<a href = '#'><span class= 'usernameComment'>"+data['username']+"</span></a>";
            comment += "<span class = 'contentComment'>"+data['content']+"</span>";
            comment += "<a class = 'remove-comment' href = '/web/photo/action/deleteComment/"+data['id']+"'> <span data-toggle='tooltip' title='delete comment!' class = 'delete-comment' style = 'margin-top: 3px !important;'> </span></a>";
            comment += "</div>";
    $('#formComment').append(comment);
    $('input#comment').val("");
}

    $('body').on('click', '.remove-comment', function (e){

        var url = $(this).attr("href");

        var result = $.ajax({
            url: url,
            type: 'delete',
            dataType: 'json',
            async: false,
        });
        if (result.responseJSON.delete) {
            if ($(this).parents(".otherComment").length > 0) {
                $(this).parents(".otherComment").remove(); 
            }
              if ($(this).parents(".comment").length > 0) {
                var comment = $(this).parents(".active-photo").siblings(".headerInfor").children().children(".comment-icon");

                comment.text(parseInt(comment.text()) - 1);
                $(this).parents(".comment").remove(); 

            }
              
        }
    
       e.preventDefault();
    });
});
