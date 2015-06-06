<?php
// Update the plugin settings for a key
if ( ! function_exists( 'update_settings' ) ) :
	function update_settings (){
		global $api;
		$api['output']['message'] = 'Updating Settings';
		$api['output']['query'] = $api['query'];
		
		$data = Array (
	        'start' => $api['query']['start'],
	        'email' => $api['query']['email'],
	        'name' => $api['query']['name'],
	        'notify_visit' => $api['query']['notify_visit'],
	        'notify_message' => $api['query']['notify_message']
		);
		$api ['db']->where ('osfapi_key', $api['query']['osfapi_key']);
		$api ['db']->update ('osf_keys', $data);
	}
endif;
?>