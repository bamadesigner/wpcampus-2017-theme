(function($) {
	'use strict';

	if ( ! Modernizr.svg ) {

		$( 'img[src*="svg"]' ).attr( 'src', function() {
			return $( this ).attr( 'src' ).replace( '.svg', '.png' );
		});
	}
})(jQuery);