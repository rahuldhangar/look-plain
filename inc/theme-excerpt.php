<?php
// Filter except length to 35 words.
// tn custom excerpt length
function excerpt_length( $length ) {
	return 20;
	}
add_filter( 'excerpt_length', 'excerpt_length', 999 );
