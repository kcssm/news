/**
 * Handles toggling the main navigation menu for small screens.
 * A Generic wrapper class for show/hide stuff on hover
 */
jQuery( document ).ready(function( $ ) {
    var $masthead = $( '#masthead' ),
        timeout = false;

    $.fn.smallMenu = function() {
        $masthead.find( '.site-navigation' ).removeClass( 'main-navigation' ).addClass( 'main-small-navigation' );
        $masthead.find( '.site-navigation h1' ).removeClass( 'assistive-text' ).addClass( 'menu-toggle' );

        $( '.menu-toggle' ).unbind( 'click' ).click( function() {
            $masthead.find( '.menu' ).toggle();
            $( this ).toggleClass( 'toggled-on' );
        } );
    };

    // Check viewport width on first load.
    if ( $( window ).width() < 600 )
        $.fn.smallMenu();

    // Check viewport width when user resizes the browser window.
    $( window ).resize( function() {
        var browserWidth = $( window ).width();

        if ( false !== timeout )
            clearTimeout( timeout );

        timeout = setTimeout( function() {
            if ( browserWidth < 600 ) {
                $.fn.smallMenu();
            } else {
                $masthead.find( '.site-navigation' ).removeClass( 'main-small-navigation' ).addClass( 'main-navigation' );
                $masthead.find( '.site-navigation h1' ).removeClass( 'menu-toggle' ).addClass( 'assistive-text' );
                $masthead.find( '.menu' ).removeAttr( 'style' );
            }
        }, 200 );
    } );

    // Generic show and hide wrapper class
    $( ".wrap" ).hover( function() {
        $( ".hide", this ).fadeTo( 300, 1.0 ); // This sets 100% on hover
        $( ".fade", this ).fadeTo( 300, 0.7 ); // This sets 70% on hover
        $( ".show", this ).fadeTo( 300, 0.2 ); // This sets 100% on hover
    }, function() {
        $( ".hide", this ).fadeTo( 300, 0 ); // This should set the opacity back to 0% on mouseout
        $( ".fade", this ).fadeTo( 300, 1.0 ); // This sets 80% on hover
        $( ".show", this ).fadeTo( 300, 1.0 ); // This should set the opacity back to 0% on mouseout
    } );
	
	
	
	
	$('#featuredimages').cycle({ 
		fx:    'fade', 
		speed:  1000		
	});
	
	$('#hot').cycle({ 
		fx: 'scrollLeft' 
	});

} );