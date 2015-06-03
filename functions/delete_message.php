<?php
// Creates a new message
if ( ! function_exists( 'delete_message' ) ) :
	function delete_message (){
		global $api;
		$api['output']['status'] = 'OK';
		$api['output']['message'] = 'Deleting message';
		$data = Array (
    			'deleted' => 1
		);
		$api ['db']->where ('m_id', $api['query']['m_id']);
		$api ['db']->update ('osf_messages', $data);
	}
endif;
?>