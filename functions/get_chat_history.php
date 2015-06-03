<?php
// Returns chat history for v_id
if ( ! function_exists( 'get_chat_history' ) ) :
	function get_chat_history (){
		global $api;
		$api['output']['status'] = 'OK';
		$api['output']['message'] = 'chat history for v_id=' . $api['query']['v_id'];
		$api ['db']->WHERE ("v_id_to", $api['query']['v_id']);
		$api ['db']->orWHERE ("v_id_from", $api['query']['v_id']);			
		$api ['db']->orderBy ("time_sent", 'DESC');
		$messages = $api ['db']->get ("osf_messages", 10);
		$api['output']['messages'] = $messages;
	}
endif;
?>