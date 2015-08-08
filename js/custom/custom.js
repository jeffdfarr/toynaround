jQuery(document).ready(function () {
    jQuery('.js-team-card-trigger').on('click', function (e) {
        jQuery(this).find('.js-team-card').toggleClass('fadeInScale');
    });
});

