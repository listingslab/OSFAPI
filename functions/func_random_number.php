<?php
// Returns a random number of x digits
if ( ! function_exists( 'func_random_number' ) ) :
	function func_random_number ($digits) {
	  return rand (pow(10, $digits - 1) - 1, pow(10, $digits) - 1);
	}
endif;
?>