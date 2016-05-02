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
        likes =  that.data('likes'),
        imagepath = that.data('imagepath'),
        carouselGalleryUrl = that.data('url');
        postLike =  that.data('postlike');
        comment = that.data('comment');
        maxHeight = $(window).height()-100;
        var image_id = that.data('id');

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
                modalHtml += "<div style ='overflow-y: auto; display: block;height: 100%; overflow-x: hidden; border-radius: 3px;'> <div class = 'gallerryImgHeader'><img class = 'avatar' src = '../images/avatar/default-avatar.jpg'><div class='baseInforImg'><span class='carouselGallery-modal-username'><a href='#'>"+username+"</a> </span>"
                modalHtml += "<span class='carouselGallery-modal-location'>"+location+"</span></div><button class='follow'>Theo dõi</button><button class='unfollow'>Bỏ Theo dõi</button><button class='following'>Đang Theo dõi</button></div>";
                modalHtml += "<div class = 'likeTextShare'> <div style = 'height: 52px;'> <span class='carouselGallery-item-modal-likes' style = 'width: 48%;float: left; display: inline-block;'>";
                modalHtml += "<a href = '"+postLike+"' class = 'love' ><span class='icons icon-heart "+getClassForLoveAction(image_id)+"'></span>";
                modalHtml += "<span class = 'numLove'>"+likes+"</span></a>";
                modalHtml += "</span><span class = 'share' style = 'float: right; padding: 8px;'><a href = '#' style = 'font-size: 14px;'><span class='fa fa-share' style = 'display: inline-block; margin-right: 3px;'></span>Chia sẻ</a></span></div>";
                modalHtml += "<span class='carouselGallery-modal-imagetext'>";
                modalHtml += "<p>"+imagetext+"</p>";
                modalHtml += "</span></div>";
                modalHtml += "<div class = 'comment form-group'><label class = 'comment' for = 'comment'>Thêm comment</label><input class='inputTextComment' type = 'text' id='comment'> ";
                modalHtml += "<div class = 'otherComment'><a href = '#'><span class= 'usernameComment'>Thùy Dung</span></a><span class = 'contentComment'>Đẹp đấy</span></div>";
                modalHtml += "<div class = 'otherComment'><a href = '#'><span class= 'usernameComment'>Tiểu Long Hoàng</span></a><span class = 'contentComment'>Like! that beatiaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</span></div>"; 
                modalHtml += "<div class = 'otherComment'><a href = '#'><span class= 'usernameComment'>Thùy Dung</span></a><span class = 'contentComment'>Đẹp đấy</span></div>";
                modalHtml += "<div class = 'otherComment'><a href = '#'><span class= 'usernameComment'>Tiểu Long Hoàng</span></a><span class = 'contentComment'>Like! that beatiaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</span></div>"; 
                modalHtml += "<div class = 'otherComment'><a href = '#'><span class= 'usernameComment'>Thùy Dung</span></a><span class = 'contentComment'>Đẹp đấy</span></div>";
                modalHtml += "<div class = 'otherComment'><a href = '#'><span class= 'usernameComment'>Tiểu Long Hoàng</span></a><span class = 'contentComment'>Like! that beatiaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</span></div>"; 
                modalHtml += "<div class = 'otherComment'><a href = '#'><span class= 'usernameComment'>Thùy Dung</span></a><span class = 'contentComment'>Đẹp đấy</span></div>";
                modalHtml += "<div class = 'otherComment'><a href = '#'><span class= 'usernameComment'>Tiểu Long Hoàng</span></a><span class = 'contentComment'>Like! that beatiaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</span></div>";
                modalHtml += "</div></div></div></div></div></div></div>";
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


    var getClassForLoveAction = function(image_id){

        var url = "http://"+window.location.hostname+":8000/web/photo/action/checkLike";

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

        if ($(e.target).hasClass('loveHeart')) {
            loveAction(e);
        }
        else if($(e.target).hasClass('loved')){
            unLoveAction(e);
        }
        return false;
    });
    var loveAction = function (e){
       if ($(e.target).hasClass('loveHeart')) {

            var data = {};
            var numLove = $(e.target).siblings('span.numLove').text();
            
            data['image_id'] = $('input.image_id').val();

            var urlPost = $(e.target).parent().attr('href')+"/like";

        $.ajax({
            url: urlPost,
            data: { "data": data},
            type: 'post',
            dataType: 'json',
        })
        .done(function(  data ){
            $(e.target).removeClass("loveHeart").addClass("loved");
            numLove = Number(numLove) + 1;
             $(e.target).siblings('span.numLove').text(numLove);
        });
       }
    }
    var unLoveAction = function (e){
        if ($(e.target).hasClass('loved')) {

            var data = {};
            var numLove = $(e.target).siblings('span.numLove').text();
            
            data['image_id'] = $('input.image_id').val();

            var urlPost = $(e.target).parent().attr('href')+"/dislike";

        $.ajax({
            url: urlPost,
            data: { "data": data},
            type: 'post',
            dataType: 'json',
        })
        .done(function(  data ){
            $(e.target).removeClass("loved").addClass("loveHeart");
            numLove = Number(numLove) - 1;
            $(e.target).siblings('span.numLove').text(numLove);
        });
       }
    }



});
