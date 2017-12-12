//-- Initialize -------------------------------------------------------------
$( document ).ready( function () {
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').on( "click", function () {
        $("html, body").animate( { scrollTop: 0 }, 250 );
        return false;
    });
    
    // Initiate Shave js function
    shave( '.talk-shortcode .caption .shave', 26);

    // Initiate matchHeight js function
    $('.match-height').matchHeight();
});
