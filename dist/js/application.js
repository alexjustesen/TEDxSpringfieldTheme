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
    
    // Show .cta-container
    $('.cta-container').hide().removeClass( 'hidden' ).slideDown( 500 );
    
    // Initiate Shave js function
    shave( '.talk-shortcode .caption .shave', 26);

    // Initiate matchHeight js function
    $('.match-height').matchHeight();
});

//-- Initiate responsive-toolkit --------------------------------------------
(function($, document, window, viewport){
    
    // Executes once whole document has been loaded
    $(document).ready(function() {
        navbarChange();
    });

    $(window).resize(
        viewport.changed(function(){
            navbarChange();
        })
    );
    
    function navbarChange() {
        if( viewport.is("<=sm") ) {
            $( 'nav.navbar' ).removeClass( 'navbar-static-top' ).addClass( 'navbar-fixed-top' );
            $( 'body' ).css( 'padding-top', '50px' );
        }

        if( viewport.is(">=md") ) {
            $( 'nav.navbar' ).addClass( 'navbar-static-top' ).removeClass( 'navbar-fixed-top' );
            $( 'body' ).css( 'padding-top', '0px' );
        }
    }

})(jQuery, document, window, ResponsiveBootstrapToolkit);
