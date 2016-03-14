
//========================
//NAVBAR
//========================
(function ($) {
  $(document).ready(function(){

    // hide .navbar first
    $(".animation").hide();

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 40) {
                $('.animation')
                .removeClass('animated fadeOutUp')
                .addClass('animated fadeInDown')
                .fadeIn();
                
            } else {
                $('.animation')
                .removeClass('animated fadeInDown')
                .addClass('animated fadeOutUp')
                .fadeOut();
            }
        });
    });

    /*======== NAV ===========*/
      // Remove Search if user Resets Form or hits Escape!
        $('body, .navbar-collapse form[role="search"] button[type="reset"]').on('click keyup', function(event) {
          
            if (event.which == 27 && $('.navbar-collapse form[role="search"]').hasClass('active') ||
                $(event.currentTarget).attr('type') == 'reset') {
                closeSearch();
            }
        });

        function closeSearch() {
            var $form = $('.navbar-collapse form[role="search"].active')
            $form.find('input').val('');
            $form.removeClass('active');
        }

        // Show Search if form is not active // event.preventDefault() is important, this prevents the form from submitting
        $(document).on('click', '.navbar-collapse form[role="search"]:not(.active) button[type="submit"]', function(event) {
            event.preventDefault();
            var $form = $(this).closest('form'),
                $input = $form.find('input');
            $form.addClass('active');
            $input.focus();

        });
        // ONLY FOR DEMO // Please use $('form').submit(function(event)) to track from submission
        // if your form is ajax remember to call `closeSearch()` to close the search container
        $(document).on('click', '.navbar-collapse form[role="search"].active button[type="submit"]', function(event) {
            event.preventDefault();
            var $form = $(this).closest('form'),
                $input = $form.find('input');
            $('#showSearchTerm').text($input.val());
            closeSearch()
        });
});
  }(jQuery));
    $(function () {
      
    });