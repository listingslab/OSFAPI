<?php
// Creates a new osfapi_key
if ( ! function_exists( 'create_osfapi_key' ) ) :
	function create_osfapi_key (){
		global $api;
		
		$api['output']['query'] = $api['query'];
		$new_key = 'apikey-public-'.func_random_number (4).'-'.func_random_number (4);
		$data = Array(
			'osfapi_key' => $new_key,
	        'key_url' => $api['query']['key_url'],
	        'sitename' => $api['query']['sitename'],
	        'access_level' => 'public',
	        'email' => $api['query']['user_email'],
	        'name' => $api['query']['user_login'],
	        'notify_visit' => 1,
	        'notify_message' => 1,
	        'active' => 1
	    );
		$api ['db']->insert ('osf_keys', $data);
		//$api ['db']->WHERE ("k_id", $k_id);
		//$api['output']['key_data'] = $api ['db']->get ("osf_keys", 1);
		$api['output']['message'] = 'New osfapi_key created';
		$api['output']['status'] = 'OK';
		$api['output']['osfapi_key'] = $new_key;
	}
endif;
?>