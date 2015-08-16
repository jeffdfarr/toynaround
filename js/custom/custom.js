jQuery(document).ready(function () {
    jQuery('.js-team-card-trigger').on('click', function (e) {
        jQuery(this).find('.js-team-card').toggleClass('fadeInScale');
    });
});

(function($) {          
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 200) {
                $('.top-bar').fadeIn(500);
            } else {
                $('.top-bar').fadeOut(500);
            }
        });
    });
})(jQuery);




