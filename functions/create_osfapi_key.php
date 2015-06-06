<?php
// Creates a new osfapi_key
if ( ! function_exists( 'create_osfapi_key' ) ) :
	function create_osfapi_key (){
		global $api;
		
		$api['output']['query'] = $api['query'];
		$new_key = 'apikey-public-'.func_random_number (4).'-'.func_random_number (4);
		$data = Array(
			'osfapi_key' => $new_key,
	        'sitename' => $api['query']['sitename'],
	        'access_level' => 'public',
	        'url' => $api['query']['url'],
	        'email' => $api['query']['user_email'],
	        'name' => $api['query']['user_login'],
	        'notify_visit' => 1,
	        'notify_message' => 1,
	        'active' => 1
	    );
		$api ['db']->insert ('osf_keys', $data);
		$api['output']['message'] = 'New osfapi_key created';
		$api['output']['status'] = 'OK';
		$api['output']['osfapi_key'] = $new_key;
	}
endif;
?>