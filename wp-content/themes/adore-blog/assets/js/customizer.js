/**
 * File customizer.js.
 *
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	const adore_blog_section_lists = ['slider','posts-carousel','trending','recent-posts','advertisement-area','latest-posts','subscription','primary-slider'];
    adore_blog_section_lists.forEach(adore_blog_homepage_scroll_preview);

    function adore_blog_homepage_scroll_preview(item, index) {
        // Collect information from customize-controls.js about which panels are opening.
        wp.customize.bind('preview-ready', function() {

            // Initially hide the theme option placeholders on load.
            $('.panel-placeholder').hide();
            item = item.replace(/-/g, '_');
            wp.customize.preview.bind(item, function(data) {
                // Only on the front page.
                if (!$('body').hasClass('home')) {
                    return;
                }

                // When the section is expanded, show and scroll to the content placeholders, exposing the edit links.
                if (true === data.expanded) {
                    $('html, body').animate({
                        'scrollTop': $('#adore_blog_' + item + '_section').position().top
                    });
                }
            });

        });
    }

	// Global site layout
	wp.customize( 'adore_blog_site_layout', function( value ) {
		value.bind( function( to ) {
			if ( 'boxed' === to ) {
				$( 'body' ).addClass( 'boxed-layout' );
				$( 'body' ).removeClass( 'frame-layout' );
				$( 'body' ).removeClass( 'wide-layout' );
			} else if( 'wide' === to ) {
				$( 'body' ).addClass( 'wide-layout' );
				$( 'body' ).removeClass( 'boxed-layout' );
				$( 'body' ).removeClass( 'frame-layout' );
			} else if( 'frame' === to ){
				$( 'body' ).addClass( 'frame-layout' );
				$( 'body' ).removeClass( 'boxed-layout' );
				$( 'body' ).removeClass( 'wide-layout' );
			}
		} );
	} );

	// Header title color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Header tagline color.
	wp.customize( 'adore_blog_header_tagline', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Header text display.
	wp.customize( 'adore_blog_header_text_display', function( value ) {
		value.bind( function( to ) {
			if ( to ) {
				$( '#site-identity' ).css( {
					'display': 'block',
				} );
			} else {
				$( '#site-identity' ).css( {
					'display': 'none',
				} );
			}
		} );
	} );

} )( jQuery );