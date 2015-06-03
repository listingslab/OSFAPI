<?php
// Gets messages by hostname and v_id_to
if ( ! function_exists( 'get_messages' ) ) :
	function get_messages (){
		global $api;
		$api['output']['status'] = 'OK';
		$api['output']['message'] = 'latest messages';
		$inputs = $_GET;
		
		$api ['db']->orderBy ("time_sent", 'DESC');
		$api ['db']->WHERE ("hostname", $inputs ['hostname']);
		$api ['db']->WHERE ("v_id_to", 'admin');
		$messages = $api ['db']->get ("osf_messages", 25);
		$api['output']['messages'] = $messages;	
		 
	}
endif;
?>