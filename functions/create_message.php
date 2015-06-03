<?php
// Creates a new message
if ( ! function_exists( 'create_message' ) ) :
	function create_message (){
		global $api;
		$api['output']['status'] = 'OK';
		$api['output']['message'] = 'Creating message';
		$inputs = $_GET;
		$api['output']['data'] = Array(
			'hostname' => $inputs ['hostname'],
			'name' => $inputs ['name'],
	        'v_id_to' => $inputs ['v_id_to'],
	        'v_id_from' => $inputs ['v_id_from'],
	        'message' => $inputs ['message'],
	        'time_sent' => time(),
	    );
		$m_id= $api ['db']->insert ('osf_messages', $api['output']['data']);
		$api['output']['m_id'] = $m_id;
	}
endif;
?>