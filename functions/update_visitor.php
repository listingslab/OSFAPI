<?php
// Update visitor with the latest time & page
if ( ! function_exists( 'update_visitor' ) ) :
	function update_visitor (){
		global $api;
		$api['output']['message'] = 'Updating Visitor';
		$api['output']['query'] = $api['query'];
		$data = Array (
	        'lasturl' => $api['query']['lasturl'],
	        'lasttitle' => $api['query']['lasttitle'],
	        'lastting' => time()
		);
		$api ['db']->where ('v_id', $api['query']['v_id']);
		$api ['db']->update ('osf_visitors', $data);
	}
endif;
?>