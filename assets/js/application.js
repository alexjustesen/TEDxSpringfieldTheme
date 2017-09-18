//-- Initialize -------------------------------------------------------------
$( document ).ready( function () {    
  var team_tiles = $('.team-tile');
  if (team_tiles.length > 0) {
    $.each(team_tiles, function (index, value) {
      new TeamTile($(value));
    });
  }
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').on( "click", function () {
        $("html, body").animate({
            scrollTop: 0
        }, 250);
        return false;
    });
    
    // Show .cta-container
    $('.cta-container').hide().removeClass( 'hidden' ).slideDown( 500 );
});

//-- Initiate Shave Classes -------------------------------------------------
shave( '.talk-shortcode .caption .shave', 26);

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

//-- TeamTile Class ---------------------------------------------------------
function TeamTile(el) {
  this.max_tile_info_height = 77;
  this.tile_el = el;

  var resizeTile = function (tile, max_height) {
    var tile_height = tile.outerHeight();
    var info = tile.find('.team-info');
    var info_height = info.outerHeight();
    if (info_height > max_height) {
      var top = (info_height - max_height) * -1;
      var height = (tile_height - (  info_height - max_height));
      info.css('position', 'relative').css('top', top);
      tile.css('height', height);
    }
  };

  this.init = function () {
    resizeTile(this.tile_el, this.max_tile_info_height);
  };

  this.init();
}
