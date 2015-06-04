<?php
// Checks a given apikey with the database
if ( ! function_exists( 'check_apikey' ) ) :
	function check_key ($apikey){
		global $api;
		$api['output']['status'] = 'OK';
		$api['output']['message'] = 'checking apikey ' . $apikey;
		$cols = Array ("apikey");
		$api ['db']->where ('apikey', $apikey);
		$api ['db']->where ('active', 1);
		$result = $api ['db']->get ('osf_keys');
		if ($api ['db']->count > 0){
			return true;
		}else{
			return false;
		}
	}
endif;
?>