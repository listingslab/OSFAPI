<?php
// Gets messages by hostname and v_id_to
if ( ! function_exists( 'get_key_data' ) ) :
	function get_key_data (){
		global $api;
		$api['output']['status'] = 'OK';
		$api['output']['message'] = 'Getting key data';
		$api ['db']->WHERE ("osfapi_key", $api['query']['osfapi_key']);
		$key_data = $api ['db']->get ("osf_keys", 1);
		$api['output']['key_data'] = $key_data;
	}
endif;
?>